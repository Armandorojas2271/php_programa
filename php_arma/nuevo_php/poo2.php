<?php
    class Persona{
        public $nombre;
        public $telefono;

        public function __construct($nomb, $tel){ 
            $this->nombre = $nomb;
            $this->telefono = $tel;
        }

        public function obtener_datos(){
            return "Nombre: ".$this->nombre."Telefono: ".$this->telefono;
            }
 }
    class Alumno extends Persona{ 
        private $grado;
        private $turno;

    public function __construct($nomb, $tel, $grado, $turno){
        parent::__construct($nomb, $tel);
        $this->grado = $grado;
        $this->turno = $turno;
    }

    public function obtener_datos(){
        return parent::obtener_datos()."Grado: ".$this->grado." Turno: ".$this->turno;
    }
}

?>
<h3> Crear un objeto array de la clase alumno</h3>
<?php
    $alumno1 = new Alumno("Summer-","0981354120-","Tercero - Nivel Medio","Tarde");

    $alumnos = array(
        new Alumno("Summer-","0982350450-","Tercero - Nivel Medio","Tarde"),
        new Alumno("Gerardo-","0981200500-","Tercero - Nivel Medio","Mañana"),
        new Alumno("Rodrigo-","0981300900-","Tercero - Nivel Medio","Noche"),
        new Alumno("Nelson-","0982400820-","Tercero - Nivel Medio","Tarde")
    );
?>

<h3> Imprimir sus datos con foreach </h3>

<?php

    foreach ($alumnos as $a){
        echo $a->obtener_datos();
        echo "<br>";
    }
    echo $alumno1->obtener_datos();
?>




