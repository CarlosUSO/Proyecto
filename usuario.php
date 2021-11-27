<?php

include_once 'encabezado1.php';
?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>Usuario</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="usuario.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="compu.jpg"  rel="shortcut icon"  >
        <link href="boot/css/bootstrap.min.css" rel="stylesheet">
        <link href="boot/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="boot/css/jumbotron-narrow.css" rel="stylesheet">
    </head>

    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://lanmo.unam.mx/repositorio/LANMO/rn/hablantes/imagenes/directorio/hablante_blank.png"><span class="font-weight-bold"></span><span class="text-black-50"></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nombre</label><input type="text" class="form-control" placeholder="Nombre" value=""></div>
                    <div class="col-md-6"><label class="labels">Apellido</label><input type="text" class="form-control" value="" placeholder="Apellidos"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Número de telefono</label><input type="text" class="form-control" placeholder="Ingrese su numero telefonico" value=""></div>
                    <div class="col-md-12"><label class="labels">Calle</label><input type="text" class="form-control" placeholder="Ingrese su calle" value=""></div>
                    <div class="col-md-12"><label class="labels">Colonia</label><input type="text" class="form-control" placeholder="Ingrese su colonia" value=""></div>
                    <div class="col-md-12"><label class="labels">Codigo Postal</label><input type="text" class="form-control" placeholder="Ingrese el C.P" value=""></div>
                    <div class="col-md-12"><label class="labels">Estado</label><input type="text" class="form-control" placeholder="Ingrese el estado" value=""></div>
                 </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">GUARDAR</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Cambiar Contraseña</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Contraseña</span></div><br>
                <div class="col-md-12"><label class="labels">Contraseña anterior</label><input type="text" class="form-control" placeholder="contraseña anterior" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Nueva contraseña</label><input type="text" class="form-control" placeholder=" nueva contraseña" value=""></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</html>