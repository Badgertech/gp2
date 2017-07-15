<h2>All the News you can Chew</h2><hr>
<small>The latest cooking news</small><br>
<?php
include "login.inc.php";
$query = "SELECT title, date, article FROM news ORDER BY date DESC LIMIT 0,2";
$result = mysqli_query($dbc, $query) or die ('Sorry, no news today<br>');
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$date = $row['date'];
	$title = $row['title'];
	$article = $row['article'];

	echo "<b>$title</b><br><small>$date</small><br>";
	echo "<p>$article</p>";
}
?>