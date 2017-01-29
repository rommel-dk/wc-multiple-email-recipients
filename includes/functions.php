<?php

/*our functions for controlling the mail sending*/

//Check if WooCommerce is active
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {


	// Hook me in!
	add_filter( 'woocommerce_email_headers', 'wcme_multiple_recipients', 10, 2);
		

	function wcme_multiple_recipients( $headers, $object ) {
	//get our options
	$wcme_options = get_option('wcme_settings');
	
	// replace the emails below to your desire email
	$emails = array( $wcme_options['email_1'], $wcme_options['email_2'], $wcme_options['email_3'], $wcme_options['email_4'], $wcme_options['email_5'] );
		
		
	// WooCommerce core	
    if ($object == 'new_order'  && $wcme_options['enable_new'] == true) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}

	if ($object == 'cancelled_order'  && $wcme_options['enable_cancelled'] == true) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}

	if ($object == 'customer_processing_order'  && $wcme_options['enable_processing'] == true) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}

	if ($object == 'customer_completed_order'  && $wcme_options['enable_completed'] == true) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}

	if ($object == 'customer_invoice'  && $wcme_options['enable_invoice'] == true) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}

	if ($object == 'customer_refunded_order'  && $wcme_options['enable_refunded'] == true) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}
	
	// WooCommerce Booking
	if ($object == 'booking_cancelled' && isset ($wcme_options['enable_booking_cancelled'])) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}
	
	if ($object == 'booking_confirmed' && isset ($wcme_options['enable_booking_confirmed'])) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}
	
	if ($object == 'booking_notification' && isset ($wcme_options['enable_booking_notification'])) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}
	
	
	if ($object == 'booking_reminder' && isset ($wcme_options['enable_booking_reminder'] == true)) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}
	
	if ($object == 'new_booking' && isset ($wcme_options['enable_new_booking'] )) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}
	
	// WooCommerce Subscriptions 
	
	if ($object == 'customer_completed_renewal_order' && isset ($wcme_options['enable_customer_completed_renewal_order'] )) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}
	
	if ($object == 'customer_completed_switch_order' && isset ($wcme_options['enable_customer_completed_switch_order'] )) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}
	
	if ($object == 'customer_payment_retry' && isset ($wcme_options['enable_customer_payment_retry'] )) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}
	
	if ($object == 'customer_processing_renewal_order' && isset ($wcme_options['customer_processing_renewal_order'] )) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}
	
	if ($object == 'customer_renewal_invoice' && isset ($wcme_options['enable_customer_renewal_invoice'] )) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}
	
	if ($object == 'expired_subscription' && isset ($wcme_options['expired_subscription'] )) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}
	
	
	if ($object == 'new_renewal_order' && isset ($wcme_options['enable_new_renewal_order'] )) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}
	
	
	if ($object == 'new_switch_order' && isset ($wcme_options['enable_new_booking'] )) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}
	
	if ($object == 'suspended_subscription' && isset ($wcme_options['enable_new_booking'] )) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}
	
	if ($object == 'payment_retry' && isset ($wcme_options['enable_new_booking'] )) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
		
	}
	
 
	return $headers;
}

}

else {return 'WooCommerce is not active, please install and activate it first';}