<?php

require_once ('Computador.php');

class ComputadorLaptop extends Computador{

    private bool $tactil;
    private float $potBateria;


    public function __construct(string $fabricante, string $capMemoria, string $tipoMemoria, string $tipoAlmacenamiento, string $capAlmacenamiento, string $sistemaOperativo, string $suiteOficina, string $procesador, string $numPuertosUSB, bool $tactil, float $potBateria){

        parent::__construct($fabricante, $capMemoria, $tipoMemoria, $tipoAlmacenamiento, $capAlmacenamiento, $sistemaOperativo, $suiteOficina, $procesador, $numPuertosUSB, $tactil, $potBateria);

        $this->tactil = $tactil;
        $this->potBateria = $potBateria;

    }

    public function get_tactil(){
        return $this->tactil;
    }

    public function get_potBateria(){
        return $this->potBateria;
    }

    public function set_tactil($tactil){
        $this->tactil = $tactil;
    }

    public function set_potBateria($potBateria){
        $this->potBateria = $potBateria;
    }

}