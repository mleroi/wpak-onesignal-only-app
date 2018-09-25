<?php
/*
  Plugin Name: WP-AppKit - OneSignal Only For App
  Description: Send OneSignal notifications only to your mobile app, not to your website.
  Author: Uncategorized Creations
  Author URI:  http://getwpappkit.com
  Version: 1.0.0
*/

add_filter( 'onesignal_send_notification', 'wpak_onesignal_only_app_bypass_default_push' );

function wpak_onesignal_only_app_bypass_default_push( $fields ) {
	$onesignal_wp_settings = OneSignal::get_onesignal_settings();
	if ($onesignal_wp_settings['send_to_mobile_platforms'] == true) {
		$fields['do_send_notification'] = false;
	}
	return $fields;
}


