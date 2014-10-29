<?php if ($gmlevel > 0) {?>
<div class="content">
      <div class="contentbox">
			<center>
				<form action="models/testupload.php" method="post" enctype="multipart/form-data">
					<input type="text" name="size" placeholder="File Size"><br>
					<input type="text" name="filename" placeholder="File Name"><br>
					<input type="hidden" name="url" placeholder="Link"><br>
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
			<center>
				<div class="table">
				<table>
					<tr>
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

$result = mysql_query("SELECT id, size, file, url, post_date, update_date, uploader, path FROM download ORDER BY id DESC");

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	echo "<tr><td>". $row[1]. "</td>
			<td>". $row[2]. "</td>
			<td><a href='$row[7]' target='_BLANK'>". $row[2]. "</a></td>
			<td>". $row[4]. "</td>
			<td>". $row[5]. "</td>
			<td>". $row[6]. "</td></tr>";
}

mysql_free_result($result);
?>
				</table>
				</div>
			</center>
      </div>
</div>