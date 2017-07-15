<?php
include "login.inc.php";

$recipeid = $_GET['id'];
$query = "SELECT title, poster, shortdesc, ingredients, directions FROM recipes WHERE recipeid = $recipeid";
$result = mysqli_query($dbc, $query) or die ('<h2 class="error">No records retrieved</h2>');
	$row= mysqli_fetch_array($result, MYSQLI_ASSOC);
	$title = $row['title'];
	$poster = $row['poster'];
	$shortdesc = $row['shortdesc'];
	$ingredients = $row['ingredients'];
	$directions = $row['directions'];

	$ingredients = nl2br($ingredients);
	$directions = nl2br($directions);

	echo "<h2>$title</h2><hr>";
	echo "by $poster<br><br>";
	echo "$shortdesc <br><br>";
	echo "<h3>Ingredients</h3>";
	echo "$ingredients<br><br>";
	echo "<h3>Directions</h3>";
	echo "$directions<br><br>";

$query = "SELECT count(commentid) FROM comments WHERE recipeid = $recipeid";
$result = mysqli_query($dbc, $query);
$row = mysqli_fetch_array($result);

if ($row[0] == 0){
	echo "No comments posted yet &nbsp; &nbsp; &nbsp; &nbsp;";
	echo "<a href='index.php?content=newcomment&id=$recipeid'>Add a comment</a>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; <a href='print.php?id=$recipeid' target='_blank'>Print Recipe</a>";
	echo "<hr>";

}else{
	echo $row[0]."&nbsp; comments posted. &nbsp; &nbsp; &nbsp;";
	echo "<a href='index.php?content=newcomment&id=$recipeid'>Add a comment</a>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; <a href='print.php?id=$recipeid' target='_blank'>Print recipe</a>";
	echo "<hr>";
	echo "<h3>Comments</h3>";

	$query = "SELECT date, poster, comment FROM comments WHERE recipeid = $recipeid ORDER BY commentid desc";
	$result = mysqli_query($dbc, $query) or die('could not retrieve comments');
	while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$date = $row['date'];
		$poster = $row['poster'];
		$comment = $row['comment'];
		$comment = nl2br($comment);
		echo "$date - posted by $poster<br>";
		echo "$comment";
		echo "<br><br>";
	}
}



?>