<?php
require('../config/db_connect.php');
include('../config/acc_db.php');

function sha_password($user,$pass)
{
    $user = strtoupper($user);
    $pass = strtoupper($pass);
    return SHA1($user.':'.$pass);
}

if (isset($_POST['uname']) and isset($_POST['pass']))
{
if ($_POST['pass'] == $_POST['pass2'])
{
$username = $_POST['uname'];
$password = sha_password($username,$_POST['pass']);
$mail = $_POST['email'];

$query = "SELECT id FROM `account` WHERE username='$username'"; 

$result = mysql_query($query) or die(mysql_error()); 
$count = mysql_num_rows($result);

if ($count == 1)
	{
		echo "<p style='color:red;'>Username exists</p>";
	}
	else
	{ 
		$register = "INSERT INTO `account` (username, sha_pass_hash, email, reg_mail) VALUES ('$username', '$password', '$mail', '$mail')";
		$regi_result = mysql_query($register);
		header("Location: ../?p=register_success");
	}
}
else
{
	echo "<p style='color:red;'>Password missmatch</p>";
}
}