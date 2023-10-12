<?php

// Corrección:
// Se agregó la validación para que los operadores no sean nulos.
if (isset($_POST['operador1']) && isset($_POST['operador2'])) {
    $num1 = $_POST['operador1'];
    $num2 = $_POST['operador2'];
    $operacion = $_POST['operaciones'];
} else {
    echo "Error: Los operadores no pueden ser nulos.";
    exit;
}

// Complemento:
// Se agregó un mensaje de error si el usuario ingresa un operador inválido.
if ($operacion != "sumar" && $operacion != "restar" && $operacion != "multiplicar" && $operacion != "division") {
    echo "Error: Operador inválido.";
    exit;
}

// Código original:

class Operaciones {
    private string $num1;
    private string $num2;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function sumar(){
        return $this->num1 + $this->num2;
    }

    public function restar(){
        return $this->num1 - $this->num2;
    }

    public function multiplicar(){
        return $this->num1 * $this->num2;
    }

    public function division(){
        return $this->num1 / $this->num2;
    }

}


// Complemento:
// Se agregó la comprobación de errores para evitar que se produzca un error de división por cero.
if ($operacion == "division" && $num2 == 0) {
    echo "Error: División por cero.";
    exit;
}


echo '<br>' .'El primer operador es: ' .$num1;
echo '<br>';
echo '<br>' .'El segundo operador es: ' .$num2;
echo '<br>';



if ($operacion == "sumar") {
    $suma1 = new Operaciones($num1, $num2);
    echo '<br>' .'LA SUMA ES: '.$suma1->sumar();
} elseif ($operacion == "restar") {
    $resta1 = new Operaciones($num1, $num2);
    echo '<br>' .'LA RESTA ES: '.$resta1->restar();
} elseif ($operacion == "multiplicar") {
    $multiplicacion1 = new Operaciones($num1, $num2);
    echo '<br>' .'LA MULTIPLICACION ES: '.$multiplicacion1->multiplicar();
} elseif ($operacion == "division") {
    $division1 = new Operaciones($num1, $num2);
    echo '<br>' .'LA DIVISION ES: '.$division1->division();
}





?>
