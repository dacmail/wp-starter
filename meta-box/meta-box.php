<?php
/**
 * Version: 4.9.6
 */

if ( defined( 'ABSPATH' ) && ! defined( 'RWMB_VER' ) )
{
	require_once dirname( __FILE__ ) . '/inc/loader.php';
	$loader = new RWMB_Loader;
	$loader->init();
}
