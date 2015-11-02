<?php
// YOUR DATABASE CONFIG
define('HOST',		'localhost');
define('USER',		'root');
define('PASS',		'');
define('DBNAME',	'panel');

// encription salt
define('SALT',		'&*^85sA5a$68#d*hh3s_t');

// how many times can a user enter his credentials
define('MAXLOGINTRIES', 5);

// use for HTTP
define('BASE_URL', '/admin_panel/');

// can login more than one user in the same time
define('MULTILOGIN', false);

// define imagick path (not needed)
# define('IMAGICKPATH', 'c:\path\imagemagick\convert.exe');