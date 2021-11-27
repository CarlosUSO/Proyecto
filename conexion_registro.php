<?php  
$contraseña      =  "1234";
$usuario         =  "postgres";
$nombreBaseDatos =  "biblioteca";
$rutaServidor    =  "localhost";
$puerto          =  "5432";
try{
$Biblioteca =new PDO(
"pgsql:host=$rutaServidor; port=$puerto; dbname=$nombreBaseDatos"
,$usuario,$contraseña);

        $Biblioteca->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
        echo 'conexion realizada...';
    }catch (PDOException $e){
    
        echo "hubo un error con tu conexion ".$e->getMessage();

}
