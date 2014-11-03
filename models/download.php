<?php
require_once '../models/check_login.php';
include '../install/config/db_install.php';
$con=mysqli_connect("$host","$dbuser","$dbpass","$dbname");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$size = mysqli_real_escape_string($con, $_POST['size']);
$file = mysqli_real_escape_string($con, $_POST['filename']);
$url = mysqli_real_escape_string($con, $_POST['url']);
$type = mysqli_real_escape_string($con, $_POST['type']);

$sql="INSERT INTO download (size, file, url, uploader)
VALUES ('$size', '$file', '$url', '".$_SESSION['username']."', '$type')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
header('Location: ../?p=download');

mysqli_close($con);
?>