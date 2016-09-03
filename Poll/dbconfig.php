<?php
// Fill in DATABASENAME, USERNAME, and PASSWORD with the appropriate details.

$dbhost = 'localhost';
$dbname = 'DATABASENAME';
$dbuser = 'USERNAME';
$dbpass = 'PASSWORD';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname, $conn);

?>