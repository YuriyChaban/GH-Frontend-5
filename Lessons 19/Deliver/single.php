<?php get_header(); ?>

    <div class="page-title">
        <div class="wrapper">
            <h2 class="title"><?php the_title(); ?></h2>
        </div>
    </div>
    <div class="wrapper blog-page-post">
        <aside class="sidebar-blog">
            <?php dynamic_sidebar('blog-sidebar'); ?>
        </aside>
        <div class="main-content">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <?php endwhile; ?>

            <?php else : ?>
                <?php echo "<p>No content found</p>"; ?>
            <?php endif; ?>
            <article class="meta-to-post">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                <h2 class="blog-post-title"><?php the_title(); ?></h2>
                <ul class="post-meta">
                    <li>
                        <span class="fa fa-calendar"></span>
                        <span><?php the_time('F jS, Y') ?></span>
                    </li>
                    <li>
                        <span class="fa fa-user"></span>
                        <?php the_author('name'); ?>
                    </li>
                    <li>
                        <span class="fa fa-bookmark"></span>
                        <?php
                        $category = get_the_category();
                        echo $category[0]->cat_name;
                        echo ", ";
                        echo $category[1]->cat_name;
                        ?>
                    </li>
                    <li>
                        <span class="fa fa-comment"></span>
                        <?php
                        global $post;
                        echo $post->comment_count;
                        echo " Comments";
                        ?>
                    </li>
                </ul>
                <?php the_content(); ?>
            </article>
            <div class="social-share">
                <?php comments_template(); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>