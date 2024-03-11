<?php
    $personas = array(" Ana "," Camila ", " Pepe "," Juan "," Sofia ");
    $premios = array(" Auto- "," bicicletas- ", " celular- ");

        
    foreach ($premios as $p){
        $cantidad = count($personas)-1;
    while(1){
        $sorteo = rand(0,$cantidad);
        if ($personas[$sorteo] != "0"){
            $premiados[$p] =$personas[$sorteo];
            $personas[$sorteo] = "0";
        break;      
        }
    }

}

    foreach($premiados as $item => $p){
        print("Premio: ".$item. "Ganador: ".$p);
        echo "<br>";
    }

    echo "<br>";
    foreach($personas as $p){
        print("");
    }