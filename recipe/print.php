<!DOCTYPE html>
<html>
<head>
<link href="css/print.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include "login.inc.php";
$recipeid = $_GET['id'];
$query = "SELECT title, poster, shortdesc, ingredients, directions FROM recipes WHERE recipeid = $recipeid";
$result = mysqli_query($dbc, $query) or die ('recipe not found');
$row = mysqli_fetch_array($result, MYSQLI_ASSOC) or die ('no records retrieved');
$title = $row['title'];
$poster = $row['poster'];
$shortdesc = $row['shortdesc'];
$ingredients = $row['ingredients'];
$directions = $row['directions'];

$ingredients = nl2br($ingredients);
$directions = nl2br($directions);
echo "<h2>$title</h2>";
echo "posted by $poster<br>";
echo "$shortdesc<br>";
echo "<h3>Ingredients</h3>";
echo "$ingredients";
echo "<h3>Directions</h3>";
echo "$directions .";
?>


</body>
</html>