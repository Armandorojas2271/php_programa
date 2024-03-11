<?php
class Automovil {
    public $color;
    public $motor;
    public $marca;

    public function get_color()
    { 
        return $this->color;

    }
}
//
    $auto1 = new Automovil();
    $auto1->color = 'verde';
    $auto1->motor = 2.0;
    $auto1->marca = 'Toyota';

    $auto2 = new Automovil();
    $auto2->color = 'gris';
    $auto2->motor = 1.5;
    $auto2->marca = 'Ford';

    //
    ?>
    <h3>Imprimir los colores de autos disponibles </h3>
    <?php
        echo "Primer auto: ".$auto1->get_color();
        echo"<br>Seguro autor: ".$auto2->get_color();
        echo"<br>Tercer auto: ";
        ?>

