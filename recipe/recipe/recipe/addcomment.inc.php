<?php
$recipeid = addslashes($_POST['recipeid']);
$poster = addslashes($_POST['poster']);
$comment = addslashes(htmlspecialchars_decode($_POST['comment']));
$date = date("Y-m-d");

include "login.inc.php";

$query = "INSERT INTO comments (date, poster, recipeid, comment) VALUES ('$date', '$poster', '$recipeid', '$comment')";

$result = mysqli_query($dbc, $query) or die ('comment not posted');

if($result)
	echo "<h2 class='success'> Comment posted</h2><hr>";
else
	echo "<h2 class='error'> Unable to post your comment at this time</h2><hr>";
echo "<a href='index.php?content=showrecipe&id=$recipeid'>Return to recipe</a>";
?>