<h2>Knockaround Page</h2><hr>
<?php
include "login.inc.php";

$query = "SELECT commentid, comment, recipeid FROM comments ORDER BY recipeid DESC";
$result = mysqli_query($dbc, $query);
echo "<table cellpadding='0' border='0'>";
   while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
{

	$commentid = $row['commentid'];
	$recipeid = $row['recipeid'];
	$comment = $row['comment'];
	

	echo "<tr><th>Recipe:</th><td> $recipeid </td></tr>";
	echo "<tr style='border-bottom:1px solid #444;'><th>Comment #:</th><td> $commentid </td></tr>";
	echo "<tr><th></th><td>$comment</td></tr>";
	
}

echo "</table>";
echo "<a href='index.php'>Back</a>";
?>