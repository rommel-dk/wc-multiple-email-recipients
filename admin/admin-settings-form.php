<?php
	
	
<div class="wrap">
    <h2>WP Plugin Template</h2>
    <form method="post" action="options.php"> 
        <?php @settings_fields('wp_plugin_template-group'); ?>
        <?php @do_settings_fields('wp_plugin_template-group'); ?>

        <?php do_settings_sections('wp_plugin_template'); ?>

        <?php @submit_button(); ?>
    </form>
</div>

function wcme_options_page() {

	global $wcme_options;

	ob_start(); ?>
	<div class="wrap">
		<h2>WC Multiple Recipients for E-Mail</h2>
		
		<form method="post" action="options.php">
		
			<?php settings_fields('wcme_settings_group'); ?>
		

			<h4><?php _e('Enter your additional E-Mail recipients. <br><p>Enter one E-Mail per field i.e. woo@sendtome.com</p>', 'wcme_domain'); ?></h4>
			<p>
				<input size="70" id="wcme_settings[email_1]" name="wcme_settings[email_1]" type="text" value="<?php echo $wcme_options['email_1']; ?>"/><br>
				<label class="description" for="wcme_settings[email_1]"><?php _e('', 'wcme_domain'); ?></label>
			</p>

			<p>
				<input size="70" id="wcme_settings[email_2]" name="wcme_settings[email_2]" type="text" value="<?php echo $wcme_options['email_2']; ?>"/><br>
				<label class="description" for="wcme_settings[email_1]"><?php _e('', 'wcme_domain'); ?></label>
			</p>

			<p>
				<input size="70" id="wcme_settings[email_3]" name="wcme_settings[email_3]" type="text" value="<?php echo $wcme_options['email_3']; ?>"/><br>
				<label class="description" for="wcme_settings[email_1]"><?php _e('', 'wcme_domain'); ?></label>
			</p>

			<p>
				<input size="70" id="wcme_settings[email_4]" name="wcme_settings[email_4]" type="text" value="<?php echo $wcme_options['email_4']; ?>"/><br>
				<label class="description" for="wcme_settings[email_1]"><?php _e('', 'wcme_domain'); ?></label>
			</p>

			<p>
				<input size="70" id="wcme_settings[email_5]" name="wcme_settings[email_5]" type="text" value="<?php echo $wcme_options['email_5']; ?>"/><br>
				<label class="description" for="wcme_settings[email_1]"><?php _e('', 'wcme_domain'); ?></label>
			</p>
			

			<h4><?php _e('Select the WooCommerce Mails you want to have multiple recipients', 'wcme_domain'); ?></h4>
			<p> 
				<input name="wcme_settings[enable_new]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_new]" value="1"<?php checked( 1 == $wcme_options['enable_new'] ); ?> />
				<label class="description" for="wcme_settings[enable_new]"><?php _e('WooCommerce New Order Mail', 'wcme_domain'); ?></label>				
			</p>

			<p> 
				<input name="wcme_settings[enable_cancelled]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_cancelled]" value="1"<?php checked( 1 == $wcme_options['enable_cancelled'] ); ?> />
				<label class="description" for="wcme_settings[enable_cancelled]"><?php _e('WooCommerce Cancelled Order Mail', 'wcme_domain'); ?></label>				
			</p>

			<p> 
				<input name="wcme_settings[enable_processing]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_processing]" value="1"<?php checked( 1 == $wcme_options['enable_processing'] ); ?> />
				<label class="description" for="wcme_settings[enable_processing]"><?php _e('WooCommerce Processing Order Mail', 'wcme_domain'); ?></label>				
			</p>


			<p> 
				
				<input name="wcme_settings[enable_completed]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_completed]" value="1"<?php checked( 1 == $wcme_options['enable_completed'] ); ?> />
				<label class="description" for="wcme_settings[enable_completed]"><?php _e('WooCommerce Completed Order Mail', 'wcme_domain'); ?></label>				
			</p>


			<p> 
				
				<input name="wcme_settings[enable_invoice]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_invoice]" value="1"<?php checked( 1 == $wcme_options['enable_invoice'] ); ?> />
				<label class="description" for="wcme_settings[enable_invoice]"><?php _e('WooCommerce Order Invoice Mail', 'wcme_domain'); ?></label>				
			</p>



			<p> 
				
				<input name="wcme_settings[enable_refunded]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_refunded]" value="1"<?php checked( 1 == $wcme_options['enable_refunded'] ); ?> />
				<label class="description" for="wcme_settings[enable_refunded]"><?php _e('WooCommerce Refunded Order Mail', 'wcme_domain'); ?></label>				
			</p>
			
			<!-- Start WooCommerce Bookings Mails -->
			<p> 
				
				<input name="wcme_settings[enable_booking_cancelled]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_booking_cancelled]" value="1"<?php checked( isset ($wcme_options['enable_booking_cancelled']) ); ?> />
				<label class="description" for="wcme_settings[enable_booking_cancelled]"><?php _e('WooCommerce Bookings Cancelled Mail', 'wcme_domain'); ?></label>				
			</p>
			
			<p> 
			
				<input name="wcme_settings[enable_booking_confirmed]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_booking_confirmed]" value="1"<?php checked( isset( $wcme_options['enable_booking_confirmed'] ) ); 
					//checked( 1 == $wcme_options['enable_booking_confirmed'] ); ?> />
				<label class="description" for="wcme_settings[enable_booking_confirmed]"><?php _e('WooCommerce Bookings Confirmed Mail', 'wcme_domain'); ?></label>				
			</p>
			
			
			<p> 
				
				<input name="wcme_settings[enable_booking_notification]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_booking_notification]" value="1"<?php checked( isset( $wcme_options['enable_booking_notification'] )); ?> />
				<label class="description" for="wcme_settings[enable_booking_notification]"><?php _e('WooCommerce Bookings Manual Notification Mail', 'wcme_domain'); ?></label>				
			</p>
			
			
			<p> 
				
				<input name="wcme_settings[enable_booking_reminder]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_booking_reminder]" value="1"<?php checked( isset( $wcme_options['enable_booking_reminder'] )); ?> />
				<label class="description" for="wcme_settings[enable_booking_reminder]"><?php _e('WooCommerce Bookings Reminder Mail', 'wcme_domain'); ?></label>				
			</p>
			
			
			<p> 
				
				<input name="wcme_settings[enable_new_booking]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_new_booking]" value="1"<?php checked( isset ( $wcme_options['enable_new_booking'] )); ?> />
				<label class="description" for="wcme_settings[enable_new_booking]"><?php _e('WooCommerce Bookings New Booking Mail', 'wcme_domain'); ?></label>				
			</p>


		
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Options', 'wcme_domain'); ?>" />

			</p>
		
		</form>
		
	</div>
	<?php
	echo ob_get_clean();
}


