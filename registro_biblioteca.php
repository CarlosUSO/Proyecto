<?php

include_once 'encabezado1.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <center>
        <header><h2 class="text-muted">Registro de Biblioteca</h2></header>
        <section>
            <table border="5">
                
                <tr>
                    <td>
                        <div class="container mt-3" class="form-text" >
                            <div class="header clearfix">
                                <div class="row" >
                            <form>
                                <ul>
                                <h3  >Nombre</h3>
                                <ol><input class="form-control" type="text" name="nombre" id="" autofocus></ol>
                                <h3>Municipio</h3>
                                <ol><input class="form-control" type="text" name="municipio" id=""></ol>
                                <h3>Colonia</h3>
                                <ol><input class="form-control" type="text" name="colonia" id=""></ol>
                                <h3>Calle</h3>
                                <ol><input class="form-control" type="text" name="calle" id=""></ol>
                                <h3>Codigo Postal</h3>
                                <ol><input class="form-control" type="text" name="c.p">
                                    <br>
                                <input type="checkbox" name="valida" required>La biblioteca pertenece a la red nacional de biblioyecas del gobierno de mexico 
                                    <br>
                                    <br>
                                </ol>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <input type="submit" name="cancelar" value="Cancelar">
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="guardar" value="Guardar" class="btn btn-primary">
                                
                                </ul>
                                
                                    
                         </form>
                               </div>
                           </div>
                    </div> 
                    </td>
                </tr>
                
            </table>
        </section>    
        
    </center>
</body>
</html>