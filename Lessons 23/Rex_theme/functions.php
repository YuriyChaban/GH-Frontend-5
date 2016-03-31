<?php
/**
 * Rex functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rex
 */

if ( ! function_exists( 'rex_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rex_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Rex, use a find and replace
	 * to change 'rex' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'rex', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'top' => __( 'Primary Menu', 'rex' ),
		'404 menu' => __( '404', 'rex' ),
		'single page' => __( 'single page', 'rex' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );


	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'rex_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'rex_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rex_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rex_content_width', 640 );
}
add_action( 'after_setup_theme', 'rex_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rex_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'rex' ),
		'id'            => 'site-sidebar',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'rex_widgets_init' );

/**
 * Google fonts.
 */
function google_font_styles() {
	if (!is_admin()) {
		wp_register_style('opensans', 'https://fonts.googleapis.com/css?family=Open+Sans');
		wp_enqueue_style('font', get_stylesheet_uri(), array('opensans') );

		wp_register_style('releway', 'https://fonts.googleapis.com/css?family=Raleway');
		wp_enqueue_style('font', get_stylesheet_uri(), array('releway') );

		wp_register_style('pacifico', 'https://fonts.googleapis.com/css?family=Pacifico');
		wp_enqueue_style('font', get_stylesheet_uri(), array('pacifico') );
	}
}
add_action('wp_enqueue_scripts', 'google_font_styles');

/**
 * Enqueue scripts and styles.
 */

function rex_scripts() {

    /*-----------------------*/
	/*styles*/
    /*-----------------------*/

	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

	wp_enqueue_style( 'rex_style3', get_template_directory_uri() . '/assets/css/font-awesome.css');

	wp_enqueue_style( 'rex_style2', get_template_directory_uri() . '/assets/css/bootstrap.css');

	wp_enqueue_style( 'rex_style1', get_template_directory_uri() . '/assets/css/animate.css');

	wp_enqueue_style( 'rex_style5', get_template_directory_uri() . '/assets/css/slick.css');

	wp_enqueue_style( 'rex_style4', get_template_directory_uri() . '/assets/css/jquery.fancybox.css');


	/*theme-color*/

	wp_enqueue_style( 'rex_style8', get_template_directory_uri() . '/assets/css/theme-color/default.css');

	wp_enqueue_style('rex_style', get_template_directory_uri() . '/style.css');

    /*-----------------------*/
    /*scripts*/
    /*-----------------------*/

    wp_enqueue_script( 'rex-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'rex-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    wp_enqueue_script( 'rex-scripts1', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');

//	wp_enqueue_script( 'rex-scripts7', get_template_directory_uri() . '/assets/js/bootstrap.js');

	wp_enqueue_script( 'rex-scripts8', get_template_directory_uri() . '/assets/js/slick.js');

	wp_enqueue_script( 'rex-scripts9', get_template_directory_uri() . '/assets/js/waypoints.js');

	wp_enqueue_script( 'rex-scripts3', get_template_directory_uri() . '/assets/js/jquery.counteru
	p.js');
	wp_enqueue_script( 'rex-scripts6', get_template_directory_uri() . '/assets/js/jquery.mixitup.js');

	wp_enqueue_script( 'rex-scripts5', get_template_directory_uri() . '/assets/js/jquery.fancybox.pack.js');

	wp_enqueue_script( 'rex-scripts11', get_template_directory_uri() . '/assets/js/wow.js');

	wp_enqueue_script( 'rex-scripts2', get_template_directory_uri() . '/assets/js/custom.js');


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rex_scripts' );

/*____________________________________________________________________________________*/
//Add social icons
function my_customizer_social_media_array()
{
	$social_sites = array('facebook', 'twitter' , 'google-plus', 'youtube', 'linkedin', 'pinterest', 'dribbble', 'flickr', 'tumblr', 'rss', 'instagram', 'email');
	return $social_sites;
}

add_action('customize_register', 'my_add_social_sites_customizer');

function my_add_social_sites_customizer($wp_customize)
{

	$wp_customize->add_section('my_social_settings', array(
		'title' => __('Social Media Icons', 'text-domain'),
		'priority' => 35,
	));

	$social_sites = my_customizer_social_media_array();
	$priority = 5;

	foreach ($social_sites as $social_site) {

		$wp_customize->add_setting("$social_site", array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw'
		));

		$wp_customize->add_control($social_site, array(
			'label' => __("$social_site url:", 'text-domain'),
			'section' => 'my_social_settings',
			'type' => 'text',
			'priority' => $priority,
		));

		$priority = $priority + 5;
	}
}

function my_social_media_icons()
{
	$social_sites = my_customizer_social_media_array();
	foreach ($social_sites as $social_site) {
		if (strlen(get_theme_mod($social_site)) > 0) {
			$active_sites[] = $social_site;
		}
	}
	if (!empty($active_sites)) {
		echo "<ul class='social-icons'>";
		foreach ($active_sites as $active_site) {
			$class = 'fa fa-' . $active_site;
			if ($active_site == 'email') {
				?>
				<li>
					<a class="email" target="_blank"
					   href="mailto:<?php echo antispambot(is_email(get_theme_mod($active_site))); ?>">
						<span class="fa fa-envelope" title="<?php _e('email icon', 'text-domain'); ?>"></span>
					</a>
				</li>
			<?php } else { ?>
				<li>
					<a class="<?php echo $active_site; ?>" target="_blank"
					   href="<?php echo esc_url(get_theme_mod($active_site)); ?>">
                        <span class="<?php echo esc_attr($class); ?>"
							  title="<?php printf(__('%s icon', 'text-domain'), $active_site); ?>"></span>
					</a>
				</li>
				<?php
			}
		}
		echo "</ul>";
	}
}

/*____________________________________________________________________________________*/
/**
 * Adds a section, the parameters and controls (control) on the theme settings page
 */
add_action('customize_register', function ($customizer) {
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
		array('default' => 'MarkUps.io')
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
/*create slider post type*/
add_action('init', 'create_slider_post_type');

function create_slider_post_type()
{
	register_post_type('slider',
		array(
			'labels' => array(
				'name' => __('Slider'),
				'singular_name' => __('Slider')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'slider'),
			'supports' => array('title', 'editor', 'thumbnail'),
		)
	);
}

/*__________________________________________________*/
/*create slider taxonomy*/
add_action('init', 'create_my_slider_tax');

function create_my_slider_tax()
{
	register_taxonomy(
		'slider_tax',
		'slider',
		array(
			'label' => __('Categories'),
			'rewrite' => array('slug' => 'slider_tax'),
			'hierarchical' => true,
		)
	);
}
/*__________________________________________________*/
/*create company logo slider post type*/
add_action('init', 'create_company_logo_slider_post_type');

function create_company_logo_slider_post_type()
{
	register_post_type('company_logo_slider',
		array(
			'labels' => array(
				'name' => __('Company logo slider'),
				'singular_name' => __('Company logo slider')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'company_logo_slider'),
			'supports' => array('title', 'editor', 'thumbnail'),
		)
	);
}


/*__________________________________________________*/
/*create company_logo taxonomy*/
add_action('init', 'create_company_logo_slider_tax');

function create_company_logo_slider_tax()
{
	register_taxonomy(
		'company_logo_slider_tax',
		'company_logo_slider',
		array(
			'label' => __('Categories'),
			'rewrite' => array('slug' => 'company_logo_tax_slider'),
			'hierarchical' => true,
		)
	);
}
/*__________________________________________________*/
/*create about post type*/
add_action('init', 'create_about_post_type');

function create_about_post_type()
{
    register_post_type('about',
        array(
            'labels' => array(
                'name' => __('About'),
                'singular_name' => __('About')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'about'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}

/*__________________________________________________*/
/*create about taxonomy*/
add_action('init', 'create_about_tax');

function create_about_tax()
{
    register_taxonomy(
        'about_tax',
        'about',
        array(
            'label' => __('Categories'),
            'rewrite' => array('slug' => 'about_tax'),
            'hierarchical' => true,
        )
    );
}
/*__________________________________________________*/
/*create nex_description post type*/
add_action('init', 'create_nex_description_post_type');

function create_nex_description_post_type()
{
    register_post_type('nex_description',
        array(
            'labels' => array(
                'name' => __('Nex description'),
                'singular_name' => __('Nex description')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'nex_description'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}

/*__________________________________________________*/
/*create nex_description taxonomy*/
add_action('init', 'create_nex_description_tax');

function create_nex_description_tax()
{
    register_taxonomy(
        'nex_description_tax',
        'nex_description',
        array(
            'label' => __('Categories'),
            'rewrite' => array('slug' => 'nex_description_tax'),
            'hierarchical' => true,
        )
    );
}
/*__________________________________________________*/
/*create impressive_template post type*/
add_action('init', 'create_impressive_template_post_type');

function create_impressive_template_post_type()
{
    register_post_type('impressive_template',
        array(
            'labels' => array(
                'name' => __('Impressive template'),
                'singular_name' => __('Impressive template')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'impressive_template'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}

/*__________________________________________________*/
/*create impressive_template taxonomy*/
add_action('init', 'create_impressive_template_tax');

function create_impressive_template_tax()
{
    register_taxonomy(
        'impressive_template_tax',
        'impressive_template',
        array(
            'label' => __('Categories'),
            'rewrite' => array('slug' => 'impressive_template_tax'),
            'hierarchical' => true,
        )
    );
}
/*__________________________________________________*/
/*create team post type*/
add_action('init', 'create_team_post_type');

function create_team_post_type()
{
    register_post_type('team',
        array(
            'labels' => array(
                'name' => __('Team'),
                'singular_name' => __('Team')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'team'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}

/*__________________________________________________*/
/*create team taxonomy*/
add_action('init', 'create_team_tax');

function create_team_tax()
{
    register_taxonomy(
        'team_tax',
        'team',
        array(
            'label' => __('Categories'),
            'rewrite' => array('slug' => 'team_tax'),
            'hierarchical' => true,
        )
    );
}
/*__________________________________________________*/
/*create services post type*/
add_action('init', 'create_services_post_type');

function create_services_post_type()
{
    register_post_type('services',
        array(
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Services')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}

/*__________________________________________________*/
/*create services taxonomy*/
add_action('init', 'create_services_tax');

function create_services_tax()
{
    register_taxonomy(
        'services_tax',
        'services',
        array(
            'label' => __('Categories'),
            'rewrite' => array('slug' => 'services_tax'),
            'hierarchical' => true,
        )
    );
}
/*__________________________________________________*/
/*create portfolio post type*/
add_action('init', 'create_portfolio_post_type');

function create_portfolio_post_type()
{
    register_post_type('portfolio',
        array(
            'labels' => array(
                'name' => __('Portfolio'),
                'singular_name' => __('Portfolio')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'portfolio'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}


/*__________________________________________________*/
/*create portfolio taxonomy*/
add_action('init', 'create_portfolio_tax');

function create_portfolio_tax()
{
    register_taxonomy(
        'portfolio_tax',
        'portfolio',
        array(
            'label' => __('Categories'),
            'rewrite' => array('slug' => 'portfolio_tax'),
            'hierarchical' => true,
        )
    );
}
/*__________________________________________________*/
/*create counter post type*/
add_action('init', 'create_counter_post_type');

function create_counter_post_type()
{
    register_post_type('counter',
        array(
            'labels' => array(
                'name' => __('Counter'),
                'singular_name' => __('Counter')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'counter'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}


/*__________________________________________________*/
/*create counter taxonomy*/
add_action('init', 'create_counter_tax');

function create_counter_tax()
{
    register_taxonomy(
        'counter_tax',
        'counter',
        array(
            'label' => __('Categories'),
            'rewrite' => array('slug' => 'counter_tax'),
            'hierarchical' => true,
        )
    );
}
/*__________________________________________________*/
/*create pricing post type*/
add_action('init', 'create_pricing_post_type');

function create_pricing_post_type()
{
    register_post_type('pricing',
        array(
            'labels' => array(
                'name' => __('Pricing'),
                'singular_name' => __('Pricing')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'pricing'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}


/*__________________________________________________*/
/*create pricing taxonomy*/
add_action('init', 'create_pricing_tax');

function create_pricing_tax()
{
    register_taxonomy(
        'pricing_tax',
        'pricing',
        array(
            'label' => __('Categories'),
            'rewrite' => array('slug' => 'pricing_tax'),
            'hierarchical' => true,
        )
    );
}
/*__________________________________________________*/
/*create contact taxonomy*/
add_action('init', 'create_contact_tax');

function create_contact_tax()
{
	register_taxonomy(
		'contact_tax',
		'contact',
		array(
			'label' => __('Categories'),
			'rewrite' => array('slug' => 'contact_tax'),
			'hierarchical' => true,
		)
	);
}
/*__________________________________________________*/
/*create contact post type*/
add_action('init', 'create_contact_post_type');

function create_contact_post_type()
{
	register_post_type('contact',
		array(
			'labels' => array(
				'name' => __('Contact'),
				'singular_name' => __('Contact')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'contact'),
			'supports' => array('title', 'editor', 'thumbnail'),
		)
	);
}
/*__________________________________________________________*/
/*create testimonial images in theme customize*/
/*_____________________________________*/

function gootheme_header_bg_theme_customizer($wp_customize)
{

	$wp_customize->add_section('gootheme_header_bg_section', array(
		'title' => __('Header background images', 'gootheme_header_bg'),
		'priority' => 30,
		'description' => 'Upload a images for this theme',
	));

	$wp_customize->add_setting('gootheme_header_bg', array(
		'default' => get_bloginfo('template_directory') . '/assets/images/header-bg.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gootheme_header_bg', array(

		'label' => __('Current header background images', 'gootheme_header_bg'),
		'section' => 'gootheme_header_bg_section',
		'settings' => 'gootheme_header_bg',
	)));

}

add_action('customize_register', 'gootheme_header_bg_theme_customizer');
/*__________________________________________________________*/
/*create logo in theme customize*/
/*_____________________________________*/
function gootheme_theme_customizer($wp_customize)
{

	$wp_customize->add_section('gootheme_logo_section', array(
		'title' => __('Site logo', 'gootheme'),
		'priority' => 30,
		'description' => 'Upload a logo for this theme',
	));

	$wp_customize->add_setting('gootheme_logo', array(
		'default' => get_bloginfo('template_directory') . '/assets/images/logo.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gootheme_logo', array(

		'label' => __('Current logo', 'gootheme'),
		'section' => 'gootheme_logo_section',
		'settings' => 'gootheme_logo',
	)));

}

add_action('customize_register', 'gootheme_theme_customizer');

/*__________________________________________________________*/
/*create single header images in theme customize*/
/*_____________________________________*/

function gootheme_single_header_bg_theme_customizer($wp_customize)
{

	$wp_customize->add_section('gootheme_single_header_bg_section', array(
		'title' => __('Single header images', 'gootheme_single_header_bg'),
		'priority' => 30,
		'description' => 'Upload a images for this theme',
	));

	$wp_customize->add_setting('gootheme_single_header_bg', array(
		'default' => get_bloginfo('template_directory') . '/assets/images/blog-banner.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gootheme_single_header_bg', array(

		'label' => __('Current header background', 'gootheme_single_header_bg'),
		'section' => 'gootheme_single_header_bg_section',
		'settings' => 'gootheme_single_header_bg',
	)));

}

add_action('customize_register', 'gootheme_single_header_bg_theme_customizer');
/*__________________________________________________________*/
/*create archive header images in theme customize*/
/*_____________________________________*/

function gootheme_archive_header_bg_theme_customizer($wp_customize)
{

	$wp_customize->add_section('gootheme_archive_header_bg_section', array(
		'title' => __('Archive header images', 'gootheme_archive_header_bg'),
		'priority' => 30,
		'description' => 'Upload a images for this theme',
	));

	$wp_customize->add_setting('gootheme_archive_header_bg', array(
		'default' => get_bloginfo('template_directory') . '/assets/images/blog-banner.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gootheme_archive_header_bg', array(

		'label' => __('Current header background', 'gootheme_archive_header_bg'),
		'section' => 'gootheme_archive_header_bg_section',
		'settings' => 'gootheme_archive_header_bg',
	)));

}

add_action('customize_register', 'gootheme_archive_header_bg_theme_customizer');
/*__________________________________________________________*/
/*create testimonial images in theme customize*/
/*_____________________________________*/

function gootheme_testimonial_img_theme_customizer($wp_customize)
{

	$wp_customize->add_section('gootheme_testimonial_img_section', array(
		'title' => __('Testimonial images', 'gootheme_testimonial_img'),
		'priority' => 30,
		'description' => 'Upload a images for this theme',
	));

	$wp_customize->add_setting('gootheme_testimonial_img', array(
		'default' => get_bloginfo('template_directory') . '/assets/images/testimonial-bg.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gootheme_testimonial_img', array(

		'label' => __('Current testimonial images', 'gootheme_testimonial_img'),
		'section' => 'gootheme_testimonial_img_section',
		'settings' => 'gootheme_testimonial_img',
	)));

}

add_action('customize_register', 'gootheme_testimonial_img_theme_customizer');
/*__________________________________________________________*/
/*create counter-overlay background images in theme customize*/
/*_____________________________________*/

function gootheme_counter_overlay_background_img_theme_customizer($wp_customize)
{

	$wp_customize->add_section('gootheme_counter_overlay_background_img_section', array(
		'title' => __('Counter overlay background images', 'gootheme_counter_overlay_background_img'),
		'priority' => 30,
		'description' => 'Upload a images for this theme',
	));

	$wp_customize->add_setting('gootheme_counter_overlay_background_img', array(
		'default' => get_bloginfo('template_directory') . '/assets/images/counter-bg.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gootheme_counter_overlay_background_img', array(

		'label' => __('Current counter overlay background images', 'gootheme_counter_overlay_background_img'),
		'section' => 'gootheme_counter_overlay_background_img_section',
		'settings' => 'gootheme_counter_overlay_background_img',
	)));

}

add_action('customize_register', 'gootheme_counter_overlay_background_img_theme_customizer');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function qt_custom_breadcrumbs() {

	$showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
	$delimiter = ' / '; // delimiter between crumbs
	$home = 'Home'; // text for the 'Home' link
//	$showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
	$before = '<span class="current">'; // tag before the current crumb
	$after = '</span>'; // tag after the current crumb

	global $post;
	$homeLink = get_bloginfo('url');

	if (is_home() || is_front_page()) {

		if ($showOnHome == 1) echo '<li id="crumbs" class="active"><a href="' . $homeLink . '">' . $home . '</a></li>';

	} else {

		echo '<li id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

		if ( is_category() ) {
			$thisCat = get_category(get_query_var('cat'), false);
			if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
			echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;

		} elseif ( is_search() ) {
			echo $before . 'Search results for "' . get_search_query() . '"' . $after;

		} elseif ( is_day() ) {
			echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
			echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
			echo $before . get_the_time('d') . $after;

		} elseif ( is_month() ) {
			echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
			echo $before . get_the_time('F') . $after;

		} elseif ( is_year() ) {
			echo $before . get_the_time('Y') . $after;

		} elseif ( is_single() && !is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
//				if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
			} else {
				$cat = get_the_category(); $cat = $cat[0];
				$cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
//				if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
				echo $cats;
//				if ($showCurrent == 1) echo $before . get_the_title() . $after;
			}

		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			$post_type = get_post_type_object(get_post_type());
			echo $before . $post_type->labels->singular_name . $after;

		} elseif ( is_attachment() ) {
			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
			echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
//			if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

		} elseif ( is_page() && !$post->post_parent ) {
//			if ($showCurrent == 1) echo $before . get_the_title() . $after;

		} elseif ( is_page() && $post->post_parent ) {
			$parent_id  = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			for ($i = 0; $i < count($breadcrumbs); $i++) {
				echo $breadcrumbs[$i];
				if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
			}
//			if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

		} elseif ( is_tag() ) {
			echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;

		} elseif ( is_author() ) {
			global $author;
			$userdata = get_userdata($author);
			echo $before . 'Articles posted by ' . $userdata->display_name . $after;

		} elseif ( is_404() ) {
			echo $before . 'Error 404' . $after;
		}

		if ( get_query_var('paged') ) {
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
			echo __('Page') . ' ' . get_query_var('paged');
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
		}

		echo '</div>';

	}
} // end qt_custom_breadcrumbs()

class description_walker extends Walker_Nav_Menu
{
	function start_el(&$output, $item, $depth, $args)
	{
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="'. esc_attr( $class_names ) . '"';

		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

		if($depth != 0)
		{
			$description = $append = $prepend = "";
		}

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
		$item_output .= $description.$args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/*--------------*/
/*Pagination*/
/*-----------*/
// numbered pagination
function pagination($pages = '', $range = 4)
{

	global $paged;
	if(empty($paged)) $paged = 1;

	if($pages == '')
	{
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages)
		{
			$pages = 1;
		}
	}

	if(1 != $pages)
	{
		echo "<ul class=\"pagination blog-pagination\">";
		if($paged > 1) echo "<li>"."<a href='".get_pagenum_link($paged - 1)."'>&laquo;</a>"."</li>";

		for ($i=1; $i <= $pages; $i++)
		{
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1)))
			{
				echo ($paged == $i)? "<li class=\"current\">"."<a href='".get_pagenum_link($i)."'>$i</a>"."</li>":"<li>"."<a href='".get_pagenum_link($i)."'>".$i."</a>"."</li>";
			}
		}

		if ($paged < $pages) echo "<li>"."<a href=\"".get_pagenum_link($paged + 1)."\">&raquo;</a>"."</li>";
		echo "</ul>\n";
	}
}

/*---------------------------------*/
/*------Feedback form------*/
/*---------------------------------*/
function custom_form_action_callback() {
	global $wpdb;
	global $mail;
	$nonce=$_POST['nonce'];
	$rtr='';
	if (!wp_verify_nonce( $nonce, 'custom_form_action-nonce'))wp_die('{"error":"Error. Spam"}');
	$message="";
	$to="shuterrush@gmail.com";
	$headers = "Content-type: text/html; charset=utf-8 \r\n";
	$headers.= "From: ".$_SERVER['SERVER_NAME']." \r\n";
	$subject="Message from site ".$_SERVER['SERVER_NAME'];
	do_action('plugins_loaded');
	if (!empty($_POST['name']) && !empty($_POST['mess']) && !empty($_POST['email'])){
		$message.="Name: ".$_POST['name'];
		$message.="<br/>E-mail: ".$_POST['email'];
		$message.="<br/>Message:<br/>".nl2br($_POST['mess']);
		if(mail($to, $subject, $message, $headers)){
			$rtr='{"work":"Message send!","error":""}';
		}else{
			$rtr='{"error":"Server error."}';
		}
	}else{
		$rtr='{"error":"All fields are required!"}';
	}
	echo $rtr;
	exit;
}
add_action('wp_ajax_nopriv_custom_form_send_action', 'custom_form_action_callback');
add_action('wp_ajax_custom_form_send_action', 'custom_form_action_callback');
function custom_form_stylesheet(){
	wp_enqueue_style("custom_form_style_templ",get_bloginfo('stylesheet_directory')."/style.css","0.1.2",true);
	wp_enqueue_script("custom_form_script_temp",get_bloginfo('stylesheet_directory')."/assets/js//scriptform.js");
	wp_localize_script("custom_form_script_temp", "custom_form_Ajax", array( 'ajaxurl' => admin_url( 'admin-ajax.php' ), 'nonce' => wp_create_nonce('custom_form_action-nonce') ) );
}
add_action( 'wp_enqueue_scripts', 'custom_form_stylesheet' );
function formCustom() {
	$rty='<div class="col-md-8 col-sm-6 col-xs-12">';
	$rty.='<div class="contact-right wow fadeInRight">';
	$rty.='<form class="contact-form">';
	$rty.='<h2>Send a message</h2>';
	$rty.='<div class="form-group"><input id="name" class="form-control" type="text" placeholder="Name"/></div>';
	$rty.='<div class="form-group"><input id="email" type="text" class="form-control" placeholder="Enter Email"/></div>';
	$rty.='<div class="form-group"><textarea id="mess" class="form-control"></textarea></div>';
	$rty.='<button type="submit"  data-text="SUBMIT" class="button button-default" onclick="custom_form_ajax_send(\'#name\',\'#email\',\'#mess\'); return false;"><span>SUBMIT</span></button>';
//	$rty.='<div class="line"><input type="submit" data-text="SUBMIT" class="button button-default" onclick="custom_form_ajax_send(\'#name\',\'#email\',\'#mess\'); return false;" value="Отправить"/><span></span></div>';
	$rty.='</form>';
	$rty.='<div id="response"></div>';
	$rty.='</div>';
	$rty.='</div>';
	return $rty;
}
add_shortcode( 'formCustom', 'formCustom' );
?>