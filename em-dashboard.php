<?php
/**
 * Plugin Name: EM Dashboard
 * Plugin URI: https://wordpress.org/plugins/em-dashboard/
 * Description: Redesigned wp-admin screen with easy mode activation to go back to basics.
 * Version: 1.0.8
 * Author: Sybre Waaijer
 * Author URI: https://cyberwire.nl/
 * Text Domain: em-dashboard
 * Domain Path: /language
 */

/**
 * CDN Cache buster.
 * Not many caching plugins use CDN in dashboard. What a shame.
 *
 * @since 1.0.0
 */
if ( !defined( 'EM_PLUGIN_VER' ) )
	define ( 'EM_PLUGIN_VER', '1.0.8' );

/**
 * Le plugin map absolute.
 * Used for calling browser files.
 * Needs refining, do not redefine unless you're absolutely sure what you're doing.
 *
 * @since 1.0.0
 */
if ( !defined( 'EM_DASHBOARD_BASEDIR' ) )
	define( 'EM_DASHBOARD_BASEDIR', plugin_dir_url( __FILE__ ) );

/**
 * Le plugin map relative.
 * Used for calling php files.
 * Needs refining, do not redefine unless you're absolutely sure what you're doing.
 *
 * @since 1.0.0
 */
if ( !defined( 'EM_DASHBOARD_LOCALDIR' ) )
	define( 'EM_DASHBOARD_LOCALDIR', plugin_dir_path( __FILE__ ) );

/**
 * Plugin locale 'em-dashboard'
 *
 * File located in plugin folder em-dashboard/language/
 *
 * @since 1.0.0
 *
 * @uses EM_DASHBOARD_BASEDIR
 * @return void
 */
function em_dashboard_locale() {
	load_plugin_textdomain( 'em-dashboard', false, EM_DASHBOARD_BASEDIR . '/language/');
}
add_action('plugins_loaded', 'em_dashboard_locale');

/**
 * Load plugin files
 *
 * @since 1.0.0
 *
 * @uses EM_DASHBOARD_DIR
 */
require_once( EM_DASHBOARD_LOCALDIR . '/load.class.php' );
