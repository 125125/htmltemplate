<?php 
@include('../config/db_connect.php');

$ahost = "$host"; /* Undefined */
$adbuser = "$dbuser"; /* Undefined */
$adbpass = "$dbpass"; /* Undefined */
$adbname = "$dbname"; /* Undefined */

$con=mysqli_connect("$ahost","$adbuser","$adbpass","$adbname");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$host = mysqli_real_escape_string($con, $_POST['host']); /* Undefined */
$dbuser = mysqli_real_escape_string($con, $_POST['user']); /* Undefined */
$dbpass = mysqli_real_escape_string($con, $_POST['pass']); /* Undefined */
$dbname = mysqli_real_escape_string($con, $_POST['dbname']); /* Undefined */
$chardb = mysqli_real_escape_string($con, $_POST['char']);
$authdb = mysqli_real_escape_string($con, $_POST['auth']);
$worlddb = mysqli_real_escape_string($con, $_POST['world']);

$sql="CREATE TABLE IF NOT EXISTS $dbname (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(50) NOT NULL DEFAULT '0',
  `file` varchar(50) NOT NULL DEFAULT '0',
  `path` varchar(500) NOT NULL DEFAULT '0',
  `uploader` varchar(50) NOT NULL DEFAULT '0',
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

mysqli_close($con);
?>