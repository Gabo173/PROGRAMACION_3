<?php
require_once "public/plantilla.html";
startblock('article');

?>

<div class="row">
    <div class="cold-md-4">
        <img srrc="<?php echo BASE_URL?>public/img/pared.png">
    </div>
    <div class="cold-nd-8">
        <table class="table table-hover">
            <tr>
                <th>#</th>
                <th>Item</th>
                <th>valor unidad</th>
                <th>valor total</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Ladrillo</td>
                <td><?php echo $precio_ladrillo?></td>
                <td><?php echo $total_ladrillo?></td>
                <tr><?php echo $total_precio_ladrillo?></tr>
            </tr>

            <tr>
                <td>2</td>
                <td>Cemento</td>
                <td><?php echo $precio_cemento?></td>
                <td><?php echo $total_cemento?></td>
                <tr><?php echo $total_precio_cemento?></tr>
            </tr>
            <tr>
                <td>3</td>
                <td>Arena</td>
                <td><?php echo $precio_arena?></td>
                <td><?php echo $total_arena?></td>
                <tr><?php echo $total_precio_arena?></tr>
            </tr>

            <tr>
                <td col="3">Total</td>
                <td><?php echo "$". number_format($total, 2, '.', '.'), PHP_EOL;?></td>
                <td><?php echo $total?></td>
            </tr>

        </table>
    </div>
</div>

<?php endblock(); ?>