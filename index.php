<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $peso = filter_input(INPUT_POST, "peso", FILTER_VALIDATE_FLOAT);
    $altura = filter_input(INPUT_POST, "altura", FILTER_VALIDATE_FLOAT);

    if ($peso !== false && $altura !== false && $altura > 0) {
        $imc = $peso / ($altura ** 2);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>

<h2>Calcular IMC</h2>

<form method="POST">
    <label>Peso (kg):</label>
    <input type="number" step="0.01" name="peso" required><br><br>

    <label>Altura (m):</label>
    <input type="number" step="0.01" name="altura" required><br><br>

    <button type="submit">Calcular</button>
</form>

<?php
if (isset($imc)) {
    echo "<p>O IMC é: " . number_format($imc, 2) . "</p>";

    if ($imc < 16) echo "Magreza grau III";
    else if ($imc <= 16.9) echo "Magreza grau II";
    else if ($imc <= 18.4) echo "Magreza grau I";
    else if ($imc <= 24.9) echo "Eutrofia";
    else if ($imc <= 29.9) echo "Pré-obesidade";
    else if ($imc <= 34.9) echo "Obesidade moderada (grau I)";
    else if ($imc <= 39.9) echo "Obesidade severa (grau II)";
    else echo "Obesidade muito severa (grau III)";
}
?>

</body>
</html>
