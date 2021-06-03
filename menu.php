
<!DOCTYPE html>
<html>
<head>
<meta charset = 'UTF-8'>
	<title>movie menu</title>
	<script src="js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="menuStyle.css">
	
</head>
	<body>
	<header>
  <h1 class="logo">movie menu</h1>
  <input type="checkbox" id="nav-toggle" class="nav-toggle">
  <nav>
    <ul>
      <li><a href="create.php">Add new movie</a></li>
      <li><a href="read.php">show movie base</a></li>
      <li><a href="posters.php">Movie posters</a></li>
      <li><a href="deleteMovie.php">delete movie</a></li>
      <li><a href="delete.php">Remove director</a></li>
    </ul>
  </nav>
  <label for="nav-toggle" class="nav-toggle-label">
    <span></span>
  </label>
</header>



	</body>
</html>