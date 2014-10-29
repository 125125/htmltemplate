<?php 
print_r($_FILES);
if (isset($_POST['startuploading'])) {
	
	if ($_POST['startuploading'] == 'yes') {
		
		$filename =$_FILES['file']["name"];

		if($_FILES["file"]["size"] < 2223550000000) {
			
			$ext = end(explode('.', $filename));
			echo $ext;
			echo 'hello';
			if ($ext = 'rar' || $ext = 'zip') {

					if ($_FILES["file"]["error"] > 0) {
						echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
					}
					
					else {
   						echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    					echo "Type: " . $_FILES["file"]["type"] . "<br />";
    					echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    					echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    					if (file_exists("../files/" . $_FILES["file"]["name"]))
      					{
      						echo $_FILES["file"]["name"] . " already exists. ";
      					}
						
    					else {
							move_uploaded_file($_FILES["file"]["tmp_name"], "../files/" . $_FILES["file"]["name"]);
							header ("location: ../?p=success");
						}
    				}

			}
			else {
				echo "Invalid File Format";
  			}
		}
		else {
			echo "File size too large";
  		}
	}
}
?>
<?php
require_once '../models/check_login.php';
$con=mysqli_connect("localhost","root","","htmltemplate");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$size = mysqli_real_escape_string($con, $_POST['size']);
$file = mysqli_real_escape_string($con, $_POST['filename']);
$url = mysqli_real_escape_string($con, $_POST['url']);
$type = mysqli_real_escape_string($con, $_POST['type']);

$sql="INSERT INTO download (size, file, uploader, path, type)
VALUES ('$size', '$file', '".$_SESSION['username']."', '../htmltemplate/files/" . $filename . "', '$type')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
header('Location: ../?p=download');

mysqli_close($con);
?>