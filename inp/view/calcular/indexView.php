<form action="<?php echo BASE_URL?>calcular/calculo" method="POST">
    <label>Altura</label>
    <input name="altura">
    <label>Ancho</label>
    <input name="ancho">
    <label>Tipo</label>
    <select name="tipo">
        <option value="0">Seleccionar</option>
        <option value="1">Pared</option>
        <option value="2">Piso</option>
        <option value="3">Pintura interior</option>
        <option value="4">Pintura exterior</option>

    </select>
    <input type="submit" value="Calcular">
</form>