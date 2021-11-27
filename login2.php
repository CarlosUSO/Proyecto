<?php

include_once 'encabezado.php';
?>

<!doctype html>
<html lang="en">
<head>
<title>Aplicaciones WEB</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="estilos.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="boot/css/bootstrap.min.css" rel="stylesheet">
<link href="boot/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<link href="boot/css/jumbotron-narrow.css" rel="stylesheet">
<link rel="stylesheet" href="css/nivo-slider.css">
<link rel="stylesheet" href="css/mi-slider.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js"></script>

	<script type="text/javascript"> 
		$(window).on('load', function() {
		    $('#slider').nivoSlider(); 
		}); 
	</script>

</head>
<body>

    <div class="slider-wrapper theme-mi-slider">
		<div id="slider" class="nivoSlider">     
		    <img src="img/b1.jpg" alt="" title="#htmlcaption1" />    
		    <img src="img/b2.jpg" alt="" title="#htmlcaption2" />    
		    <img src="img/b3.jpg" alt="" title="#htmlcaption3" />     
		</div> 
		<div id="htmlcaption1" class="nivo-html-caption">     
		    <h1>Sean Bienvenidos</h1>
		    <p>Biblioteca Virtual.</p>
		</div>
		<div id="htmlcaption2" class="nivo-html-caption">     
		    <h1>Acerca de Nosotros</h1>
		</div>
		<div id="htmlcaption3" class="nivo-html-caption">     
		    <h1>Gracias por visitar</h1>
		</div>
	</div>

    <script>
        function vinculo();
        document.location.href="login2.php";
    </script>
</body>
</html>