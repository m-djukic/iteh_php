<?php
	include 'connection.php';
?>

<!DOCTYPE html>
<html>
	<head>
	<title>show movie base</title>
		<link rel="stylesheet" type="text/css" href="readstyle.css">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			var charCount = 1;
			$("button").click(function(){
				charCount = charCount + 1;
			$("#movies").load("load_movies.php", {
				charNewCount: charCount				
			});
		});
	});
	</script>
	</head>
	
	<body>
	<div id="movies" class = "show">
		<?php
			$sql = "SELECT * FROM movie ";
			$result= mysqli_query($mysqli,$sql);
			
				while($row = mysqli_fetch_assoc($result)){
					
					echo $row ['movie_name']; 
					echo '   '; 
					echo $row ['year'];
					echo '   ';
					echo $row [ 'genre'];
					echo "<br>";
					echo "<br>";	
				} 	
		?>

		<button class="showBtn"> show movies</button>

	</div>
	
	
	</body>
	<div class="home">
		<a href="menu.php"><button class="button"><h2>homepage</h2></button></a>	
	</div>
	
</html>