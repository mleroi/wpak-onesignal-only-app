<?php
/*
  Plugin Name: WP-AppKit - OneSignal Only For App
  Description: Send OneSignal notifications only to your mobile app, not to your website.
  Author: Uncategorized Creations
  Author URI:  http://getwpappkit.com
  Version: 1.0.0
*/

add_filter( 'do_send_notification', '__return_false' );
