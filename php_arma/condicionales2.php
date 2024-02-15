<!DOCTYPE html>
<html>
    <head>
        <title>Mi primera web</title>
        <meta charset="UFT-8"/>
    </head>
    <body>
        <h1>TIENDA ONLINE</h1>
        <?php
            $edad = 7;
            if($edad >= 18 && $edad < 70){
                print "Eres mayor";
                header("Location: https://www.google.com");
                exit;
            }else if( $edad < 18 && $edad > 11){
                $mensaje = "<script> alert('Tas guero');</script>";
                print $mensaje;
            }else{ 
                $mensaje = "<script> alert('Usted sera redirecionado');</script>";
                echo $mensaje;
                header("Location: https://www.youtube.com");
                exit;
            }
        ?>
    </body>
</html>    
