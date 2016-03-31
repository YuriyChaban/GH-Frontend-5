<?php get_header(); ?>

	<!-- Start menu section -->
	<section id="menu-area">
		<nav class="navbar navbar-default main-navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- LOGO -->
					<a class="navbar-brand logo" href="<?php bloginfo('url'); ?>">
						<?php if (get_theme_mod('gootheme_logo')) :
							echo '<img src="' . esc_url(get_theme_mod('gootheme_logo')) . '">';
						else:
							echo get_bloginfo('name') . '<span>' . get_bloginfo('description') . '</span>';
						endif; ?>
					</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<?php wp_nav_menu(array(
							'container' => false,
							'menu_id' => 'top-menu',
							'menu_class' => 'nav navbar-nav main-nav menu-scroll',
							'echo' => true,
							'before' => '',
							'after' => '',
							'link_before' => '',
							'link_after' => '',
							'depth' => 0,
							"theme_location" => "404 menu",
							'walker' => new description_walker())
					);
					?>
				</div><!--/.nav-collapse -->
				<div class="search-area">
					<?php get_search_form(); ?>
				</div>
			</div>
		</nav>
	</section>
	<!-- End menu section -->

	<!-- Start error page -->
	<section id="error-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="error-page-area">
						<div class="error-no-area">
							<div class="error-no">
								<h2><?php _e('404 Error', 'rex'); ?></h2>
								<p><?php _e('Sorry', 'rex'); ?></p>
							</div>
						</div>
					</div>
					<div class="error-message">
						<h4><?php _e('Woops! Something gone wrong', 'rex'); ?></h4>
						<p><?php _e('Sorry, the page you have requested has either been moved,or does not exist, Return to our', 'rex'); ?> <a href="<?php the_permalink();  ?>"><?php _e('homepage', 'rex'); ?></a>.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End error page -->

<?php
get_footer();
