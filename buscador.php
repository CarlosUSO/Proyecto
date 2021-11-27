<?php

include_once 'encabezado.php';
?>



<!DOCTYPE html>
<html>
    
    <head>
        <title>pagina del buscador</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="registro.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="compu.jpg"  rel="shortcut icon"  >
        <link href="boot/css/bootstrap.min.css" rel="stylesheet">
        <link href="boot/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="boot/css/jumbotron-narrow.css" rel="stylesheet">
    </head>
  <div class="container mt-3">
	 <header class="header clearfix">
		<nav class="navegacion">
        <h3 class="text-muted">Biblioteca Virtual</h3>
			<ul class="menu">
				
				<li><a href="#">Biblioteca</a>
                <ul class="submenu">
						<li><a href="registro_biblioteca.php">Registrar Biblioteca</a></li>
						<li><a href="modificar_biblioteca.php">Mofificar Biblioteca</a></li>
					</ul>
                </li>
				<li><a href="#">Libros</a>
					<ul class="submenu">
						<li><a href="registro_libro.php">Registro libro</a></li>
						<li><a href="modificacion_libro.php">Modificar libro</a></li>
					</ul>
				</li>
			</ul>
           
		</nav>
	 </header>
    
    <body>
        <div style="background-image:url('img/b4.jpg')"></div>
        <h3>Bienvenidos al buscador de la biblioteca</h3>
    
     <form>
        <p>¿Que libro estas buscando?</p>
        
             <input size="40"   required  placeholder="Libro, autor, edicion, categoria" type="text">
            <br><br>
            <input required type="submit" value="Buscar">  
            <input required type="submit" value="Cancelar">
            <br><br>
            <a href="">Explora la gran variedad de libros que tenemos para ti</a>

      </form>
    </body>

</html>