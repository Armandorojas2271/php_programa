<!doctype html>
<html>
<head>
    <title>Edad</title>
    <meta charset="UFT-8"/>
    <style>
        .estilo_par{ 
            color:red;
        }
        .estilo_impar{ 
            color:red;
        }
    </style>
</head>
<body>
<?php
//
for($x = 1 ; $x <= 100 ; $x++){ 

    //
    if($x % 2 == 0){
        echo "<p class='estilo-par'> $x </p>";
    }else{ 
    //impar
    echo "<p class=estilo_impar'> $x </p>";
    }

}
?>
</body>
</html>
