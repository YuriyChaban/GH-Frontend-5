<?php get_header(); ?>

    <!-- Start menu section -->
    <section id="menu-area">
        <nav class="navbar navbar-default main-navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only"><?php _e('Toggle navigation', 'rex'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <a class="navbar-brand logo" href="<?php bloginfo('url'); ?>">
                        <?php if (get_theme_mod('gootheme_logo')) :
                            echo '<img src="' . esc_url(get_theme_mod('gootheme_logo')) . '">';
                        else:
                            echo get_bloginfo('name') . '<span>' . get_bloginfo('description') . '</span>';
                        endif; ?>
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <?php wp_nav_menu(array(
                            'container' => false,
                            'menu_id' => 'top-menu',
                            'menu_class' => 'nav navbar-nav main-nav menu-scroll',
                            'echo' => true,
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'link_after' => '',
                            'depth' => 0,
                            "theme_location" => "single page",
                            'walker' => new description_walker())
                    );
                    ?>
                </div><!--/.nav-collapse -->
                <div class="search-area">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </nav>
    </section>
    <!-- End menu section -->
    <!-- Start blog banner section -->
    <section id="blog-banner">
        <img src="http://rex.site.ua/wp-content/uploads/2016/03/blog-banner.jpg" alt="img">
        <div class="blog-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-banner-area">
                            <h2><?php _e('Blog Single', 'rex'); ?></h2>
                            <ol class="breadcrumb">
                                <?php if (function_exists('qt_custom_breadcrumbs')) qt_custom_breadcrumbs(); ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog banner section -->
    <!-- Start blog section -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-area">
                        <div class="row">
                            <div class="col-lg-8 col-md-7 col-sm-12">
                                <div class="blog-left blog-details">
                                    <!-- Start single blog post -->
                                    <?php
                                    while (have_posts()) : the_post(); ?>

                                        <article class="single-from-blog">
                                            <div class="blog-title">
                                                <h2>
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h2>
                                                <p><?php _e('Posted by ', 'rex'); ?><a class="blog-admin"
                                                                                       href="<?php the_permalink(); ?>"><?php the_author('name'); ?></a>
                                                    <?php _e('on ', 'rex'); ?><span
                                                        class="blog-date"><?php the_time('jS, F, Y') ?></span>
                                                </p>
                                            </div>
                                            <figure>
                                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                            </figure>
                                            <div class="blog-details-content">
                                                <p><?php the_content(); ?></p>
                                                <blockquote>
                                                    <?php _e('Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud', 'rex'); ?>
                                                </blockquote>
                                                <p><?php _e('Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae ', 'rex'); ?></p>
                                                <span><?php _e('Tag :', 'rex'); ?> </span><?php $tags = get_tags();
                                                foreach ($tags as $tag) {
                                                    $tag_link = get_tag_link($tag->term_id);

                                                    $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                                                    $html .= "{$tag->name}</a>";
                                                    $html .= "<span>, </span>";
                                                }
                                                echo $html; ?>
                                                <h1><?php _e('This is h1 title', 'rex'); ?></h1>
                                                <h2><?php _e('This is h2 title', 'rex'); ?></h2>
                                                <h3><?php _e('This is h3 title', 'rex'); ?></h3>
                                                <h4><?php _e('This is h4 title', 'rex'); ?></h4>
                                                <h5><?php _e('This is h5 title', 'rex'); ?></h5>
                                                <h6><?php _e('This is h6 title', 'rex'); ?></h6>

                                            </div>
                                        </article>
                                        <div class="blog-comment">
                                            <?php comments_template(); ?>
                                        </div>

                                    <?php endwhile; // End of the loop.
                                    ?>
                                    <!-- End single blog post -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-12">
                                <?php if (is_active_sidebar('site-sidebar')) :
                                    dynamic_sidebar('site-sidebar');
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog section -->


<?php
get_sidebar();
get_footer();
