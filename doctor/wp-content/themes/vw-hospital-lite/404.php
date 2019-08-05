<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package VW Hospital Lite
 */

get_header(); ?>
	<div id="content-vw">
		<div class="container">
            <div class="page-content">						
					<h1><?php printf( '<strong>%s</strong> %s', esc_html__( '404', 'vw-hospital-lite' ), esc_html__( 'Not Found', 'vw-hospital-lite' ) ) ?></h1>
					<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn&hellip', 'vw-hospital-lite' ); ?></p>
					<p class="text-404"><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'vw-hospital-lite' ); ?></p>
					<div class="read-moresec">
                		<a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right"><?php esc_html_e( 'Return to Home Page', 'vw-hospital-lite' ); ?></a>
 					</div>				
				<div class="clearfix"></div>
            </div>
		</div>
	</div>
<?php get_footer(); ?>