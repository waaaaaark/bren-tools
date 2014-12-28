<?php
/**
 *	Bren-tools 2014
 *
 *	@package	Bren-tools
 *	@author		Brendan Falsetto
 *	
 */

loadConfig();

function loadConfig()
{

	$config = array(
		'db',
		'error',
		'session',
		'cookie'
	);
	
	$config['db'] = array(
		'dbhost'	=>	'',
		'dbname'	=>	'',
		'dbuser'	=>	'',
		'dbpass'	=>	''
	);
	
}