<?php
include "login.inc.php";
$recipeid = $_GET['id'];

echo "<form action='index.php' method='post'>";
echo "<h2>Enter your comment</h2><hr>";
echo "<textarea rows='10' cols='50' name='comment'></textarea><br>";
echo "Submitted by: <input type='text' name='poster'><br>";
echo "<input type='hidden' name='recipeid' value='$recipeid'>";
echo "<input type='hidden' name='content' value='addcomment'>";
echo "<br><input type='submit' value='Post Comment'>";
echo "</form>";



?>