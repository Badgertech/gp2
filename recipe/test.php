<!doctype html>
<html>
<head>
<title>This is a dynamic page</title>
<style>
body{
	width:100%;
	margin:0px;
	background-color:#444;
	background-image:url(../images/CarbonFiber.jpg);
	background-repeat:repeat-x;
}
#wrapper{
	background-color:white;
	max-width: 900px;
    margin: auto;
    border:1px solid #444;
    border-radius:5px;
    box-shadow:3px 5px 4px 5px #223850;
}
#test{
	padding-left:10px;
}

</style>
</head>
<body>
<div id="wrapper">
<h1>Data records stored in the recipe database</h1><hr>
<?php include "login.inc.php"; 
$query = "SELECT title, poster, shortdesc FROM recipes";
$result = mysqli_query($dbc, $query);
echo "<div id='test'>";
while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
{
	$title = $row['title'];
	$poster = $row['poster'];
	$shortdesc = $row['shortdesc'];

	echo "<b>Title: &nbsp; &nbsp;&nbsp;&nbsp;</b> $title<br>";
	echo "<b>posted by: </b> $poster<br>";
	echo "$shortdesc<br><br>";
}
?>
<a href="index.php"><button>Back</button></a>
</div>
</div>
</body>
</html>