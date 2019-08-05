<?php

function cbsb_clean_services( $services ) {
	$clean_services = new stdClass;
	if ( property_exists( $services, 'services' ) ) {
		$services = $services->services;
		$service_map = array();
		if ( is_array( $services ) ) {
			$clean_services->service_types = [];
			$clean_services->all_services = [];
			foreach ( $services as $service ) {
				if ( 'active' != $service->status || 1 != $service->schedule_online ) {
					continue;
				}
				$service->uid = $service->url_string;
				unset( $service->url_string );

				$service_map[ $service->uid ] = $service;
				$clean_services->all_services[ $service->uid ] = $service;
				foreach ( $service->types as $type ) {
					$type->uid = $type->url_string;

					if ( ! isset( $clean_services->service_types[ $type->uid ] ) ) {
						$clean_services->service_types[ $type->url_string ] = new stdClass();
					}

					$clean_services->service_types[ $type->uid ]->uid = $type->url_string;
					$clean_services->service_types[ $type->uid ]->name = $type->type;

					if ( property_exists( $clean_services->service_types[ $type->uid ], 'available_services' ) ) {
						$clean_services->service_types[ $type->uid ]->available_services[ $service->uid ] = $service;
					} else {
						$clean_services->service_types[ $type->uid ]->available_services = array();
						$clean_services->service_types[ $type->uid ]->available_services[ $service->uid ] = $service;
					}
				}
			}
			update_option( 'cbsb_service_map', $service_map );
		}
	}
	return $clean_services;
}
add_filter( 'cbsb_clean_data_services', 'cbsb_clean_services' );

function cbsb_clean_customer_validate( $customer ) {
	$clean_customer = new stdClass();
	if ( property_exists( $customer, 'valid' ) && true == $customer->valid ) {
		$clean_customer->cust_uid = ( isset( $customer->customer_url_string ) ) ? $customer->customer_url_string : null;
		$clean_customer->first_name = ( isset( $customer->first_name ) ) ? $customer->first_name : null;
		$clean_customer->last_name = ( isset( $customer->last_name ) ) ? $customer->last_name : null;
		$clean_customer->email = ( isset( $customer->email ) ) ? $customer->email : null;
		$clean_customer->phone = ( isset( $customer->cell_phone ) ) ? $customer->cell_phone : 'n/a';
	}
	return $clean_customer;
}
add_filter( 'cbsb_clean_data_customer/validate', 'cbsb_clean_customer_validate' );

function cbsb_clean_openings( $openings ) {
	if ( is_object( $openings ) ) {
		if ( $openings->status == 'success' ) {
			$clean_appointments = [];
			foreach ( $openings->bookable_appointments as $appointment) {
				$appointment->readable_time = date_format( date_create( $appointment->start_time ), "g:i a" );
				$clean_appointments[strtotime($appointment->start_time)] = $appointment;
			}
			$openings->bookable_appointments = array_values( $clean_appointments );
			$openings->count = count( $openings->bookable_appointments );
			return $openings;
		} else {
			$openings->bookable_appointments = [];
			return $openings;
		}
	}
}
add_filter( 'cbsb_clean_data_openings', 'cbsb_clean_openings' );

function cbsb_clean_customer_create( $customer ) {
	return $customer;
}
add_filter( 'cbsb_clean_data_customer/create', 'cbsb_clean_customer_create' );

function cbsb_clean_appointment_create( $appointment ) {
	$clean_appointment = new stdClass();
	$clean_appointment->status = $appointment->status;

	if ( property_exists( $appointment, 'appointment' ) ) {
		$clean_appointment->appointment_uid = $appointment->appointment->url_string;
		$clean_appointment->hash_group = $appointment->appointment->hash_group;
		$clean_appointment->customer = $appointment->customer;
		$clean_appointment->assigned_user = $appointment->assigned_user;
	} else {
		$clean_appointment->error_msg = 'Unable to create appointment.';
	}
	return $clean_appointment;
}
add_filter( 'cbsb_clean_data_appointment/create', 'cbsb_clean_appointment_create' );