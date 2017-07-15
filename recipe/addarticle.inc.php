<?php
include "login.inc.php";
$date = date("Y-m-d");
$title = addslashes(htmlspecialchars_decode($_POST['title']));
$article = addslashes(htmlspecialchars_decode($_POST['article']));


$query = "INSERT INTO news (date, title, article) VALUES ('$date', '$title', '$article')";
$result = mysqli_query($dbc, $query);
if($result){
	echo "<h2>Your article was submitted</h2><hr>";
	echo "<a href='index.php'>Home</a>";}
else{
	echo "<h2>Unable to submit article at this time.</h2><hr>";
	echo "<a href='index.php'>Home</a>";

}
?>