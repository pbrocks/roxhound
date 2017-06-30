<?php
/**
 * Foxhound functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Foxhound
 */

/**
 * As a child theme, let's make sure we enqueue scripts and styles from the parent theme.
 */
function enqueue_rockshound_parent_style() {
	wp_enqueue_style( 'parent-style', esc_url( trailingslashit( get_template_directory_uri() ) . 'style.css' ) );
}
add_action( 'wp_enqueue_scripts', 'enqueue_rockshound_parent_style' );
