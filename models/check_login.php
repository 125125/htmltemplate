<?php
session_start();
include('../config/acc_db.php');

function sha_password($user,$pass)
{
    $user = strtoupper($user);
    $pass = strtoupper($pass);
    return SHA1($user.':'.$pass);
}

if (isset($_POST['uname']) and isset($_POST['pass'])){

$username = $_POST['uname'];
$password = sha_password($username,$_POST['pass']);

$query = "SELECT * FROM `account` WHERE username='$username' and sha_pass_hash='$password'";

$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);

if ($count == 1){
$_SESSION['username'] = $username;
header("Location: ../index.php");
}else{
header("Location: ../error.php");
}
}