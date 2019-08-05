<?php
/*
Manage/Load CSS/JS
*/

function cbsb_admin_main_js() {
	if ( isset( $_GET['page'] ) && false !== strpos( $_GET['page'], 'cbsb-' ) ) {
		wp_enqueue_style( 'cbsb-admin-bootstrap-css', CBSB_BASE_URL . 'css/bootstrap.min.css' );
		wp_enqueue_style( 'cbsb-admin-main-css', CBSB_BASE_URL . 'css/main.css' );
		wp_enqueue_style( 'cbsb-admin-colorpicker-style', CBSB_BASE_URL . 'css/colorpicker.css' );
		wp_enqueue_script( 'cbsb-admin-bootstrap-js', CBSB_BASE_URL . 'js/bootstrap.min.js', 'jquery' );
		wp_enqueue_script( 'cbsb-admin-main-js', CBSB_BASE_URL . 'js/main.js', 'jquery' );
		wp_enqueue_script( 'cbsb-admin-colorpicker', CBSB_BASE_URL . 'js/colorpicker.js', 'jquery' );
	}
}
add_action( 'admin_init', 'cbsb_admin_main_js' );

function cbsb_fe_script() {
	
	wp_register_script( 'cbsb-react-js', CBSB_BASE_URL . 'js/main.24f78ef0.js' );
	
	$initial_state =  new stdClass();
	$initial_state->step = 1;
	$wp_data = array(
		'baseUrl'      => admin_url( 'admin-ajax.php' ),
		'endPoints'    => array(
			'processAppointment'    => 'cbsb_proccess_appointment',
			'getServices'           => 'cbsb_get_services',
			'getServiceDates'       => 'cbsb_get_service_dates',
			'getAvailabilityByDate' => 'cbsb_get_availablility_by_date',
		),
		'initialState' => $initial_state,
		'settings'     => cbsb_current_settings(),
		'mixpanelKey'  => 'eb7a78544eed4e6a20e481834df14d18',
	);

	$wp_data = apply_filters( 'cbsb_react_fe', $wp_data );
	wp_localize_script( 'cbsb-react-js', 'cbsbData', $wp_data );

	wp_enqueue_script( 'cbsb-react-js' );
}

function cbsb_fe_styles() {

	wp_enqueue_style( 'start-booking-react', CBSB_BASE_URL . 'css/main.f02d7363.css' );

	wp_enqueue_style( 'startbooking-flow', CBSB_BASE_URL . 'css/booking-flow-layout.css' );
	$settings = cbsb_current_settings();
	$background_brightness = cbsb_get_brightness( $settings['btn_bg_color'] );
	if ($background_brightness < 130 ){
		$default_text = '#ffffff';
	} else {
		$default_text = '#5e5e5e';
	}
	echo '<style type="text/css">
		#startbooking-flow .DayPicker-Day--today{
			color: #' . $settings['btn_bg_color'] . ';
		}
		#startbooking-flow .DayPicker-Day--selected{
			color: ' . $default_text . ';
		}
		#startbooking-flow .DayPicker-Day--selected,
		#startbooking-flow .sb-button-wrap .sb-primary-action button {
		    background-color: #' . $settings['btn_bg_color'] . ';
		    color: #' . $settings['btn_txt_color'] . ';
		}
		#startbooking-flow .rc-steps-item-finish .rc-steps-item-icon {
			border-color: #' . $settings['btn_bg_color'] . ';
		}
		#startbooking-flow .rc-steps-item-finish .rc-steps-item-icon>.rc-steps-icon {
			color: #' . $settings['btn_bg_color'] . ';
		}
		#startbooking-flow .rc-steps-item-finish .rc-steps-item-icon>.rc-steps-icon .rc-steps-icon-dot {
			background: #' . $settings['btn_bg_color'] . ';
		}
		#startbooking-flow .rc-steps-item-finish .rc-steps-item-title:after,
		#startbooking-flow .rc-steps-item-process .rc-steps-item-icon > .rc-steps-icon .rc-steps-icon-dot,
		#startbooking-flow .rc-steps-item-finish .rc-steps-item-tail:after {
			background-color: #' . $settings['btn_bg_color'] . ';
		}
	</style>' ."\r\n";
}
