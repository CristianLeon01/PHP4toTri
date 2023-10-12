<?php

abstract class Figura {
    private $nLados = 1;
    private $nombre;

    public function imprimir(){
        echo 'soy un metodo de una clase abstracta' .'<br>' .'<br>';
    }
}

$cuadrado1 = new Cuadrado();
$cuadrado1 -> imprimir();

// $triangulo = new Figura();

// $triangulo -> imprimir();

class Cuadrado extends Figura{
    
}

class Triangulo extends Figura{
    private $base;
    private $altura;

    function __construct(float $base, float $altura){
        $this ->base = $base;
        $this ->altura = $altura;
        
    }

    public function calcularArea(){
        return ($this->base * $this->altura)/2;
    }
}

$triangulo1 = new Triangulo(10, 15);
echo 'El area del triangulo es: ' . $triangulo1 -> calcularArea();

