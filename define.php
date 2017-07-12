<?php
/**
 * Define stuff for EM Dashboard
 */

/**
 * Minified files call.
 *
 * @since 1.0.5
 */
if ( !defined( 'EM_STYLES_SUFFIX') )
	define( 'EM_STYLES_SUFFIX', defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min' );

 /**
  * Plugin em-dashboard.css location
  *
  * @since 1.0.0
  */
if ( !defined( 'EM_ADMIN_STYLE' ) )
	define ( 'EM_ADMIN_STYLE', plugins_url('/lib/space-grey/colors' . EM_STYLES_SUFFIX . '.css', __FILE__) );

/**
 * Plugin em-dashboard.css RTL location
 *
 * @since 1.0.0
 */
if ( !defined( 'EM_ADMIN_STYLE_RTL' ) )
	define ( 'EM_ADMIN_STYLE_RTL', plugins_url('/lib/space-grey/colors-rtl' . EM_STYLES_SUFFIX . '.css', __FILE__) );

/**
 * Plugin em-dashboard.js location
 *
 * @since 1.0.0
 */
if ( !defined( 'EM_ADMIN_SCRIPT' ) )
	define ( 'EM_ADMIN_SCRIPT', plugins_url('/lib/js/em-dashboard' . EM_STYLES_SUFFIX . '.js', __FILE__) );

/**
* Plugin em-button.css location
*
* @since 1.0.0
*/
if ( !defined( 'EM_ADMIN_BUTTON' ) )
	define ( 'EM_ADMIN_BUTTON', plugins_url('/lib/css/em-button' . EM_STYLES_SUFFIX . '.css', __FILE__) );

/**
* Plugin em-button.css RTL location
*
* @since 1.0.0
*/
if ( !defined( 'EM_ADMIN_BUTTON_RTL' ) )
	define ( 'EM_ADMIN_BUTTON_RTL', plugins_url('/lib/css/em-button-rtl' . EM_STYLES_SUFFIX . '.css', __FILE__) );

/**
 * @todo combined styles?
 */
