<?php
session_start();
$host = ($_POST['host']); /* Undefined */
$dbuser = ($_POST['user']); /* Undefined */
$dbpass = ($_POST['pass']); /* Undefined */
$dbname = ( $_POST['dbname']); /* Undefined */
$chardb = ($_POST['char']);
$authdb = ($_POST['auth']);
$worlddb = ($_POST['world']);


$link = mysql_connect($host, $dbuser, $dbpass) or die( " Unable to connect to server ");

$query = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysql_query($query)) 
{
 echo "Database <b>$dbname</b> created successfully <br />";
} 
else 
{
 echo "Error in creating database: <br /><br />". mysql_error ();
}

// Set session variables
$_SESSION["host"] = "$host";
$_SESSION["user"] = "$dbuser";
$_SESSION["pass"] = "$dbpass";
$_SESSION["dbname"] = "$dbname";
$_SESSION["chardb"] = "$chardb";
$_SESSION["authdb"] = "$authdb";
$_SESSION["worlddb"] = "$worlddb";

echo "Session variables are set.";

?>