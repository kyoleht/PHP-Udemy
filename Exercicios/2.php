<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Temperatura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Convertor de Temperatura</h1>
            <form method="POST">
                <p>Digite uma temperatura em Fahrenheit para conversão:</p>
                <div class="col-1">
                    <input class="mb-2 form-control" type="number" name="f" id="f" required>
                </div>
                <div class="col-sm-10">
                    <button class="btn btn-primary mt-3" type="submit">Converter</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $f = (float) $_POST['f'];
    $c = ($f - 32) / 1.8;   
    echo "<div class='container mt-3'><h2>Em Celsius, a temperatura é: " . round($c, 2) . "ºC</h2></div>";  
}
?>

</body>
</html>