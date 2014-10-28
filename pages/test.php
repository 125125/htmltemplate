<div class="content">
      <div class="contentbox">
        <p><center>
				<form action="models/test.php" method="post" autocomplete="off">
					<input type="text" name="title" placeholder="title"><br>
					<input type="text" name="content" placeholder="Message"><br>
					<input type="submit" value="POST !">
				</form>
			</center>
		</p>
      </div>
</div>
<div class="content">
      <div class="contentbox">
        <p><center>
				<table>
					<tr>
						<th>title</th>
						<th>content</th>
						<th>posted by</th>
					</tr>
<?php
mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("htmltemplate");

$result = mysql_query("SELECT id, title, content, posted_by FROM test ORDER BY id DESC");

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	echo "<tr><td>". $row[1]. "</td>
			<td>". $row[2]. "</td>
			<td>". $row[3]. "</td></tr>";
}

mysql_free_result($result);
?>
				</table>
			</center>
		</p>
      </div>
</div>