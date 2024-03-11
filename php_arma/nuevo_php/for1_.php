<?php
    $tabla = 27;
    if($tabla % 2 == 0){ 
        $divisor = 2;
    }else{ 
        $divisor = 3;
    }
    echo "<table width='100%' border='1'>";
    echo "<tr>";
    for($x = 1; $x <= $tabla ; $x++){
        echo "<td>";
        for($y = 0; $y <=10 ; $y++){
            echo "<br>$x x $y = ".($x*$y);
        }
        if($x % $divisor == 0){
            echo "</td>";
            echo "</tr>";
            if($x < $tabla){
                echo "<tr>";

            }
        }else{ 
            echo "</td>";
        }
    }
    echo "</table>";
?> 