<?php
/**
 * @package VW Hospital Lite
 * @subpackage vw-hospital-lite
 * @since vw-hospital-lite 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses vw_hospital_lite_header_style()
*/

function vw_hospital_lite_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'vw_hospital_lite_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'flex-width'             => true,
		'flex-height'            => true,
		'admin-preview-callback' => 'vw_hospital_lite_admin_header_image',
	) ) );
}

add_action( 'after_setup_theme', 'vw_hospital_lite_custom_header_setup' );



if ( ! function_exists( 'vw_hospital_lite_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see vw_hospital_lite_custom_header_setup().
 */
function vw_hospital_lite_admin_header_image() {
?>
	<div id="headimg">		
		<?php if ( get_header_image() ) : ?>
		<img src="<?php header_image(); ?>" alt="">
		<?php endif; ?>
	</div>
<?php
}
endif; // vw_hospital_lite_admin_header_image