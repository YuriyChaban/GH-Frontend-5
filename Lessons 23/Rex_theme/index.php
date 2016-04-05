<?php get_header(); ?>

<!-- для лендинга нужен отдельно пейдж темплейт, а не в индексе все делать -->
    <!-- Start header section -->
    <header id="header">
        <div class="header-inner">
            <!-- Header image -->
            <?php if (get_theme_mod('gootheme_header_bg')) :
                echo '<img src="' . esc_url(get_theme_mod('gootheme_header_bg')) . '">';
            else:
                echo get_bloginfo('name') . '<span>' . get_bloginfo('description') . '</span>';
            endif; ?>

            <div class="header-overlay">
                <div class="header-content">
                    <!-- Start header content slider -->
                    <h2 class="header-slide">WE GENERATE
                        <span>MOST CREATIVE</span>
                        <span>MOST Design</span>
                        <span>MOST Valuable</span>
                        IDEA</h2>
                    <!-- это должна быть динамика -->
                    <!-- End header content slider -->
                    <!-- Header btn area -->
                    <div class="header-btn-area">
                        <a class="knowmore-btn" href="#">KNOW MORE</a>
                        <a class="download-btn" href="#">DOWNLOAD Theme</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header section -->
    <!-- Start menu section -->
    <section id="menu-area">
        <nav class="navbar navbar-default main-navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
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
                            "theme_location" => "top",
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

    <!-- Start about section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Start welcome area -->
                    <div class="welcome-area">
                        <div class="title-area">
                            <h2 class="tittle"><?php _e('Welcome to ', 'rex'); ?><span><?php _e('Nex', 'rex'); ?></span>
                            </h2>
                            <span class="tittle-line"></span>
                            <p><?php _e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                labore et dolore magna aliqua. Ut enim ad minim veniamo laboris nis', 'rex'); ?></p> <!-- это все через кастомайзер нужно делать -->
                        </div>
                        <div class="welcome-content">
                            <ul class="wc-table">
                                <?php
                                $args = array('post_type' => 'about', 'post_per_page' => 20); // с чего ты решил, что тут должно быть именно 20 постов?
                                $the_query = new WP_Query($args);

                                if ($the_query->have_posts()) :
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


                                        <li>
                                            <?php the_post_thumbnail(); ?>
                                            <?php the_title(); ?>
                                            <?php the_content(); ?>
                                        </li>


                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>

                                    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
                                    <!-- не понимаю зачем тебе тут это? -->

                                <?php else: ?>
                                <p><?php _e('Sorry, post not found', 'BlogName'); // нужно писать правильный textdomain ?>
                                    <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- End welcome area -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="about-area">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="about-left wow fadeInLeft">
                                    <div class="post-img">
                                        <?php
                                        $args = array('post_type' => 'nex_description', 'post_per_page' => 20);
                                        $the_query = new WP_Query($args);

                                        if ($the_query->have_posts()) :
                                            while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                                <?php the_post_thumbnail(); ?>
                                            <?php endwhile; ?>
                                            <!-- и это через кастомайзер, а не через пост тайп -->
                                            <?php wp_reset_postdata(); ?>

                                            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

                                        <?php else: ?>
                                        <p><?php _e('Sorry, post not found', 'BlogName'); ?>
                                            <?php endif; ?>
                                    </div>
                                    <a class="introduction-btn" href="#">Introduction</a>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <div class="about-right wow fadeInRight">
                                    <div class="title-area">
                                        <?php
                                        $args = array('post_type' => 'nex_description', 'post_per_page' => 20);
                                        $the_query = new WP_Query($args);

                                        if ($the_query->have_posts()) :
                                            while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                                <?php the_title(); ?>
                                                <?php the_content(); ?>
                                            <?php endwhile; ?>
                                            <?php wp_reset_postdata(); ?>

                                            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

                                        <?php else: ?>
                                        <p><?php _e('Sorry, post not found', 'BlogName'); ?>
                                            <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End about section -->
    <!-- Start call to action -->
    <section id="call-to-action">
        <h2>
            <?php
            $args = array('post_type' => 'impressive_template', 'post_per_page' => 20);
            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="post-img"><?php the_post_thumbnail() ?></div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

            <?php else: ?>
            <p><?php _e('Sorry, post not found', 'BlogName'); ?>
                <?php endif; ?>
        </h2>
        <div class="call-to-overlay">
            <div class="container">
                <div class="call-to-content wow fadeInUp">
                    <?php
                    $args = array('post_type' => 'impressive_template', 'post_per_page' => 20);
                    $the_query = new WP_Query($args);
                    // абсолютно не верно, не путай назначение пост тайпа с простым текстом
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

                    <?php else: ?>
                    <p><?php _e('Sorry, post not found', 'BlogName'); ?>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End call to action -->
    <!-- Start Team action -->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="team-area">
                        <div class="title-area">
                            <h2 class="tittle"><?php _e('Meet our team', 'rex'); ?></h2>
                            <span class="tittle-line"></span>
                            <p><?php _e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto', 'rex'); ?></p> <!-- аналогично во всех текстах  -->
                        </div>
                        <!-- Start team content -->
                        <div class="team-content">
                            <ul class="team-grid">
                                <?php
                                $args = array('post_type' => 'team', 'post_per_page' => 20);
                                $the_query = new WP_Query($args);

                                if ($the_query->have_posts()) :
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <li>
                                            <div class="team-item wow fadeInUp">
                                                <!-- всегда нужно проверять на наличие миниатюры -->
                                                <?php the_post_thumbnail(); ?>
                                                <div class="team-info">
                                                    <h2><?php the_content(); ?></h2>
                                                </div>
                                            </div>
                                            <div class="team-address">
                                                <p><?php the_title(); ?></p>
                                                <span>
                                                    <?php
                                                    $terms = get_the_terms($post->ID, 'team_tax');
                                                    foreach ($terms as $term) {
                                                        echo $term->name;
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>

                                    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

                                <?php else: ?>
                                <p><?php _e('Sorry, post not found', 'BlogName'); ?>
                                    <?php endif; ?>
                            </ul>
                        </div>
                        <!-- End team content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Team action -->
    <!-- Start service section -->
    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="service-area">
                        <div class="title-area">
                            <h2 class="tittle"><?php _e('Service we offer', 'rex'); ?></h2>
                            <span class="tittle-line"></span>
                            <p><?php _e('perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
                                totam rem aperiam, eaque ipsa quae ab illo inventore', 'rex'); ?></p>
                        </div>
                        <!-- service content -->
                        <div class="service-content">
                            <ul class="service-table">
                                <?php
                                $args = array('post_type' => 'services', 'post_per_page' => 20);
                                $the_query = new WP_Query($args);

                                if ($the_query->have_posts()) :
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <li class="col-md-3 col-sm-6">
                                            <div class="single-service wow slideInUp">

                                                <?php the_content(); ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>

                                    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

                                <?php else: ?>
                                <p><?php _e('Sorry, post not found', 'BlogName'); ?>
                                    <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End service section -->
    <!-- Start Portfolio section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-area">
                        <div class="title-area">
                            <h2 class="tittle"><?php _e('Recent portfolio', 'rex'); ?></h2>
                            <span class="tittle-line"></span>
                            <p><?php _e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto', 'rex'); ?></p>
                        </div>
                        <!-- Portfolio content -->
                        <div class="portfolio-content">
                            <!-- portfolio menu -->
                            <div class="portfolio-menu">
                                <ul><!-- это можно было вывести циклом, такой способ доставания неверный и лучше вытягивать термы, а не таксономии -->
                                    <li class="filter"
                                        data-filter="<?php $terms = get_taxonomies($post->ID, 'portfolio_tax');
                                        foreach ($taxonomy as $taxonomy) {
                                            echo $taxonomy->id;
                                        } ?>"><?php _e('All', 'rex'); ?>
                                    </li>
                                    <!-- у тебя это все не работает-->
                                    <li class="filter"
                                        data-filter="<?php $terms = get_taxonomies($post->ID, 'portfolio_tax');
                                        foreach ($taxonomy as $taxonomy) {
                                            echo $taxonomy->id;
                                        } ?>"><?php _e('Branding', 'rex'); ?>
                                    </li>
                                    <li class="filter"
                                        data-filter="<?php $terms = get_taxonomies($post->ID, 'portfolio_tax');
                                        foreach ($taxonomy as $taxonomy) {
                                            echo $taxonomy->id;
                                        } ?>"><?php _e('Design', 'rex'); ?>
                                    </li>
                                    <li class="filter"
                                        data-filter="<?php $terms = get_taxonomies($post->ID, 'portfolio_tax');
                                        foreach ($taxonomy as $taxonomy) {
                                            echo $taxonomy->id;
                                        } ?>"><?php _e('Development', 'rex'); ?>
                                    </li>
                                    <li class="filter"
                                        data-filter="<?php $terms = get_taxonomies($post->ID, 'portfolio_tax');
                                        foreach ($taxonomy as $taxonomy) {
                                            echo $taxonomy->id;
                                        } ?>"><?php _e('Photography', 'rex'); ?>
                                    </li>
                                </ul>
                            </div>
                            <!-- Portfolio container -->
                            <div id="mixit-container" class="portfolio-container">
                                <?php
                                $args = array('post_type' => 'portfolio', 'post_per_page' => 20);
                                $the_query = new WP_Query($args);

                                if ($the_query->have_posts()) :
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <div class="single-portfolio mix branding">
                                            <div class="single-item">

                                                <?php the_post_thumbnail(); ?>
                                                <div class="single-item-content">
                                                    <div class="portfolio-social-icon">
                                                        <?php the_content(); ?>
                                                    </div>
                                                    <div class="portfolio-title">
                                                        <h4><?php the_title(); ?></h4>
                                                        <span>UI Design</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>

                                    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

                                <?php else: ?>
                                <p><?php _e('Sorry, post not found', 'BlogName'); ?>
                                    <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio section -->
    <!-- Start counter section -->
    <section id="counter">
        <?php if (get_theme_mod('gootheme_counter_overlay_background_img')) :
            echo '<img src="' . esc_url(get_theme_mod('gootheme_counter_overlay_background_img')) . '">';
        else:
            echo get_bloginfo('name') . '<span>' . get_bloginfo('description') . '</span>';
        endif; ?>
            <div class="counter-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Start counter area -->
                            <div class="counter-area">
                                <?php
                                $args = array('post_type' => 'counter', 'post_per_page' => 20);
                                $the_query = new WP_Query($args);

                                if ($the_query->have_posts()) :
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <div class="col-md-3 col-sm-6 col-xs-6">
                                            <div class="single-counter">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>

                                    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

                                <?php else: ?>
        <p><?php _e('Sorry, post not found', 'BlogName'); ?></p>
    <?php endif; ?>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!-- End counter section -->
    <!-- Start Pricing Table section -->
    <section id="pricing-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pricing-table-area">
                        <div class="title-area">
                            <h2 class="tittle"><?php _e('Pricing table', 'rex'); ?></h2>
                            <span class="tittle-line"></span>
                            <p><?php _e('unde omnis iste natus error sit voluptatem accusantium doloremque laudantium aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi architecto', 'rex'); ?></p>
                        </div>
                        <!-- service content -->
                        <div class="pricing-table-content">
                            <ul class="price-table">
                                <?php
                                $args = array('post_type' => 'pricing', 'post_per_page' => 20);
                                $the_query = new WP_Query($args);

                                if ($the_query->have_posts()) :
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <li class="wow slideInUp">
                                            <?php the_content(); ?>
                                        </li>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>

                                    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

                                <?php else: ?>
                                <p><?php _e('Sorry, post not found', 'BlogName'); ?>
                                    <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing Table section -->
    <!-- Start Testimonial section -->
    <section id="testimonial">
        <?php if (get_theme_mod('gootheme_testimonial_img')) :
                    echo '<img src="' . esc_url(get_theme_mod('gootheme_testimonial_img')) . '">';
                else:
                    echo get_bloginfo('name') . '<span>' . get_bloginfo('description') . '</span>';
                endif; ?>
        <div class="counter-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Start Testimonial area -->
                        <div class="testimonial-area">
                            <div class="title-area">
                                <h2 class="tittle"><?php _e('What people say about us', 'rex'); ?></h2>
                                <span class="tittle-line"></span>
                            </div>
                            <div class="testimonial-conten">
                                <!-- Start testimonial slider -->
                                <div class="testimonial-slider"> <!-- слайдер поломан -->
                                    <?php
                                    $args = array('post_type' => 'slider', 'post_per_page' => 20);
                                    $the_query = new WP_Query($args);

                                    if ($the_query->have_posts()) :
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <!-- single slide -->
                                    <div class="single-slide">
                                        <p><?php the_content(); ?></p>
                                        <div class="single-testimonial">
                                            <?php the_post_thumbnail(); ?>
                                            <p><?php the_title(); ?></p>
                                            <span> <!-- слайдер нужно делать пост тайпом, а не таксономией -->
                                                <?php
                                            $terms = get_the_terms($post->ID, 'slider_tax');
                                                        foreach ($terms as $term) {
                                                            echo $term->name;
                                                            echo ", ";
                                                        }
                                                        ?>
                                                </span>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>

                                        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

                                    <?php else: ?>
                                    <p><?php _e('Sorry, post not found', 'BlogName'); ?>
                                        <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial section -->
    <!-- Start from blog section -->
    <section id="from-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="from-blog-area">
                        <div class="title-area">
                            <h2 class="tittle"><?php _e('Our blog', 'rex'); ?></h2>
                            <span class="tittle-line"></span>
                            <p><?php _e('Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est', 'rex'); ?></p>
                        </div>
                        <!-- From Blog content -->
                        <div class="from-blog-content">
                            <div class="row">

                                <?php $posts = query_posts($query_string . '&posts_per_page=3'); if (have_posts()) : ?> <!--никогда не используй таку query_posts -->
                                    <?php while (have_posts()): the_post(); ?>
                                        <div class="col-md-4">
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
                                                <p><?php the_content(); ?></p>
                                                <div class="blog-footer">
                                                    <a href="<?php the_permalink(); ?>"><span
                                                            class="fa fa-comment"></span><?php
                                                        global $post;
                                                        echo $post->comment_count;
                                                        _e('Comments', 'rex');
                                                        ?></a>
                                                    <a href="<?php the_permalink(); ?>"><span
                                                            class="fa fa-thumbs-o-up"></span><?php _e('35 Likes', 'rex'); ?>
                                                    </a>
                                                </div>
                                            </article>
                                        </div>

                                    <?php endwhile;

                                else :

                                    get_template_part('template-parts/content', 'none');

                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End from blog section -->
    <section id="client">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="client-area">
                        <ul class="client-table">
                            <?php
                            $args = array('post_type' => 'company_logo_slider', 'post_per_page' => 20); // пост тайпы нужно называть через "-"
                            $the_query = new WP_Query($args);

                            if ($the_query->have_posts()) :
                                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <li>
                                        <?php the_post_thumbnail(); ?>
                                    </li>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>

                                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

                            <?php else: ?>
                            <p><?php _e('Sorry, post not found', 'BlogName'); ?>
                                <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Contact section -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <?php
                $args = array('post_type' => 'contact', 'post_per_page' => 20);
                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                <?php else: ?>
                <p><?php _e('Sorry, post not found', 'BlogName'); ?>
                    <?php endif; ?>
            </div>
        </div>
        </div>
    </section>
    <!-- End Contact section -->
    <!-- Start Google Map -->
    <!-- карта тоже должна быть динамической -->
    <section id="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d6303.67022361714!2d144.955652!3d-37.817331!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-37.8173306!2d144.9556518!5e0!3m2!1sen!2sbd!4v1442411159706"
            width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <!-- End Google Map -->


<?php
get_sidebar(); // к чему тут сайдбар? 
get_footer();