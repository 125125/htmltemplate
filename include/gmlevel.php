<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auth";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT gmlevel FROM account_access WHERE id =(SELECT id FROM account WHERE username = '" . $_SESSION['username'] . "'); ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	$gmlevel = $row['gmlevel'];
        echo "";
    }
} else {
    echo "";
}
$conn->close();
?>