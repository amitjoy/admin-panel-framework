<title>Benchmark Code | <?=$_GET["page"]?></title>
<?php
require_once "lib/explore.php";
$page = $_GET["page"];
if(!$page)
die("Please select a valid section");
require_once $page.".inc.php";
explore(get_object_vars($a));
