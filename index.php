<?php
	//make sure php version >= 5.4 & all required folders exists.
	//app environment: 'development','testing','production' is recommanded.
	define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');
	//error reporting
	if(ENVIRONMENT=='development'){
		error_reporting(-1);
		ini_set('display_errors', 1);
	}else{
		ini_set('display_errors', 0);
		error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
	}
	// Set the current directory correctly for CLI requests
	if (defined('STDIN')){
		chdir(dirname(__FILE__));
	}
	//notice: there is important,make sure no error
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
	define('BASEPATH', str_replace('\\', '/', realpath('system').'/'));
	define('FCPATH', dirname(__FILE__).'/');
	define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));
	define('APPPATH', realpath('application').'/');
	define('VIEWPATH', APPPATH.'views/');
	define('BASEURL', '/ff/');
require_once BASEPATH.'core/CodeIgniter.php';
