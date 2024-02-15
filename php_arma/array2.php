<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Array 2 </title>
</head>
<body>
<?php
    $edades = array("Arma" =>"25", "Jeannet"=>"21", "Ana"=>"17");
    print "Jeannet tiene" .$edades['Jeannet'] . "años" ;
    echo "<hr>";
    foreach($edades as $x => $valor) { 
        print "Clave=" .$x. ", Valor=" .$valor;
        print "<br>";
    }
?>
</body>
</html>