<?php

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
<form method="get" action="resultado.php" class="col-4 bg-secondary">
    <input type="number" name="num1" class="form-control-sm">
    <input type="number" name="num2" class="form-control-sm">
    <select name="op" class="form-control-sm">
        <option value="suma">suma</option>
        <option value="resta">resta</option>
        <option value="multiplicar">multiplicar</option>
        <option value="dividir">dividir</option>
    <select>
    <input type="submit" value="Calcular" class="btn btn-danger">
<form>