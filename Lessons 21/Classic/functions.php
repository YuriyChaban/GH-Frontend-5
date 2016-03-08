<?php


define( 'WP_DEBUG', true);
define( 'SCRIPT_DEBUG', true);

function my_classic_theme_load_resources() {
    wp_enqueue_style('classic_style', get_template_directory_uri() . '/stylesheets/style.css');
    wp_enqueue_script('my_new_script', get_template_directory_uri() . '//lime/contact.js');
}

add_action('wp_enqueue_scripts', 'my_classic_theme_load_resources');

//__________________________________________________________________
//Theme setup
function my_classic_setup() {

    //Navigation Menus

    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer-nav' => __('Footer Menu'),
    ));

    // Add feature image support
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_classic_setup');
//__________________________________________________________________
//enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets() {
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts', 'enqueue_our_required_stylesheets');

add_action('wp_enqueue_scripts', 'blm_init_method');
/*__________________________________________________________________*/
/*include JQuery*/
function my_jquery() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}
add_action('wp_enqueue_scripts', 'my_jquery');

function blm_init_method()
{

    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'blm_init_method');

//Add social icons
function my_customizer_social_media_array() {
    $social_sites = array('twitter', 'facebook', 'pinterest', 'flickr', 'google-plus', 'youtube', 'tumblr', 'dribbble', 'rss', 'linkedin', 'instagram', 'email');
    return $social_sites;
}
add_action('customize_register', 'my_add_social_sites_customizer');

function my_add_social_sites_customizer($wp_customize) {

    $wp_customize->add_section( 'my_social_settings', array(
        'title' => __('Social Media Icons', 'text-domain'),
        'priority' => 35,
    ) );

    $social_sites = my_customizer_social_media_array();
    $priority = 5;

    foreach($social_sites as $social_site) {

        $wp_customize->add_setting( "$social_site", array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw'
        ) );

        $wp_customize->add_control( $social_site, array(
            'label' => __( "$social_site url:", 'text-domain' ),
            'section' => 'my_social_settings',
            'type' => 'text',
            'priority' => $priority,
        ) );

        $priority = $priority + 5;
    }
}
function my_social_media_icons() {
    $social_sites = my_customizer_social_media_array();
    foreach($social_sites as $social_site) {
        if( strlen( get_theme_mod( $social_site ) ) > 0 ) {
            $active_sites[] = $social_site;
        }
    }
    if ( ! empty( $active_sites ) ) {
        echo "<ul class='social-icons'>";
        foreach ( $active_sites as $active_site ) {
            $class = 'fa fa-' . $active_site;
            if ( $active_site == 'email' ) {
                ?>
                <li>
                    <a class="email" target="_blank" href="mailto:<?php echo antispambot( is_email( get_theme_mod( $active_site ) ) ); ?>">
                        <span class="fa fa-envelope" title="<?php _e('email icon', 'text-domain'); ?>"></span>
                    </a>
                </li>
            <?php } else { ?>
                <li>
                    <a class="<?php echo $active_site; ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( $active_site) ); ?>">
                        <span class="<?php echo esc_attr( $class ); ?>" title="<?php printf( __('%s icon', 'text-domain'), $active_site ); ?>"></span>
                    </a>
                </li>
                <?php
            }
        }
        echo "</ul>";
    }
}
/**
 * Adds a section, the parameters and controls (control) on the theme settings page
 */
add_action('customize_register', function($customizer){
    $customizer->add_section(
        'edits-copyright',
        array(
            'title' => 'Copyright',
            'description' => 'Edit',
            'priority' => 35,
        )
    );
    $customizer->add_setting(
        'copyright_name',
        array('default' => 'DesignerFirst.com')
    );
    $customizer->add_control(
        'copyright_name',
        array(
            'label' => 'Site name',
            'section' => 'edits-copyright',
            'type' => 'text',
        )
    );
    $customizer->add_setting(
        'copyright_year',
        array('default' => '2016')
    );
    $customizer->add_control(
        'copyright_year',
        array(
            'label' => 'Year',
            'section' => 'edits-copyright',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'hide_copyright',
        array(
            'type' => 'checkbox',
            'label' => 'Hide text copyright',
            'section' => 'edit-copyright',
        )
    );
});
/*__________________________________________________*/
/*create custom post type*/
add_action( 'init', 'create_post_type' );

function create_post_type() {
    register_post_type( 'team',
        array(
            'labels' => array(
                'name' => __( 'Team items' ),
                'singular_name' => __( 'Team' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'participants'),
            'supports'	=>	array('title', 'editor', 'thumbnail'),
        )
    );
    add_theme_support( 'post-thumbnails', array('post', 'page','team'));
}
/*__________________________________________________*/
/*create custom taxonomy*/
add_action( 'init', 'create_professional_tax' );

function create_professional_tax() {
    register_taxonomy(
        'professionals',
        'team',
        array(
            'label' => __( 'Team professionals' ),
            'rewrite' => array( 'slug' => 'professionals' ),
            'hierarchical' => true,
        )
    );
}
