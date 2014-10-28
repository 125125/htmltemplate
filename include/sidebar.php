<div class="panel">
  <center><p><h3>MyServerNameTitle</h3</p><br>
    <i>a webdesign coded by <font>Tim Levinsson</font></i></center>
    <hr>
	<?php
		if ($_SESSION['username'] == ""){
			echo '<center><b>You are offline</b></center>';
		}else{
			echo "<center><b>Welcome: <font>"	.	$_SESSION["username"]	. "</font></b></center>";
		}
	?>
      <ul>
        <li><a href="?p=index">Home</a></li>
        <li><a href="/forum">Forum</a></li>
        <li><a href="?p=connect">Connection Guide</a></li>
		<li><a href="?p=download">Download</a></li>
		<li><a href="?p=test">PhP Tests</a></li>
		<?php
		if ($_SESSION['username'] == ""){
		?>
        <li><a href="?p=login">Login</a></li>
		<li><a href="?p=register">register</a></li>
		<?php
		}else{ 
		?>
        <li><a href="?p=logout">Logout</a></li>
		<li><a href="?p=donate">Donate</a></li>
        <li><a href="?p=vote">Vote</a></li>
		<li><a href="?p=ucp">User Panel</a></li>
		<?php
		} 
		?>
      </ul>
    </div>
      <a href="" class="slider-arrow show">&raquo;</a>
      <a href="javascript:void(0);" class="slider-arrow show">&raquo;</a>