<?php get_header(); ?>

<div class="wrapper">
    <h2 class="posts-title"><?php the_title(); ?></h2>
    <?php $parametri = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'caller_get_posts' => 1
    );
    $archive_query = null;
    $archive_query = new WP_Query($parametri);
    if ($archive_query->have_posts()):
    echo '<h3 class="all-posts">All posts:</h3><ul class="post-map">';
        while ($archive_query->have_posts()) : $archive_query->the_post();?>
        <li>
            <a class="post-arch-title" href="<?php the_permalink() ?>" title="Permalink: <?php the_title_attribute(); ?>" target="_blank"><?php the_title(); ?></a>
            <ul class="post-meta">
                <li>
                    <span class="fa fa-calendar"></span>
                    <a href="<?php the_permalink(); ?>"><?php the_time('F jS, Y') ?></a>
                </li>
                <li>
                    <span class="fa fa-user"></span>
                    <a href="<?php the_permalink(); ?>"><?php the_author('name'); ?></a>
                </li>
                <li>
                    <span class="fa fa-bookmark"></span>
                    <a href="<?php the_permalink(); ?>"> <?php
                        $category = get_the_category();
                        echo $category[0]->cat_name;
                        echo ", ";
                        echo $category[1]->cat_name;
                        ?></a>
                </li>
                <li>
                    <span class="fa fa-comment"></span>
                    <a href="<?php the_permalink(); ?>"><?php
                        global $post;
                        echo $post->comment_count;
                        echo " Comments";
                        ?></a>
                </li>
            </ul>
        </li>
        <?php
        endwhile;
        endif;
        wp_reset_query();  /* Сбрасываем нашу выборку. */
        ?>
</div>

<?php get_footer(); ?>