<!DOCTYPE html>
<html>
<head>
<title>add new movie</title>
<link rel="stylesheet" type="text/css" href="createStyle.css">
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>					
	<div class="home">
		<a href="menu.php"><button class="button"><h2>homepage</h2></button></a>	
	</div>


<div class="add">
	<form method="post" action="">
		<label for="movie_name">movie name</label>
		 <input type="text" class="textbox" name="movie_name" /><br/>
		 
		 <label for="year">year of release</label>
		<input type="number" class="textbox" name="year" /><br/>

		<label for="genre">genre</label>
		<input type="text" class="textbox" name="genre" /><br/>
		
		 
<input type="submit" class="button1" name="input" value="add" />
	</form>
</div>

<div class="notification">
<?php
if (isset($_POST["input"])){


if (isset($_POST['movie_name'])&&isset($_POST['year'])&&isset($_POST['genre'])){
	
$movie_name = $_POST['movie_name'];
$year = $_POST['year'];
$genre = $_POST['genre'];


include "connection.php";
$sql="INSERT INTO movie (movie_name, year, genre) VALUES ('".$movie_name."', '".$year."','".$genre."')";
if ($mysqli->query($sql)){


echo "<p class='msg'> Movie added!</p>";
} else {
echo "<p>Movie is not added!</p>" . $mysqli->error;
}
} else {

echo "Fill in all the fields!";
}
$mysqli->close();
}
?>
</div>
</body>
</html>