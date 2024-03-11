<?php

$edad = 15;
if ($edad >= 18 && $edad < 70){
    print "<br>Eres mayor de edad";
}else if($edad < 18 && $edad >= 11){
    print "<br>Eres menor de edad";
}else{
    print"<br>Error de datos";
}

switch($edad){
    case 18:
        print "<br>Tienes 18";
        break;
    case 15:
        print "<br>Tienes 15";
        break;
    default:
        print "<br>Nada que festejar";
}

$respueta = ($edad >= 18)?"Eres mayor":"Eres menor";
