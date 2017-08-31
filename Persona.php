<?php
class Persona {
    public $nombre;
    public $apellido;
	
    public function Hablar (){
	    echo " soy ".$this->nombre . " Y esto es Jackass";
	}
}
$p = new Persona();
$p ->nombre = "Micaela";
$p ->apellido = "Valdez";

$p1 = new Persona();
$p1 ->nombre = "Juan";
$p1 ->apellido = "Ylasabichuelas";

echo "Hola ".$p->nombre . "<br>";
echo "Hola ".$p1->nombre . "<br>";

$p->Hablar ();
