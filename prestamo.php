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
            <legend>Prestamo de libros</legend>
            <label>Datos del lector</label><br><br>
            <label></label><input type="text" placeholder="Nombre">  
            <label></label><input type="text" placeholder="Apellidos">
            <br>
            <br>
            <label>Datos del libro</label><br><br>
            <label></label><input type="text" placeholder="Título del libro">
            <br>
            <br>
            <label></label><input type="text" placeholder="Autor"><br><br>
            <label>Seleccione la fecha de salida </label><input placeholder="calendario" type="date">
            <br>
            <br>
            <label>Seleccione la fecha de entrega </label><input placeholder="calendario" type="date">
            <br><br>
            <div class="checkbox-inline">
            <label>
            <input type="checkbox" value="">
             He leído y acepto los terminos y condiciones de la biblioteca
            </label>
            </div>
            <a href="#"><button type="button" class="btn btn-primary">ACEPTAR</button></a>
            <a href="#"><button type="button" class="btn btn-primary">CANCELAR</button></a>
        </fieldset>
        </table>
    </form>
  
</head>
</html>


