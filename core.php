<?php
/**
 *	Bren-tools 2014
 *
 *	@package	Bren-tools
 *	@author		Brendan Falsetto
 *	
 *	This is the bootstrapping file
 */
 
// path to this file 
define('ABSPATH', dirname(__FILE__) . '/');
// BT TOOLS defined or not
define('BTTOOLS', true);

if(file_exists(ABSPATH . 'inc/config.php' ))
{
	require ABSPATH . 'inc/config.php';
} else 
{
	// no config file found
	$btError
	
}