<h2 align="center">Recipe Central</h2><hr>
<?php 
	include "login.inc.php";

$query = "SELECT recipeid, title, poster, shortdesc FROM recipes ORDER BY recipeid DESC limit 0,5";
	$result = mysqli_query($dbc, $query) or die ('<h2 class="error">Unable to retrieve recipes</h2>');

	if(mysqli_num_rows($result) == 0)
	{
		echo "<h3>Sorry, there are no recipes posted at this time. Try back later</h3>";
	}else{
		while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			$recipeid = $row['recipeid'];
			$title = $row['title'];
			$poster = $row['poster'];
			$shortdesc = $row['shortdesc'];

			
			echo "<h5><a href='index.php?content=showrecipe&id=$recipeid'>$title</a><br><small>submitted by: $poster</small></h5>";
			echo "$shortdesc <br>";

		}
	}

?>