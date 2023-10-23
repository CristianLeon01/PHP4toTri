<?php
abstract class Vehiculo {
    abstract public function acelerar();
    abstract public function frenar();
}

class Coche extends Vehiculo {
    public function acelerar() {
        echo "El coche está acelerando.";
    }
    
    public function frenar() {
        echo "El coche está frenando.";
    }
}

$miCoche = new Coche();
$miCoche->acelerar();
$miCoche->frenar();
?>
