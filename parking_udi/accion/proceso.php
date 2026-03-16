<?php
    
    $tipo = $_POST["tipo"];
    $horas = $_POST["horas"];
    $placa = $_POST["placa"];
    $usuario = $_POST["usuario"];
    $telefono = $_POST["telefono"];

    $total = 0;

    define("BIC", 2000);
    define("MOT", 4000);
    define("CAR", 6000);

    switch ($tipo) {
        case '1':
            $total = $horas * BIC;
            break;
        case '2':
            $total = $horas * MOT;
            break;
        case '3':
            $total = $horas * CAR;
            break;                                
        default:
            # code...
            break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo Parking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <main>
        <link rel="stylesheet" href="css/style.css">
        
            <div class="card">
            <h5 class="card-header">Recibo Parking :</h5>
            <div class="card-body">
                <h5 class="card-title">Resumen</h5>
                <p class="card-text">
                    <?php 
            echo "El total de horas fueron: $horas <br> 
            y su total por pagar es: $total <br> 
            la placa es: $placa <br> 
            el usuario es: $usuario <br>
            y el telefono es: $telefono";            
                    ?>                    
                </p>
            </div>
            </div>

        </main>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>