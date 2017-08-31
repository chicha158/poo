<?php
class Persona {
    public $nombre;
    public $apellido;
	
    public function Hablar (){
	    echo " soy ".$this->nombre . " Y esto es Jackass";
	}
    public function Acariciar ($perrito) {
		$perrito->moverCola();
	}
}

class Perro {
    public $nombre;
    public function moverCola (){
		echo "muevo la cola";
	}
}
$p = new Persona();
$p ->nombre = "Mica";
$p ->apellido = "Valdez";

$p1 = new Persona();
$p1 ->nombre = "Juan";
$p1 ->apellido = "Chimichanga";

echo "Hola ".$p->nombre . "<br>";
echo "Hola ".$p1->nombre . "<br>";

$p->Hablar ();

echo "<br>";
$perro = new Perro();
$perro->moverCola();
echo "<br>";

$p->Acariciar($perro);