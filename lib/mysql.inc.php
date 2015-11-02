<?php
require(dirname(__FILE__).'/framework.config.php');
mysql_connect(HOST, USER, PASS);
mysql_select_db(DBNAME);