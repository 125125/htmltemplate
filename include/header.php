<?php
  session_start();
include('/config/vars.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="./js/jquery-1.2.6.min.js"></script>
	<script type="text/javascript" src="./js/SidePanel.js"></script>
	<script type="text/javascript">
function slideSwitch() {
  var $active = $('#slideshow IMG.active');
	
if ( $active.length == 0 ) $active = $('#slideshow IMG:last');
	
var $next =  $active.next().length ? $active.next()
  : $('#slideshow IMG:first');
	
$active.addClass('last-active');
	
$next.css({opacity: 0.0})
  .addClass('active')
  .animate({opacity: 1.0}, 1000, function() {
$active.removeClass('active last-active');
});
}
	
$(function() {
  setInterval( "slideSwitch()", 10000 );/* 1000 = 1 second */
});
  </script>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <title><?php echo $title ?></title>
  </head>
  <body>
  <div class="navbg">
      <div class="nav">
        <ul>
          <div class="navlogo"><a href="?p=index"></a></div>
          <li class="menu" id="menu-armory"><a id="armory" href="?p=armory"></a></li>
          <li class="menu" id="menu-social"><a id="social" href="?p=social"></a></li>
          <li class="menu" id="menu-store"><a id="store" href="?p=store"></a></li>
          <li class="menu" id="menu-support"><a id="support" href="?p=support"></a></li>
        </ul>
      </div>
    </div>
  <div class="wrapper">