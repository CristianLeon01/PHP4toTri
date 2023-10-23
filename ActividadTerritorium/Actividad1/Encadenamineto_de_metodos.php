<?php
class Calculadora {
    private $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function sumar($numero) {
        $this->valor += $numero;
        return $this;
    }

    public function restar($numero) {
        $this->valor -= $numero;
        return $this;
    }

    public function obtenerResultado() {
        return $this->valor;
    }
}

$calculadora = new Calculadora(10);
$resultado = $calculadora->sumar(5)->restar(3)->obtenerResultado();
echo "El resultado es $resultado";
?>
