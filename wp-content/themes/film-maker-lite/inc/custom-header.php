<?php
/**
 * Custom header implementation
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package Film Maker Lite
 * @subpackage film_maker_lite
 */

function film_maker_lite_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'film_maker_lite_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'film_maker_lite_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'film_maker_lite_custom_header_setup' );

if ( ! function_exists( 'film_maker_lite_header_style' ) ) :
add_action( 'wp_enqueue_scripts', 'film_maker_lite_header_style' );
function film_maker_lite_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        .headerbox,.page-template-front-page .headerbox{
			background-image:url('".esc_url(get_header_image())."') !important;
			background-position: center top;
		}";
	   	wp_add_inline_style( 'film-maker-lite-style', $custom_css );
	endif;
}
endif;