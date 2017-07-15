
<form action="index.php" method="post" >
<h2>Enter your new recipe:</h2>
<hr>
<label >Title: &nbsp;</label>	<br>			<input type="text" size="40" name="title"><br>
<label >Poster: </label>			<br>	<input type="text" size="40" name="poster" ><br>
<label>Short Description:</label>	<br><textarea rows="10" cols="50" name="shortdesc" ></textarea><br>
<label>Ingredients:</label><br>
<textarea rows="10" cols="50" name="ingredients"></textarea><br>

<label >Directions:</label>	<br>	<textarea rows="10" cols="50" name="directions" ></textarea><br>
									<input type="submit" value="Submit"><input type="reset" value="Clear">
									<input type="hidden" name="content" value="addrecipe">
									</form>

