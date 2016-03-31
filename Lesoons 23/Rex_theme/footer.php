<?php

?>

</div><!-- #content -->
<!-- Start Footer -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-top-area">
                        <a class="footer-logo" href="<?php echo home_url(); ?>">
                            <?php if (get_theme_mod('gootheme_logo')) :
                                echo '<img src="' . esc_url(get_theme_mod('gootheme_logo')) . '">';
                            else:
                                echo get_bloginfo('name') . '<span>' . get_bloginfo('description') . '</span>';
                            endif; ?>
                        </a>
                        <div class="footer-social">
                            <?php my_social_media_icons(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>
            <?php
            if (get_theme_mod('hide_copyright') == '') {
                echo __('Designed by ', 'text_domain');
                echo get_theme_mod('copyright_year' . '') . ' '; ?>
                <a href="<?php the_permalink(); ?>"><?php echo get_theme_mod('copyright_name', '') . ' '; ?></a>
            <?php }
            ?>
        </p>
    </div>
</footer>
<!-- End Footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
