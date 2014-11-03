<?php
include('db_install.php');

// Create connection
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS download (
  id int(11) NOT NULL AUTO_INCREMENT,
  size varchar(50) NOT NULL DEFAULT '0',
  file varchar(50) NOT NULL DEFAULT '0',
  path varchar(500) NOT NULL DEFAULT '0',
  uploader varchar(50) NOT NULL DEFAULT '0',
  post_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  update_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  type smallint(6) NOT NULL,
  PRIMARY KEY (id)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
header('location: table_install.php');
?>