<?php 
  session_start();
  if ($_SESSION['username'] == "")
  {
    header("Location: ./login.php");
  }else{
  }
  @include('config/vars.php');
?>
<html>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <meta charset="UTF-8">
  <meta name="description" content="Web Design">
  <meta name="author" content="Nirelz">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" type="image/png" href="images/favicon.ico">
</head>
<body>
  <div id="top">
    <a href="">Dashboard</a>
    <a href="">User Panel</a>
      <div id="right">
        <a href="models/logout.php">Logout</a>
        <a href="">Settings</a>
        <p><?php echo "Hello, <b>" . $_SESSION['username'] . "</b>" ?></p>
      </div>
  </div>