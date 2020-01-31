<?php
/**
 * Configures images.
 *
 * @package LowTechWPZero
 */


/**
 * Set sizes for responsive images.
 */
function lowtechwp_zero_calculate_image_sizes( string $sizes, $size, string $image_src, array $image_meta, int $attachment_id ) {
	return "(max-width: calc(600px / 0.92)) 92vw, 600px";
}
add_filter( 'wp_calculate_image_sizes', 'lowtechwp_zero_calculate_image_sizes', 10, 5 );


/**
 * Set max width for image srcsets.
 */
function lowtechwp_zero_set_max_srcset( int $max_width, array $size_array ) {
	// Double the amount for high density displays.
	return 600;
}
add_filter( 'max_srcset_image_width', 'lowtechwp_zero_set_max_srcset', 10, 2 );


/**
 * Add image sizes.
 */
function lowtechwp_zero_add_image_sizes() {
  add_image_size( 'lowtechwp-zero-full-width', 600 );
}
add_action( 'after_setup_theme', 'lowtechwp_zero_add_image_sizes' );


/**
 * Prevent srcset with larger images.
 */
function lowtechwp_zero_limit_srcset_sizes( $sources, $size_array, $image_src, $image_meta, $attachment_id ) {
	$new_sources = [];
	foreach ( $sources as $source ) {
		if ( $source['descriptor'] === 'w' && $source['value'] > 600 ) {
			continue;
		}
		$new_sources[] = $source;
	}
	return $new_sources;
}
add_action( 'wp_calculate_image_srcset', 'lowtechwp_zero_limit_srcset_sizes', 10, 5 );