<?php
session_start();
$host = ($_POST['host']);
$dbuser = ($_POST['user']);
$dbpass = ($_POST['pass']);
$dbname = ($_POST['dbname']);
$chardb = ($_POST['char']);
$authdb = ($_POST['auth']);
$worlddb = ($_POST['world']);


$link = mysql_connect($host, $dbuser, $dbpass) or die( " Unable to connect to server ");

$query = "CREATE DATABASE IF NOT EXISTS $dbname;";
$query2 = "USE $dbname;";

$query3 = "CREATE TABLE IF NOT EXISTS download ( id int(11) NOT NULL AUTO_INCREMENT, size varchar(50) NOT NULL DEFAULT '0', file varchar(50) NOT NULL DEFAULT '0', path varchar(500) NOT NULL DEFAULT '0', uploader varchar(50) NOT NULL DEFAULT '0', post_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, update_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, type smallint(6) NOT NULL, PRIMARY KEY (id))";

if (mysql_query($query)) 
{
 echo "Database <b>$dbname</b> created successfully <br />";
} 
else 
{
 echo "Error in creating database: <br /><br />". mysql_error ();
}

if (mysql_query($query2)) 
{
 echo "Using $dbname <br />";
} 
else 
{
 echo "Cannot use $dbname: <br /><br />". mysql_error ();
}

if (mysql_query($query3)) 
{
 echo "Table download created successfully <br />";
} 
else 
{
 echo "Error in creating table: <br /><br />". mysql_error ();
}

$_SESSION["host"] = "$host";
$_SESSION["user"] = "$dbuser";
$_SESSION["pass"] = "$dbpass";
$_SESSION["dbname"] = "$dbname";
$_SESSION["chardb"] = "$chardb";
$_SESSION["authdb"] = "$authdb";
$_SESSION["worlddb"] = "$worlddb";
header('location: ../userinsert.php')
?>