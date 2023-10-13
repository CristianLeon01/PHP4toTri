<?php

interface IAnimal {
    public function comer();
    public function dormir();
}

class Perro implements IAnimal {
    public function comer() {
        // Código para comer
    }

    public function dormir() {
        // Código para dormir
    }
}

$perro = new Perro();

if ($perro instanceof IAnimal) {
    // $perro implementa la interfaz IAnimal
}
