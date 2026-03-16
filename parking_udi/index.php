<?php 
require "plantilla.html";
startblock('article');
?> 

<h1>Home</h1>

<form action="accion/proceso.php" method="POST">
    <div class="mb-3">
        <label for="Tipo" class="form-label">Tipo</label>
        <select class="form-control" name="tipo">
            <option value="">Seleccionar tipo</option>
            <option value="1">Bicicleta</option>
            <option value="2">Moto</option>
            <option value="3">Carro</option>
            <input name="tipo" type="texto" class="form-control" id="tipo" placeholder="Ingrese el tipo, 1 Bicicleta, 2 Moto, 3 Carro">
        </select>
    </div>
    
    <div class="mb-3">
        <label for="Horas" class="form-label">Horas</label>
        <input name="horas" type="texto" class="form-control" id="horas" placeholder="Ingrese cantidad de horas">
    </div>
    
    <div class="mb-3">
        <label for="Placa" class="form-label">Placa</label>
        <input name="placa" type="texto" class="form-control" id="placa" placeholder="Ingrese placa de su vehiculo">
    </div>

    <div class="mb-3">
        <label for="Usuario" class="form-label">Usuario</label>
        <input name="usuario" type="texto" class="form-control" id="usuario" placeholder="Ingrese su nombre">
    </div>

    <div class="mb-3">
        <label for="Telefono" class="form-label">Telefono</label>
        <input name="telefono" type="texto" class="form-control" id="telefono" placeholder="Ingrese su telefono">
    </div>


    <button class="btn btn-info" type="submit">Enviar</button>
</form>



<?php  endblock();?>