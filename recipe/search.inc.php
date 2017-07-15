<?php
include "login.inc.php";

$search = $_GET['searchFor'];
$words = explode(" ", $search);
$phrase = implode("%' AND title LIKE '%", $words);
$query = "SELECT recipeid, title, shortdesc from recipes where title like '%$phrase%'";
$result = mysqli_query($dbc, $query) or die('Could not query database at this time');
echo "<h2>Search Results</h2><hr>";
if (mysqli_num_rows($result) == 0)
{
	echo "<h2>Sorry, no recipes were found with '$search' in them.</h2><hr>";
}else{
	while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$recipeid = $row['recipeid'];
		$title = $row['title'];
		$shortdesc = $row['shortdesc'];
		echo "<a href='index.php?content=showrecipe&id=$recipeid'>$title</a><br>";
		echo "$shortdesc<br><br>";
	}
}



?>