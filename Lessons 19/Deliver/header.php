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
			<div class="header-links">
				<ul class="header-social">
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
				<h1 class="logo">
					<a href="<?php echo home_url(); ?>">
						<?php bloginfo('name'); ?>
					</a>
				</h1>
			</div>
			<nav class="primery-nav">

				<?php
					$args = array(
							'theme_location' => 'primary'
					);
				?>

				<?php wp_nav_menu( $args); ?>
			</nav>
			<?php get_search_form(); ?>
		</div>
	</header>