<?php
include('db_connect.php');

$connection = mysql_connect($host, $dbuser, $dbpass, $authdb);
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}

$select_db = mysql_select_db($authdb);
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}