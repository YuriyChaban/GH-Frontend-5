<?php get_header(); ?>

    <div class="wrapper">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h2 class="page-title"><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

            <span class="edit">
                <span class="fa fa-pencil"></span>
                <?php edit_post_link('Edit this entry.'); ?>
            </span>
            <?php comments_template(); ?>
        <?php endwhile; ?>

        <?php else : ?>
            <h1><?php echo __('Not found', 'text_domain'); ?></h1>
            <p><?php echo __('Sorry, but the page you requested does not exist.', 'text_domain'); ?></p>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>