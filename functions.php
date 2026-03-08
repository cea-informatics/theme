<?php

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'foxtown-parent-style',
		get_template_directory_uri() . '/style.css'
	);
});

add_action('wp_head', function () { ?>
	<style>
		:root { --theme-palette-color-1: #0055A4; }
	</style>
<?php }, 100);
