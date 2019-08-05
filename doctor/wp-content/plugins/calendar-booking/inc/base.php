<?php


function cbsb_load_textdomain() {
	load_plugin_textdomain( 'calendar-booking', false, 'calendar-booking/languages/' );
}
add_action( 'plugins_loaded', 'cbsb_load_textdomain' );

function cbsb_url_string_to_id( $services ) {
	$return = array();
	$service_map = get_option( 'cbsb_service_map' );
	foreach ( $services as $service ) {
		if ( is_int( $service ) ) {
			$return[] = $service;
		} else {
			$return[] = array_search( $service, $service_map );
		}
	}
	return array_filter( $return );
}

function cbsb_create_booking_page( $title ) {
	$post = array(
		'post_title'     => $title,
		'post_content'   => '[startbooking]',
		'post_status'    => 'publish',
		'post_type'      => 'page',
	);
	$create = wp_insert_post( $post );
	if ( $create ) {
		update_option( 'cbsb_booking_page', $create );
		$response = array( 'status' => 'success', 'message' => 'Booking Page Created.', 'reload' => true );
	} else {
		$response = array( 'status' => 'error', 'message' => 'Unable to create page.', 'reload' => false );
	}
}

function cbsb_add_services( $wp_data ) {
	global $cbsb;
	if ( isset( $_GET['add_service'] ) ) {
		$wp_data['initialState']->services = array();
		if( ! is_array( $_GET['add_service'] ) ) { $_GET['add_service'] = array( $_GET['add_service'] ); }
		$wp_data['initialState']->services = array_map( 'esc_html', $_GET['add_service'] );

		$service_details = $cbsb->get( 'services', null, false );
		if ( 'success' == $service_details['status'] && isset( $service_details['data'] ) ) {
			$wp_data['initialState']->service_types = $service_details['data']->service_types;
			$wp_data['initialState']->service_names = array();
			$wp_data['initialState']->total_duration = 0;
			foreach ( $service_details['data']->all_services as $service ) {
				if ( in_array( $service->uid, $wp_data['initialState']->services ) ) {
					$wp_data['initialState']->total_duration += $service->duration;
					$wp_data['initialState']->service_names[] = $service->name;
					$wp_data['initialState']->default_cart[] = $service;
				}
			}
			$wp_data['initialState']->step = 2;
		}
	}
	return $wp_data;
}
add_filter( 'cbsb_react_fe', 'cbsb_add_services', 20, 1 );

function cbsb_account_details( $wp_data ) {
	global $cbsb;
	$details = $cbsb->get( 'account/details' );
	if ( 'success' == $details['status'] && isset( $details['data'] ) ) {
		$wp_data['account_details'] = $details['data'];
		$wp_data['account_details']->domain = get_site_url();
		if (property_exists($wp_data['account_details'], 'address')) {
			$wp_data['account_details']->account_uid = $wp_data['account_details']->address->account_url_string;
		}
		$wp_data['account_details']->days_closed = array();
		$days = array_flip( array(
			'Sunday',
			'Monday',
			'Tuesday',
			'Wednesday',
			'Thursday',
			'Friday',
			'Saturday'
		) );
		if ( isset( $wp_data['account_details'] ) && property_exists( $wp_data['account_details'], 'location_hours' ) && is_array( $wp_data['account_details']->location_hours ) ) {
			foreach ( $wp_data['account_details']->location_hours as $weekday ) {
				if ( 'closed' == $weekday->day_type ) {
					$wp_data['account_details']->days_closed[] = $days[$weekday->day];
				}
			}
		}
	}
	return $wp_data;
}
add_filter( 'cbsb_react_fe', 'cbsb_account_details', 10, 1 );

function cbsb_current_settings() {
	$defaults = array(
		'btn_bg_color'                  => '000',
		'btn_txt_color'                 => 'fff',
		'endorse_us'                    => 'false',
		'show_progress'                 => 'true',
		'allow_data_collection'         => 'false',
		'is_connected'                  => ( get_option( 'cbsb_connection' ) ) ? 'true' : 'false',
		'disable_booking'               => 'false',
		'expedited_single_service'      => 'true',
		'expedited_single_service_type' => 'true',
		'expedited_qty_services'        => 'true',
		'booking_window'                => 0,
	);

	$current_settings = get_option( 'start_booking_settings' );

	$current_settings = wp_parse_args( $current_settings, $defaults );

	return $current_settings;
}

function cbsb_active_subscription( $wp_data ) {
	global $cbsb;
	$account_status = $cbsb->get( 'account/billing/status' );
	if ( isset( $account_status['status'] ) && 'success' === $account_status['status'] && isset( $account_status['data'] ) ) {
		$account = $account_status['data'];
		if ( property_exists( $account, 'valid' ) ) {
			$status = $account->valid;
		}
	}
	if ( ! isset( $status ) ) {
		$status = false;
	}
	$wp_data['account_status'] = $status;
	return $wp_data;
}
add_filter( 'cbsb_react_fe', 'cbsb_active_subscription', 10, 1 );

function cbsb_copy_transfer( $wp_data ) {
	$wp_data['copy'] = cbsb_get_copy();
	return $wp_data;
}
add_filter( 'cbsb_react_fe', 'cbsb_copy_transfer', 10, 1 );

function cbsb_array_merge_recursive_simple() {

    if (func_num_args() < 2) {
        trigger_error(__FUNCTION__ .' needs two or more array arguments', E_USER_WARNING);
        return;
    }
    $arrays = func_get_args();
    $merged = array();
    while ($arrays) {
        $array = array_shift($arrays);
        if (!is_array($array)) {
            trigger_error(__FUNCTION__ .' encountered a non array argument', E_USER_WARNING);
            return;
        }
        if (!$array)
            continue;
        foreach ($array as $key => $value)
            if (is_string($key))
                if (is_array($value) && array_key_exists($key, $merged) && is_array($merged[$key]))
                    $merged[$key] = call_user_func(__FUNCTION__, $merged[$key], $value);
                else
                    $merged[$key] = $value;
            else
                $merged[] = $value;
    }
    return $merged;
}
function cbsb_get_brightness($hex) {
	$hex = str_replace('#', '', $hex);
	$c_r = hexdec(substr($hex, 0, 2));
	$c_g = hexdec(substr($hex, 2, 2));
	$c_b = hexdec(substr($hex, 4, 2));

	return (($c_r * 299) + ($c_g * 587) + ($c_b * 114)) / 1000;
}