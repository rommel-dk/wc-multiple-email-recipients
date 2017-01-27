<?php
/*
Plugin Name: WC Multiple Email Recipients 
Plugin URI: http://conschneider.de/plugin-woocommerce-multiple-email-recipients/
Description: Allows for multiple recipients for WooCommerce E-Mails
Author: Con Schneider
Author URI: http://conschneider.de/
Version: 1.1
*/

//first oop
// then WooCommerce Subscriptions
// then cpt

if(!class_exists('wcme_MultipleEmail'))
{
	class wcme_MultipleEmail 
	{
		public function __construct()
		{	
			public $wcme_options = get_option('wcme_settings');
			$plugin = plugin_basename(__FILE__);
			
			add_filter("plugin_action_links_$plugin", array( $this, 'plugin_settings_link' ));
			
			require_once(sprintf("%s/includes/admin/admin-settings.php", dirname(__FILE__)));
            $settings = new CustomPlugin_Settings(plugin_basename(__FILE__));
            
            include('includes/functions.php'); // display functions
			include('includes/admin-page.php');
            
            
		}
	
		function plugin_settings_link($links)
		{
			$settings_link = '<a href="options-general.php?page=wp_plugin_template">Settings</a>';
			array_unshift($links, $settings_link);
			return $links;
		}
	
	}

}


