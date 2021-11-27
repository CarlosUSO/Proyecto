<?php

include_once 'encabezado1.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>INTERFAZ</title>
<meta charset="UTF-8">
<link href="" rel="shortcut icon">
<style>
        form{
            margin: auto;
            width: 500px;
            height: auto;
        }
    </style>
<body>
<form>
        <table>
        <fieldset>
            <legend>Registro de libros</legend>
            <label></label><input type="text" placeholder="Titulo libro">  
            <label></label><input type="text" placeholder="Editorial">
            <br>
            <br>
            <label></label><input type="text" placeholder="Autor">
            <br>
            <br>
            <label>Seleccione la fecha de publicación </label><input placeholder="calendario" type="date">
            <label></label><input type="text" placeholder="Edición">
            <br>
            <br>
            <label></label><input type="text" placeholder="Categoria">
            <label></label><input type="text" placeholder="No.paginas">
            <br>
            <br>
            <a href="#"><button type="button" class="btn btn-primary">AGREGAR</button></a>
            <a href="#"><button type="button" class="btn btn-primary">CANCELAR</button></a>
        </fieldset>
        </table>
    </form>
  
</head>
</html>


