<footer class="site-footer">
    <div class="wrapper">
        <div class="footer-content">
            <nav class="footer-nav">

                <?php
                $args = array(
                    'theme_location' => 'footer'
                );
                ?>

                <?php wp_nav_menu($args); ?>
            </nav>
            <div class="social-icons">
                <?php my_social_media_icons(); ?>
            </div>
            <div class="copyright">
                <?php
                if (get_theme_mod('hide_copyright') == '') {
                    echo __('&copy; Copyright ', 'text_domain');
                    echo get_theme_mod('copyright_year' . '') . ' ';?>
                    <a class="site-link" href="<?php the_permalink(); ?>"><?php echo get_theme_mod('copyright_name', '') . ' ';?></a>
               <?php }
                ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>