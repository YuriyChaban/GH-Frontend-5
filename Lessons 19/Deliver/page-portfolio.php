<?php get_header(); ?>

    <div class="page-title">
        <div class="wrapper">
            <h2 class="title"><?php the_title(); ?></h2>
        </div>
    </div>
    <div class="wrapper">

        <article class="portfolio-post">
            <h3 class="simple-title">Nothing but the best for our Portfolio</h3>
            <p class="simple-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin
                fringilla metus non nulla cursus, sit amet rutrum est pretium.
            </p>
        </article>

        <nav class="portfolio-nav">
            <?php wp_nav_menu(array('theme_location' => 'portfolio')); ?>
        </nav>
    </div>
    <section class="portfolio-section">
        <div class="wrapper">
            <ul class="portfolio-list">
                <?php


                $args = array('posts_per_page' => -1, 'post_type' => 'portfolio');

                $myposts = get_posts($args);
                foreach ($myposts as $post) : setup_postdata($post); ?>
                    <li>
                        <div class="list-content">
                            <a class="item-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php the_content(); ?>
                        </div>
                        <div class="item">
                            <a class="post-images" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <a class="font-ico" href="<?php the_permalink(); ?>">
                                        <span class="fa fa-plus fa-2x"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </ul>
        </div>
    </section>
    <section class="portfolio-section">
        <div class="wrapper">
            <ul class="portfolio-list">
                <?php


                $args = array('posts_per_page' => -1, 'post_type' => 'portfolio');

                $myposts = get_posts($args);
                foreach ($myposts as $post) : setup_postdata($post); ?>
                    <li>
                        <div class="list-content">
                            <a class="item-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php the_content(); ?>
                        </div>
                        <div class="item">
                            <a class="post-images" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <a class="font-ico" href="<?php the_permalink(); ?>">
                                        <span class="fa fa-plus fa-2x"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </ul>
        </div>
    </section>
    <section class="portfolio-section">
        <div class="wrapper">
            <ul class="portfolio-list">
                <?php


                $args = array('posts_per_page' => -1, 'post_type' => 'portfolio');

                $myposts = get_posts($args);
                foreach ($myposts as $post) : setup_postdata($post); ?>
                    <li>
                        <div class="list-content">
                            <a class="item-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php the_content(); ?>
                        </div>
                        <div class="item">
                            <a class="post-images" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <a class="font-ico" href="<?php the_permalink(); ?>">
                                        <span class="fa fa-plus fa-2x"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </ul>
        </div>
    </section>
    <section class="portfolio-section">
        <div class="wrapper">
            <ul class="portfolio-list">
                <?php


                $args = array('posts_per_page' => -1, 'post_type' => 'portfolio');

                $myposts = get_posts($args);
                foreach ($myposts as $post) : setup_postdata($post); ?>
                    <li>
                        <div class="list-content">
                            <a class="item-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php the_content(); ?>
                        </div>
                        <div class="item">
                            <a class="post-images" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <a class="font-ico" href="<?php the_permalink(); ?>">
                                        <span class="fa fa-plus fa-2x"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </ul>
        </div>
    </section>
    <div class="wrapper">
        <article class="portfolio-post-bottom">
            <h3 class="simple-title">Do you need a Website?</h3>
            <p class="simple-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin
                fringilla metus non nulla cursus, sit amet rutrum est pretium.
            </p>
            <a class="get-quote" href="<?php the_permalink(); ?>">Get a Free Quote</a>
        </article>
    </div>
<?php get_footer(); ?>