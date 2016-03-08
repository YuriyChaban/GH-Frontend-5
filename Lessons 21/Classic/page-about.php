<?php get_header(); ?>

    <div class="wrapper">
        <div class="about-page">
            <div class="page-intro">
                <?php
                if (have_posts()):?>
                    <?php while (have_posts()):the_post(); ?>
                        <?php foreach ($posts as $post) : ?>
                            <?php setup_postdata($post); ?>
                            <h2 class="custom-title"><?php the_title(); ?></h2>
                            <p class="custom-description"><?php the_content(); ?></p>
                        <?php endforeach; ?>

                    <?php endwhile ?>
                <?php endif ?>
            </div>
            <h2 class="team-intro"><?php echo __('Meet Our Team!', 'text_domain'); ?></h2>
            <div class="team-block">
                <?php
                $args = array('post_type' => 'team', 'post_per_page' => 5);
                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="team-item">
                            <h2 class="person-name">
                                <a class="feature-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                <a class="item-name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <a class="person-position" href="<?php the_permalink(); ?>">
                                    <?php
                                    $terms = get_the_terms($post->ID, 'professionals');
                                    foreach ($terms as $term) {
                                        echo $term->name;
                                    }
                                    ?>
                                </a>
                            </h2>
                            <p class="person-description"><?php the_content(); ?></p>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else: ?>
                    <p><?php __('Sorry, post not found', 'text_domain'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>