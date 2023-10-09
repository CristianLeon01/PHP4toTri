<?php

require_once ('Computador.php');

class ComputadorDesktop extends Computador{

    private bool $ups;

    public function __construct(string $fabricante, string $capMemoria, string $tipoMemoria, string $tipoAlmacenamiento, string $capAlmacenamiento, string $sistemaOperativo, string $suiteOficina, string $procesador, string $numPuertosUSB, bool $ups){

        parent::__construct($fabricante, $capMemoria, $tipoMemoria, $tipoAlmacenamiento, $capAlmacenamiento, $sistemaOperativo, $suiteOficina, $procesador, $numPuertosUSB);

        $this->ups = $ups;

    }

    public function get_ups(){
        return $this->ups;
    }

    public function set_ups($ups){
        $this->ups = $ups;
    }

}    
