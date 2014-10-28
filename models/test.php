<?php
require_once '../models/check_login.php';
$con=mysqli_connect("localhost","root","","htmltemplate");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$title = mysqli_real_escape_string($con, $_POST['title']);
$content = mysqli_real_escape_string($con, $_POST['content']);

$sql="INSERT INTO test (title, content, posted_by)
VALUES ('$title', '$content', '".$_SESSION['username']."')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
header('Location: ../?p=test');

mysqli_close($con);
?>