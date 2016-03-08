<?php get_header(); ?>
<section class="categories">
    <div class="wrapper">
        <ul class="categories-list">
            <?php
            $args = array(
                'title_li' => '',
                'hide_empty' => 0,
            );
            wp_list_categories($args);
            ?>
        </ul>
    </div>
</section>
<div class="wrapper">
    <div class="main-post">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
                <h2 class="post-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <a class="posted-date" href="<?php the_permalink(); ?>"> Posted on <?php the_date('F j, Y'); ?></a>
                <a class="feature-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                <p class="post-description"><?php echo wp_trim_words(get_the_content(), 100); ?></p>
                <a class="read-more" href="<?php the_permalink(); ?>">
                    <span class="fa fa-arrow-right"></span>
                    <?php echo __('Read more', 'text_domain'); ?>
                </a>
            <?php endwhile;
        else: ?>
            <p></p>
            <?php
        endif;
        ?>
        <div class="pagination">
            <?php the_post_navigation( array(
                'next_text' => 'Next post: %title',
                'prev_text' => 'Previous post: %title',
            ) );
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
