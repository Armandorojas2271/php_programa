<!doctype html>
<html>
<head>
    <title>Edad</title>
    <meta charset="UFT-8"/>
    <style>
        .estilo_par{ 
            color:red;
        }
    </style>
</head>
<body>
<?php
//
for($x = 0 ; $x < 10 ; $x++){
    print("9=x $x = ".(9 * $x)."<br>");

    //
    if($x % 2 == 0){
        print "<p class='estilo-par'> $x </p>";
    }else{ 
    //impar
    print "<p class=estilo_impar'> $x </p>",s
    }

}
?>
</body>
</html>
