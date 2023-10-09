<?php

class Computador {
    
    private string $fabricante;
    private string $capMemoria;
    private string $tipoMemoria;
    private string $tipoAlmacenamiento;
    private string $capAlmacenamiento;
    private string $sistemaOperativo;
    private string $suiteOficina;
    private string $procesador;
    private string $numPuertosUSB;
    public static $hora_actual;

    public function __construct(string $fabricante, string $capMemoria, string $tipoMemoria, string $tipoAlmacenamiento, string $capAlmacenamiento, string $sistemaOperativo, string $suiteOficina, string $procesador, string $numPuertosUSB){

        $this->fabricante = $fabricante;
        $this->capMemoria = $capMemoria;
        $this->tipoMemoria = $tipoMemoria;
        $this->tipoAlmacenamiento = $tipoAlmacenamiento;
        $this->capAlmacenamiento = $capAlmacenamiento;
        $this->sistemaOperativo = $sistemaOperativo;
        $this->suiteOficina = $suiteOficina;
        $this->procesador = $procesador;
        $this->numPuertosUSB = $numPuertosUSB;

    }

    public function get_fabricante(){
        return $this->fabricante;
    }

    public function get_capMemoria(){
        return $this->capMemoria;
    }

    public function get_tipoMemoria(){
        return $this->tipoMemoria;
    }

    public function get_tipoAlmacenamiento(){
        return $this->tipoAlmacenamiento;
    }

    public function get_capAlmacenamiento(){
        return $this->capAlmacenamiento;
    }

    public function get_sistemaOperativo(){
        return $this->sistemaOperativo;
    }

    public function get_suiteOficina(){
        return $this->suiteOficina;
    }

    public function get_procesador(){
        return $this->procesador;
    }

    public function get_numPuertosUSB(){
        return $this->numPuertosUSB;
    }

// LOS SET

    public function set_fabricante($fabricante){
        return $this->fabricante = $fabricante;
    }

    public function set_capMemoria($capMemoria){
        return $this->capMemoria = $capMemoria;
    }

    public function set_tipoMemoria($tipoMemoria){
        return $this->tipoMemoria = $tipoMemoria;
    }

    public function set_tipoAlmacenamiento($tipoAlmacenamiento){
        return $this->fabricante = $tipoAlmacenamiento;
    }

    public function set_capAlmacenamiento($capAlmacenamiento){
        return $this->capAlmacenamiento = $capAlmacenamiento;
    }

    public function set_sistemaOperativo($sistemaOperativo){
        return $this->sistemaOperativo = $sistemaOperativo;
    }

    public function set_suiteOficina($suiteOficina){
        return $this->suiteOficina = $suiteOficina;
    }

    public function set_procesador($procesador){
        return $this->procesador = $procesador;
    }

    public function set_numPuertosUSB($numPuertosUSB){
        return $this->numPuertosUSB = $numPuertosUSB;
    }

    function hora_actual(){
        $hora_actual = date("H:i:s");
        echo $hora_actual;
    }
}