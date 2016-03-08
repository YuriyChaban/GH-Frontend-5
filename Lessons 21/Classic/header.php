<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<header>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</header>
<body <?php body_class(); ?>>
<!-- site header -->
<header class="site-header">
    <div class="wrapper">
        <nav class="primary">

            <?php
            $args = array(
            'theme_location' => 'primary'
            );
            ?>

            <?php wp_nav_menu($args); ?>
        </nav>
        <h1 class="logo">
            <a href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </h1>
    </div>
</header>