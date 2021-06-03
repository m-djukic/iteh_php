<?php

include 'connection.php';

$charNewCount = $_POST['charNewCount'];
	$sql = "SELECT * FROM movie LIMIT $charNewCount";
	$result= mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_assoc($result)){
					
					echo $row ['movie_name'];
					
					

                    echo '   ';
                    
                    echo $row ['year'];

                    echo '   ';
					
					echo $row ['genre'];

					echo '<br>';
					
				}
?>