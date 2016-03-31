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
        <?php if (get_theme_mod('gootheme_archive_header_bg')) :
            echo '<img src="' . esc_url(get_theme_mod('gootheme_archive_header_bg')) . '">';
        else:
            echo get_bloginfo('name') . '<span>' . get_bloginfo('description') . '</span>';
        endif; ?>
        <div class="blog-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-banner-area">
                            <h2><?php _e('Blog Archive', 'rex'); ?></h2>
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
                                <div class="blog-left blog-archive">
                                    <!-- Start single blog post -->
                                    <?php while(have_posts()) : the_post(); ?>

                                        <article class="single-from-blog">
                                            <figure>
                                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                            </figure>
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
                                            <div class="blog-details-content">
                                                <?php the_content(); ?>
                                            </div>
                                            <div class="blog-footer">
                                                <a href="<?php the_permalink(); ?>"><span
                                                        class="fa fa-comment"></span><?php
                                                    global $post;
                                                    echo $post->comment_count;
                                                    _e(' Comments', 'rex');
                                                    ?></a>
                                                <a href="<?php the_permalink(); ?>"><span
                                                        class="fa fa-thumbs-o-up"></span><?php _e('35 Likes', 'rex'); ?>
                                                </a>
                                            </div>
                                        </article>
                                    <!-- End single blog post -->
                                    <?php endwhile; // End of the loop.
                                    ?>
                                    <!--Start Blog pagination -->
                                    <nav>
                                            <?php if (function_exists("pagination")) {
                                                pagination($custom_query->max_num_pages);
                                            } ?>
                                    </nav>
                                    <!-- End blog pagination -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-12">
                                <aside class="blog-right">
                                    <!-- Start Sidebar Single widget -->
                                    <?php if (is_active_sidebar('site-sidebar')) :
                                        dynamic_sidebar('site-sidebar');
                                    endif; ?>
                                    <!-- End Sidebar Single widget -->
                                </aside>
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
