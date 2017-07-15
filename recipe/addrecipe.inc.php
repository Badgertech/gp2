<?php
$title = $_POST['title'];
$poster = $_POST['poster'];
$shortdesc = $_POST['shortdesc'];
$ingredients = $_POST['ingredients'];
$directions = $_POST['directions'];

$ingredients = htmlspecialchars($ingredients);
$directions = htmlspecialchars($directions);

if (trim($poster)== "")
{
	echo "<h2>Sorry, each recipe must have a poster</h2><hr>";

}
else
{
	include "login.inc.php";

	$query = "INSERT INTO recipes (title,poster, shortdesc, ingredients, directions) VALUES ('$title', '$poster', '$shortdesc', '$ingredients', '$directions')";
	$result = mysqli_query($dbc, $query);
	if($result){
		echo "<h2>Recipe Posted</h2><hr>";
		echo "<a href='index.php'>Home</a> &nbsp;&nbsp;&nbsp; | &nbsp; &nbsp; &nbsp; <a href='index.php?content=newrecipe'>Post Another Recipe</a><br>";
	}
	else{
		echo "<h2>Sorry, recipe not posted</h2><br>";
		echo "<a href='index.php'>Home</a>";
	}
}








?>