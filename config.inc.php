<?php

// database config
error_reporting(E_ALL);

// we need session
session_start();

//The configurations
require_once (dirname(__FILE__)."/lib/framework.config.php");

// require classes
require dirname(__FILE__).'/lib/class.db.inc.php';
require dirname(__FILE__).'/lib/class.lang.inc.php';
require dirname(__FILE__).'/lib/class.user.inc.php';
require dirname(__FILE__).'/lib/class.admin.inc.php';

// set current language (default is EN)
if(!isset($_SESSION['LANGUAGE_CURRENT'])) {
	$_SESSION['LANGUAGE_CURRENT'] = 'en';
}

if(false == is_file(dirname(__FILE__).'/install.php')) {
	// get LANG object with new language
	$LANG = new lang( isset($_GET['lang'])?$_GET['lang']:'', BASE_URL );
}

