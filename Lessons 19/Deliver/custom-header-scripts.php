<?php
function my_scripts_method() {
		$tmpDir = get_template_directory_uri();
		if ( get_post_type() == 'portfolio'){
			wp_register_script( 'easing-portfolio', $tmpDir.'/portfolio/js/jquery.easing.min.js');
			wp_enqueue_script( 'easing-portfolio' );
			wp_register_script( 'mixitup-portfolio', $tmpDir.'/portfolio/js/jquery.mixitup.min.js');
			wp_enqueue_script( 'mixitup-portfolio' );
			wp_register_script( 'custom-portfolio', $tmpDir.'/portfolio/js/custom.js');
			wp_enqueue_script( 'custom-portfolio' );
		}
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function add_my_stylesheet() {
		$tmpDir = get_template_directory_uri();
		if ( get_post_type() == 'portfolio'){
			wp_register_style('normalize-portfolio', $tmpDir.'/portfolio/css/normalize.css');
			wp_enqueue_style('normalize-portfolio');
			wp_register_style('layout-portfolio', $tmpDir.'/portfolio/css/layout.css');
			wp_enqueue_style('layout-portfolio');
		}
}
add_action('wp_enqueue_scripts', 'add_my_stylesheet');
