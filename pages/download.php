<div class="content">
      <div class="contentbox">
			<center>
				<form action="models/download.php" method="post" autocomplete="off">
					<input type="text" name="size" placeholder="File Size"><br>
					<input type="text" name="filename" placeholder="File Name"><br>
					<input type="text" name="url" placeholder="Link"><br>
					<input type="submit" value="POST !">
				</form>
			</center>
      </div>
</div>
<div class="content">
      <div class="contentbox">
			<center>
				<div class="table">
				<table>
					<tr>
						<th>File Size</th>
						<th>File Name</th>
						<th>URL</th>
						<th>Post Date</th>
						<th>Last Updated</th>
						<th>Uploaded By</th>
					</tr>
<?php
mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("htmltemplate");

$result = mysql_query("SELECT id, size, file, url, post_date, update_date, uploader FROM download ORDER BY id DESC");

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	echo "<tr><td>". $row[1]. "</td>
			<td>". $row[2]. "</td>
			<td><a href='$row[3]' target='_BLANK'>". $row[3]. "</a></td>
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