<?php
session_start();
@include('../install/config/db_connect.php');
$host = $_SESSION['host'];
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
$webdb =  $_SESSION['dbname'];
$accdb =  $_SESSION['authdb'];
$chardb =  $_SESSION['chardb'];
?>