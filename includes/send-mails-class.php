<?php

/*our functions for controlling the mail sending*/

/*cancelled_subscription
	customer_completed_renewal_order
	customer_completed_switch_order
	customer_payment_retry
	customer_processing_renewal_order
	customer_renewal_invoice
	expired_subscription
	new_renewal_order
	new_switch_order
	suspended_subscription
	payment_retry*/

if(!class_exists('wcme_SendEmails') && is_plugin_active( 'woocommerce/woocommerce.php' ))
{
	class wcme_SendEmails() 
	{
		public function __construct()
		{
			add_filter( 'woocommerce_email_headers', array($this, 'wcme_multiple_recipients'), 10, 2);
		}
		
			function wcme_multiple_recipients( $headers, $object ) 
			{
				//get our options
				$wcme_options = get_option('wcme_settings');
				
				// replace the emails below to your desire email
				$emails = array
				( 
					$wcme_options['email_1'], 
					$wcme_options['email_2'], 
					$wcme_options['email_3'],
					$wcme_options['email_4'], 
					$wcme_options['email_5'] 
				);
					
				    if ($object == 'new_order'  && $wcme_options['enable_new'] == true) 
				    {
				        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
							//break;
					}
				
					if ($object == 'cancelled_order'  && $wcme_options['enable_cancelled'] == true) 
					{
				        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
							//break;	
					}
				
					if ($object == 'customer_processing_order'  && $wcme_options['enable_processing'] == true) 
					{
				        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
							//break;
					}
				
					if ($object == 'customer_completed_order'  && $wcme_options['enable_completed'] == true) 
					{
				        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
							//break;	
					}
				
					if ($object == 'customer_invoice'  && $wcme_options['enable_invoice'] == true) 
					{
				        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
							//break;	
					}
				
					if ($object == 'customer_refunded_order'  && $wcme_options['enable_refunded'] == true) {
				        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
							//break;
						
					}
					
					if ($object == 'booking_cancelled' && isset ($wcme_options['enable_booking_cancelled'])) 
					{
				        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
							//break;	
					}
					
					if ($object == 'booking_confirmed' && isset ($wcme_options['enable_booking_confirmed'])) 
					{
				        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
							//break;	
					}
					
					if ($object == 'booking_notification' && isset ($wcme_options['enable_booking_notification'])) 
					{
				        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
							//break;	
					}
					
					
					if ($object == 'booking_reminder' && isset ($wcme_options['enable_booking_reminder'] )) 
					{
				        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
							//break;	
					}
					
					if ($object == 'new_booking' && isset ($wcme_options['enable_new_booking'] )) 
					{
				        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
							//break;	
					}
					
					if ($object == 'suspended_subscription') 
					{
				        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
							//break;	
					}
						return $headers;
			}
	}
}

else {return 'WooCommerce is not active, please install and activate it first';}