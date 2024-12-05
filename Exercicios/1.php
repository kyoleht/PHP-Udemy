<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Calculadora</h1>
                <form method="POST">
                    <p>Insira dois valores inteiros:</p>
                    <div class="col-1">
                        <input class="mb-2" type="text" name="num1" id="num1" placeholder="Primeiro número" required>
                        <input type="text" name="num2" id="num2" placeholder="Segundo número" required>
                        <select class="mt-3" name="op" id="op">Operações:
                            <option value="soma">Soma</option>
                            <option value="subtracao">Subtração</option>
                            <option value="multiplicacao">Multiplicação</option>
                            <option value="divisao">Divisão</option>
                        </select>
                    </div>
                    <div class="col-sm-10">
                        <button class="btn btn-primary mt-3" type="submit">Calcular</button>
                    </div>
</body>

</html>

<?php

# calculadora simples em php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = (int) $_POST['num1'];
    $num2 = (int) $_POST['num2'];
    $op = $_POST ['op'];
    $resultado = '';
}

switch ($op) {
    case 'soma': 
        $resultado = $num1 + $num2;
        break;
    case 'subtracao':
        $resultado = $num1 - $num2;
        break;
    case 'multiplicacao':
        $resultado = $num1 * $num2;
        break;
    case 'divisao':
        if ( $num2 != 0 ) {
            $resultado = $num1 / $num2;
        } else {
            $resultado = "Erro. Operação Inválida!";
        }
        break;

    default:
        $resultado = "Operação Inválida!";

}

echo "Resultado: " . $resultado;

?>