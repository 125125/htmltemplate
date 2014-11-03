<?php
require('../config/db_connect.php');
include('../config/acc_db.php');

function sha_password($dbuser,$dbpass)
{
    $dbuser = strtoupper($dbuser);
    $dbpass = strtoupper($dbpass);
    return SHA1($dbuser.':'.$dbpass);
}

if (isset($_POST['uname']) and isset($_POST['pass']))
{
if ($_POST['pass'] == $_POST['pass2'])
{
$username = $_POST['uname'];
$password = sha_password($username,$_POST['pass']);
$mail = $_POST['email'];
$level = $_POST['gmlevel'];
$realm = $_POST['realm'];

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
		$setgm = "INSERT INTO account_access (id, gmlevel, RealmID) VALUES ((SELECT id FROM `account` WHERE username='$username'), '$level', '$realm')";
		$regi_result = mysql_query($register);
		$regi_result2 = mysql_query($setgm);
		header('location: ../index.php');
	}
}
else
{
	echo "<p style='color:red;'>Password missmatch</p>";
}
}
