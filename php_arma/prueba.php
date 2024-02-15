<!DOCTYPE html>
<html>
<head>
    <title>Mini Programa PHP</title>
</head>
<body>

<?php
// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si se ha enviado el campo 'nombre'
    if (!empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        echo "<h2>Hola, $nombre! ¡Bienvenido al mini programa PHP!</h2>";
    } else {
        echo "<h2>Por favor, ingresa tu nombre.</h2>";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nombre: <input type="text" name="nombre">
    <input type="submit" name="submit" value="Enviar">
</form>

</body>
</html>