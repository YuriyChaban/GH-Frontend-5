<footer class="site-footer">
    <div class="wrapper">
        <div class="footer-logo">
            <a class="logo-img" href="<?php the_permalink(); ?>"><?php bloginfo('name'); ?></a>
            <ul class="footer-social">
                <li>
                    <a href="#">
                        <span class="fa fa-twitter"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-facebook"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-rss"></span>
                    </a>
                </li>
            </ul>
            <p class="logo-description">
                Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Vestibulum gravida quam quis nunc rutrum
                placerat. Proin eu mi vitae neque veh interdum id nec turpis
                nam auctor faucibus sollicitudin.
            </p>
        </div>

        <div class="footer-widget">
            <?php dynamic_sidebar('footer-sidebar'); ?>
        </div>
        <div class="copyright">
            <p class="copy-info">
                copyright <?php echo date('Y'); ?>
                <a class="deliver-link" href="<?php the_permalink(); ?>">Deliver</a>.
                 All Rights Reserved.
            </p>

            <nav class="footer-small-nav">
                <?php
                $args = array(
                    'theme_location' => 'smallnav'
                );
                ?>
                <?php wp_nav_menu($args); ?>
            </nav>

        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>