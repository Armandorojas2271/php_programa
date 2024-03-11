<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
</head>
<body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<h2>Calculadora PHP</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" name="num1" placeholder="Ingrese el primer número" required>
    <select name="operator" required>
        <option value="+">Sumar</option>
        <option value="-">Restar</option>
        <option value="*">Multiplicar</option>
        <option value="/">Dividir</option>
    </select>
    <input type="text" name="num2" placeholder="Ingrese el segundo número" required>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "No se puede dividir por cero";
            }
            break;
        default:
            $result = "Operador no válido";
    }

    echo "<h3>Resultado:</h3>";
    echo "<p>$num1 $operator $num2 = $result</p>";
}
?>

</body>
</html>