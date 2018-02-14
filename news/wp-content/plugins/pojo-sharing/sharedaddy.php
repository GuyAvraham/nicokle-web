<?php

/*
 * Plugin Name: Pojo Sharing
 * Plugin URI: http://www.pojo.me/
 * Description: Share content with Facebook, Twitter, and many more.
 * Author: Anas H. Sulaiman, Pojo
 * Version: 2.5.3
 * Author URI: http://pojo.me/
 * Text Domain: pojo-sharing
 * Domain Path: /languages/
 * License: GPL2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Module Name: Sharing
 * Module Description: The most super duper sharing tool on the interwebs. Share content with Facebook, Twitter, and many more.
 * Sort Order: 5
 * First Introduced: 1.1
 * Major Changes In: 1.2
 * Requires Connection: No
 * Auto Activate: Yes
 */

define( 'POJO_SHARING__FILE__', __FILE__ );

if ( !function_exists( 'sharing_init' ) )
	include dirname( __FILE__ ).'/sharedaddy/sharedaddy.php';


add_action( 'plugins_loaded', 'sharing_load_textdomain' ); // Edited by Anas H. Sulaiman
function sharing_load_textdomain() {
	load_plugin_textdomain( 'pojo-sharing', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
} // Edited by Anas H. Sulaiman

/*
* Edits are denoted by the comment: Edited by Anas H. Sulaiman.
* Other edits are listed here:
* Edit 1: 
*/
