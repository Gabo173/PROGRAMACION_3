<?php
require_once "public/plantilla.html"
startblock('article');
?>
<div class="row">
    <div class="col-md-9">
        <h1>Lista de Empleados</h1>
    </div>
    <div class="col-md-3">
        <a class="btn btn-sm btn-warning" href="<?php ECHO BASE_URL?>/empleado/inicio">Regresar Empleado<a>
    </div>
</div>

<div class="row">
    <div class="col-nd-9">
        <div class="card">
            <div class="card-body">
                <h5>Formulario Nuevo Empleado</h5>
                <form id="nuevo_empleado">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                            <label for="nombre">Nombre</label>
                            <input class="form-control" name="nombre" id="nombre" type="text">
                            </div>
                        </div>
                    </div>
            </div>    
        </div>
    </div>
</div>