<?php if ($gmlevel > 0) {?>
<div class="content">
      <div class="contentbox">
		<div class="contenttitle">Upload Form</div>
			<center>
				<form action="models/testupload.php" method="post" enctype="multipart/form-data">
					<input type="text" name="size" placeholder="File Size"><br>
					<input type="text" name="filename" placeholder="File Name"><br>
					<select name="type" style="width:250px; height:36px;">
						<option value="1">Addon</option>
						<option value="2">Patch</option>
					</select><br>
					<input type="file" name="file" id="file" /><br>
					<input type="submit" value="Upload File!" />
					<input type="hidden" name="startuploading" value="yes" />
				</form>
			</center>
      </div>
</div>
<?php
}
?>
<div class="content">
      <div class="contentbox">
		<div class="contenttitle">Patches</div>
			<center>
				<div class="table">
				<table>
					<tr style="color:#ce994b;">
						<th>File Size</th>
						<th>File Name</th>
						<th>Link</th>
						<th>Post Date</th>
						<th>Last Updated</th>
						<th>Uploaded By</th>
					</tr>
<?php
mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("htmltemplate");

$result = mysql_query("SELECT id, size, file, post_date, update_date, uploader, path FROM download WHERE type='1' ORDER BY id DESC");

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	echo "<tr><td>". $row[1]. "</td>
			<td>". $row[2]. "</td>
			<td><a href='$row[6]' target='_BLANK'>". $row[2]. "</a></td>
			<td>". $row[3]. "</td>
			<td>". $row[4]. "</td>
			<td>". $row[5]. "</td></tr>";
}

mysql_free_result($result);
?>
				</table>
				</div>
			</center>
      </div>
</div>
<div class="content">
      <div class="contentbox">
		<div class="contenttitle">Addons</div>
			<center>
				<div class="table">
				<table>
					<tr style="color:#ce994b;">
						<th>File Size</th>
						<th>File Name</th>
						<th>Link</th>
						<th>Post Date</th>
						<th>Last Updated</th>
						<th>Uploaded By</th>
					</tr>
<?php
mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("htmltemplate");

$result = mysql_query("SELECT id, size, file, post_date, update_date, uploader, path FROM download WHERE type='2' ORDER BY id DESC");

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	echo "<tr><td>". $row[1]. "</td>
			<td>". $row[2]. "</td>
			<td><a href='$row[6]' target='_BLANK'>". $row[2]. "</a></td>
			<td>". $row[3]. "</td>
			<td>". $row[4]. "</td>
			<td>". $row[5]. "</td></tr>";
}

mysql_free_result($result);
?>
				</table>
				</div>
			</center>
      </div>
</div>