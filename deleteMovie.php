<!DOCTYPE html>
<html>
<head>
	<title>delete movie</title>
	<link rel="stylesheet" type="text/css" href="deleteStyle.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php
include "connection.php";
if (isset ($_GET['action']) && isset ($_GET['movieid'])){
$action = $_GET['action'];
$movieid = $_GET['movieid'];
switch ($action){
case "delete":
$upit = "DELETE FROM movie WHERE movieid = ".$movieid;
if (!$q=$mysqli->query($upit)){
echo "Error<br/>" . mysql_query();
die();
} else {
echo "<p>Deletion complete!</p>";
}
break;
case "change_form":
$upit="SELECT movieid, movie_name, year, genre FROM movie WHERE movieid=".$movieid;
if (!$q=$mysqli->query($upit)){
echo "<p>Error</p>" . mysql_query();
die();
} else {
if ($q->num_rows!=1){
echo "<p>No movies.</p>";
} else {
$movie = $q->fetch_object();
$movie_name = $movie->movie_name;
$year = $movie->year;
$genre = $movie->genre;

?>

<div class="change">
<form method="post" action="?action=change&movieid=<?php echo $_GET['movieid'];?>">
Name : <input type="text" class="textbox" name="movie_name" value="<?php echo $movie_name;?>"/><br/>
Year : <input type="text" class="textbox" name="year" value="<?php echo $year;?>"/><br/>
Genre : <input type="text" class="textbox" name="genre" value="<?php echo $genre;?>"/><br/>


<input type="submit" class="button1" name="enter" value="Change" />
</form>

<?php
}
}

break;
case "change":
if (isset ($_POST['movie_name']) && isset ($_POST['year']) && isset ($_POST['genre'])){
$movie_name = $_POST['movie_name'];
$year = $_POST['year'];
$genre = $_POST['genre'];
$upit="UPDATE movie SET movie_name='". $movie_name ."', year='" . $year . "', genre='" . $genre . "' WHERE movieid=". $movieid;
if ($mysqli->query($upit)){
if ($mysqli->affected_rows > 0 ){
echo "<p>Information about movie has been updated.</p>";
} else {
echo "<p>Information about movie has not been updated.</p>";
}
} else {
echo "<p>Error</p>" . mysql_error();
}
} else {
echo "<p>No change";
}
break;
default:
echo "<p>No action!</p>";
break;
}
}
$sql="SELECT movieid, movie_name, year, genre FROM movie";
if (!$q=$mysqli->query($sql)){
echo "Error<br>" . mysql_query();
die();
}
if ($q->num_rows==0){
echo "<p class='msgno'> There are no movies in the base!</p>";
} else {
?>
</div>
<div class="show">
<h1>movie name</h1>
<table>
<tr>
<td><b>Movie name</b></td>
<td><b>Nationality</b></td>
<td><b>Action</b></td>
</tr>
<?php
while ($row=$q->fetch_object()){
?>
<tr>
<td><?php echo $row->movie_name; ?></td>
<td><?php echo $row->year; ?></td>
<td><?php echo $row->genre; ?></td>
<td><a href="?action=change_form&movieid=<?php echo $row->movieid; ?>">change</a></td>
<td><a href="?action=delete&movieid=<?php echo $row->movieid; ?>">delete</a></td>
</tr>
<?php
}
?>
</table>
<?php
}
$mysqli->close();
?>

</div>

	<div class="home">
		<a href="menu.php"><button class="button"><h2>homepage</h2></button></a>	
	</div>

	
</body>
</html>