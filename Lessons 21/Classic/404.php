<?php get_header(); ?>

    <div class="wrapper">

        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">

                <header class="page-header">
                    <h1 class="page-title"><?php _e( 'Not Found', 'classic' ); ?></h1>
                </header>

                <div class="page-wrapper">
                    <div class="page-content">
                        <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'classic' ); ?></h2>
                        <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'classic' ); ?></p>

                        <?php get_search_form(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php get_footer(); ?>