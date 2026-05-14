<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular_imc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="style.css">
    <style>
        body {
            background: #f8f9fa;
        }
        main{
            margin: 0 20%;
            max-width: 80%;
            padding: 20px;
            background: aquamarine;
        }
        header{
            text-align: center;
            height: 140px;
            background: cornflowerblue;
            padding: 5%;
        }
        h1{
            color: #076079;
        }
    </style>
    
<body>
    <header>
        <h1>Calcular IMC</h1>
        <h6>Creado por Gabo</h6>
    </header>
    <main>
        
    <div class="card">
        <div class="card-header">Calcular IMC
            </div>
                <div class="card-body">
                    <form method="post" action="calcular.php">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Altura (m)</label>
                        <input name="altura" type="texto" class="form-control" id="altura" placeholder="Digite su altura en metros" step="0.01">
                    </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Peso (kg)</label>
                    <input name="peso" type="number" class="form-control" id="peso" placeholder="Digite su peso en kilogramos" step="0.01">
                </div>
                    <div class="mb-3">
                <button class="btn btn-outline-primary btn-sm" type="submit">Calcular IMC</button>
            </div>
        </div>
    </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
</body>
</html>