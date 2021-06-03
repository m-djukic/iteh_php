<!doctype html>
<html lang= "en">
<head>
	<meta charset="UTF-8">
	<title> posters</title>
	<link rel="stylesheet" href="jquery.fancybox.min.css">
	<style>
		body {
			background: black;
		}
		.wrapper {
			width: 1170px;
			margin: auto;
		}
		.wrapper a img {
			width: 100%
		}
		.wrapper a{
			width: 100%;
			float: left;
			margin: 5px;
		}
	</style>
	</head>
	<body>
	<div class="wrapper">
	<a data-fancybox="gallery" href="images/1.jpg" data-caption="War horse"><img src="images/1.jpg"></a>
	<a data-fancybox="gallery" href="images/2.jpg" data-caption="Silence"><img src="images/2.jpg"></a>
	<a data-fancybox="gallery" href="images/3.jpg" data-caption="Great expectations"><img src="images/3.jpg"></a>
	<a data-fancybox="gallery" href="images/4.jpg" data-caption="Seven samurai"><img src="images/4.jpg"></a>
	<a data-fancybox="gallery" href="images/5.jpg" data-caption="Indiana Jones"><img src="images/5.jpg"></a>
	<a data-fancybox="gallery" href="images/6.jpg" data-caption="Lost in translation"><img src="images/6.jpg"></a>
	<a data-fancybox="gallery" href="images/7.jpg" data-caption="Gravity"><img src="images/7.jpg"></a>
	<a data-fancybox="gallery" href="images/8.jpg" data-caption="Casino"><img src="images/8.jpg"></a>
    <a data-fancybox="gallery" href="images/9.jpg" data-caption="Catch me if you can"><img src="images/9.jpg"></a>
    <a data-fancybox="gallery" href="images/10.jpg" data-caption="Death proof"><img src="images/10.jpg"></a>
    <a data-fancybox="gallery" href="images/11.jpg" data-caption="Kill Bill"><img src="images/11.jpg"></a>
	
	</div>
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script>
		$('[data-fancybox="galery"]').fancybox({
			loop: true,
			buttons: [
			"slideShow",
			"fullScreen",
			"thumbs",
			"close"
			],
			
			animationEffect: "slide"
			
		});
	</script>
	</body>
	</html>
	
	
