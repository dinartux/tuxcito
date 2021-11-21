<?php

function tuxcito_add_scripts() {
	wp_register_style('tailwind', 'https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css', [], '2.0.0', 'all');
	wp_enqueue_style('tuxcito_styles', get_template_directory_uri() . '/assets/css/style.css', ['tailwind'], '1.0.0', 'all');
	wp_enqueue_script('tuxcito_script', get_template_directory_uri() . '/assets/css/main.js', [], '1.0.0', true);
}

function tuxcito_theme_supports(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
}

function tuxcito_add_menus() {
	register_nav_menus([
		'main-menu' => 'Main Menu',
		'responsive-main-menu' => 'Responsive Menu'
	]);
}

function tuxcito_add_tailwind_classes_to_menu($classes, $item, $args) {
    if ($args->menu === 'main-menu') {
		$classes = [];
        $classes[] = 'text-xl';
        $classes[] = 'text-white';
        $classes[] = 'px-4';
    }

    return $classes;
}

function tuxcito_add_custom_post_type(){
	register_post_type('expertise', [
        'labels' => [
            'name' => 'Expertises',
            'singular_name' => 'Expertise'
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
		'menu_icon' => 'dashicons-awards'
    ]);
}
add_action('wp_enqueue_scripts', 'tuxcito_add_scripts' );
add_action('after_setup_theme', 'tuxcito_theme_supports');
add_action('after_setup_theme', 'tuxcito_add_menus');
add_filter('nav_menu_css_class', 'tuxcito_add_tailwind_classes_to_menu', 10, 4);
add_action('init', 'tuxcito_add_custom_post_type');
