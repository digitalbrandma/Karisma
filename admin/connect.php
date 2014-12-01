<?php
//Connect to MySQL
$mysqlconnect = mysql_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die ('Error: '.mysql_error ());
if (!$mysqlconnect ) { die('Could not connect: ' . mysql_error());}
mysql_select_db(DB_NAME, $mysqlconnect ); 

?>