<?php
date_default_timezone_set('Asia/Jakarta');

$user=getenv('DB_USER') ?: "root";
$password=getenv('DB_PASSWORD') ?: "root";
$host=getenv('DB_HOST') ?: "db";

$db=getenv('DB_NAME') ?: "siakad";
mysql_connect($host,$user,$password);
mysql_select_db($db);

?>