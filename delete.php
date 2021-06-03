<!DOCTYPE html>
<html>
<head>
	<title>remove director</title>
	<link rel="stylesheet" type="text/css" href="deleteStyle.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>


<?php
include "connection.php";
if (isset ($_GET['action']) && isset ($_GET['directorid'])){
$action = $_GET['action'];
$directorid = $_GET['directorid'];
switch ($action){
case "delete":
$upit = "DELETE FROM director WHERE directorid = ".$directorid;
if (!$q=$mysqli->query($upit)){
echo "Error<br/>" . mysql_query();
die();
} else {
	echo "<p>Deletion complete!</p>";
}
break;
case "change_form":
$upit="SELECT directorid, name, nationality FROM director WHERE directorid=".$directorid;
if (!$q=$mysqli->query($upit)){
echo "<p>Error</p>" . mysql_query();
die();
} else {
if ($q->num_rows!=1){
echo "<p>No directorss.</p>";
} else {
$director = $q->fetch_object();
$name = $director->name;
$nationality = $director->nationality;
?>

<div class="change">
<form method="post" action="?action=change&directorid=<?php echo $_GET['directorid'];?>">
Name : <input type="text" class="textbox" name="name" value="<?php echo $name;?>"/><br/>
Nationality : <input type="text" class="textbox" name="nationality" value="<?php echo $nationality;?>"/><br/>


<input type="submit" class="button1" name="enter" value="change" />
</form>

<?php
}
}

break;
case "change":
if (isset ($_POST['name']) && isset ($_POST['nationality'])){
$name = $_POST['name'];
$nationality = $_POST['nationality'];
$upit="UPDATE director SET name='". $name ."', nationality='" . $nationality . "' WHERE directorid=". $directorid;
if ($mysqli->query($upit)){
if ($mysqli->affected_rows > 0 ){
echo "<p>Information about director has been updated.</p>";
} else {
echo "<p>Information about director has not been updated.</p>";
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
$sql="SELECT directorid, name, nationality FROM director";
if (!$q=$mysqli->query($sql)){
echo "Error<br>" . mysql_query();
die();
}
if ($q->num_rows==0){
echo "<p class='msgno'> There are no directors in the base!</p>";
} else {
?>
</div>
<div class="show">
<h1>director base</h1>
<table>
<tr>
<td><b>Director name</b></td>
<td><b>Nationality</b></td>
<td><b>Action</b></td>
</tr>
<?php
while ($row=$q->fetch_object()){
?>
<tr>
<td><?php echo $row->name; ?></td>
<td><?php echo $row->nationality; ?></td>
<td><a href="?action=change_form&directorid=<?php echo $row->directorid; ?>">change</a></td>
<td><a href="?action=delete&directorid=<?php echo $row->directorid; ?>">delete</a></td>
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