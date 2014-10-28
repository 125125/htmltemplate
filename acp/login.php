<?php
  @include('config/vars.php');
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Web Design">
  <meta name="author" content="Nirelz">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" type="text/css" href="login-style.css">
  <link rel="icon" type="image/png" href="images/favicon.ico">
</head>
<body><center>
  <div id="login-bg">
    <div id="logo"></div>
    <div id="avatar"></div>
    <form action="models/check_login.php" method="POST">
      <input type="text" id="user" name="username" value="Username" required onblur="if (this.value == '') {this.value = 'Username';}"
 onfocus="if (this.value == 'Username') {this.value = '';}" /><br /><br />
      <input type="password" id="pass" name="password" placeholder="Password" required /><br />
      <input type="submit" id="submit" value="" />
    </form>
  </div>