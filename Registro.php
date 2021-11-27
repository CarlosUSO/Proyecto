<?php

include_once 'encabezado.php';
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
            <legend>Registro Usuario</legend>
            <label></label><input type="text" placeholder="Nombre">  
            <label></label><input type="text" placeholder="Apellido">
            <br>
            <br>
            <label></label><input type="text" placeholder="Correo electronico">
            <br>
            <br>
            <label></label><input type="text" placeholder="Contraseña nueva">
            <label>Ingresa una combinación de al menos seis numeros, letras y siglas de puntuación como "&" y "!"</label>
         
            <br><br>
            <label>Seleccione su fecha de nacimiento </label><input placeholder="calendario" type="date">
            <br><br>
            <label>Sexo</label>
            <br>
            <input name="opc" type="radio"><label>Mujer</label>
            <input name="opc" type="radio"><label>Hombre</label>
            <input name="opc" type="radio"><label>Personalizado</label>
            <br>
            <a href="#"><button type="button" class="btn btn-primary">REGISTRARTE</button></a>
        </fieldset>
        </table>
    </form>
  
</head>
</html>


