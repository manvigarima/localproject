<?php 

function cbsb_sc_flow() {
	add_action( 'wp_footer', 'cbsb_fe_styles' );
	add_action( 'wp_footer', 'cbsb_fe_script' );
	$markup = '
	<div id="startbooking-flow">
		<div class="sb-loader">
			<svg width="120" height="30" viewBox="0 0 120 30" xmlns="http://www.w3.org/2000/svg" fill="#000000">
				<circle cx="15" cy="15" r="15">
					<animate attributeName="r" from="15" to="15"
							 begin="0s" dur="0.8s"
							 values="15;9;15" calcMode="linear"
							 repeatCount="indefinite" />
					<animate attributeName="fill-opacity" from="1" to="1"
							 begin="0s" dur="0.8s"
							 values="1;.5;1" calcMode="linear"
							 repeatCount="indefinite" />
				</circle>
				<circle cx="60" cy="15" r="9" fill-opacity="0.3">
					<animate attributeName="r" from="9" to="9"
							 begin="0s" dur="0.8s"
							 values="9;15;9" calcMode="linear"
							 repeatCount="indefinite" />
					<animate attributeName="fill-opacity" from="0.5" to="0.5"
							 begin="0s" dur="0.8s"
							 values=".5;1;.5" calcMode="linear"
							 repeatCount="indefinite" />
				</circle>
				<circle cx="105" cy="15" r="15">
					<animate attributeName="r" from="15" to="15"
							 begin="0s" dur="0.8s"
							 values="15;9;15" calcMode="linear"
							 repeatCount="indefinite" />
					<animate attributeName="fill-opacity" from="1" to="1"
							 begin="0s" dur="0.8s"
							 values="1;.5;1" calcMode="linear"
							 repeatCount="indefinite" />
				</circle>
			</svg>
			<br/>
			<p><small>Loading the booking application...</small></p>
			<noscript>
			For online booking to function it is necessary to enable JavaScript.
			Here are the <a href="https://www.enable-javascript.com/" target="_blank">
			instructions how to enable JavaScript in your web browser</a>.
			</noscript>
		</div>
	</div>';
	return $markup;
	
}
add_shortcode( 'startbooking', 'cbsb_sc_flow' );

function cbsb_sc_book_items( $atts, $content = 'Book Now' ) {
	$booking_page_id = get_option( 'cbsb_booking_page' );

	if ( false === get_option( 'cbsb_connection' ) ) {
		return '<p>Unable to display quick book link because StartBooking is not connected.';
	}

	if ( isset( $_GET['in_page_book'] ) && $_GET['in_page_book'] ) {
		return cbsb_sc_flow();
	}

	$default_atts = array(
		'services' => array(),
	);
	if ( isset( $atts['services'] ) ) {
		$atts['services'] = explode( ',', $atts['services'] );
	}

	$atts = wp_parse_args( $atts, $default_atts );

	if ( is_numeric( $booking_page_id ) ) {
		$booking_url = get_permalink( $booking_page_id );
		$href = $booking_url . '?' . http_build_query( array('add_service' => $atts['services'] ) );
	} else {
		$args = array(
			'in_page_book' => true
		);
		$booking_url = get_permalink( get_the_ID() );
		$booking_url = add_query_arg( $args, $booking_url );
		$href = $booking_url . '?' . http_build_query( array('add_service' => $atts['services'] ) ) . '#appointment-page';
	}
	return "<a href=" . $href . ">" . $content . "</a>";
}
add_shortcode( 'startbooking_cta', 'cbsb_sc_book_items' );