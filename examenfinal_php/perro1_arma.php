<?php
class Animal {
    private $nombre;
    private $edad;
  
    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    
    public function set_nombre($nombre){ 
    return $this->nombre = $nombre;
    }

    public function get_nombre(){ 
    return $this->nombre;
    }

    public function set_edad($edad){
        $this->edad = $edad;
    }
    public function get_edad(){
    return $this-> edad;
    }

    public function to_string(){
        return "Soy un animal ".$this->nombre;
    }

}
class Perro extends Animal{ 
    
    public function __construct($nombre, $edad){
       parent::__construct($nombre,$edad);
    }
    //
    public function get_edad(){ 
    return parent::get_edad() * 7 ;
    }
    public function to_string(){
    return " Soy un perro ".parent::get_nombre();
    }
}

$mi_perrito = new Perro(" Toby ", 4);

print($mi_perrito->get_nombre());
echo"<br>";
print($mi_perrito->get_edad());
echo"<br>";
print($mi_perrito->to_string()); 