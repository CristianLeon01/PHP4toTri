<?php

$num1 = $_POST['operador1'];
$num2 = $_POST['operador2'];
$operacion =$_POST['operaciones'];

if (($num1) && ($num2)) {
    echo '<br>' .'El primer operador es: ' .$num1;
    echo '<br>';
    echo '<br>' .'El segundo operador es: ' .$num2;
    echo '<br>';
    echo '<br>';

    // if ($operacion = 'sumar'){
    //     echo 'La suma es: ' .($num1 + $num2);
    //     echo '<br>';
    // }

//     if ($operacion = 'restar'){
//         echo 'La resta es: ' .($num1 - $num2);
//         echo '<br>';
//     }

//     if ($operacion = 'multiplicar'){
//         echo 'La multiplicacion es: ' .($num1 * $num2);
//         echo '<br>';
//     }

//     if ($operacion = 'dividir'){
//         echo 'La division es: ' .($num1 / $num2);
//         echo '<br>';
//     }
}

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


if ($operacion == 'sumar'){
    $suma1 = new Operaciones($_POST['operador1'], $_POST['operador2']);
    echo '<br>' .'LA SUMA ES: '.$suma1->sumar();

elseif ($operacion == 'restar'){
    $resta1 = new Operaciones($_POST['operador1'], $_POST['operador2']);
    echo '<br>' .'LA RESTA ES: '.$resta1->restar();
}
}





$multiplicacion1 = new Operaciones($_POST['operador1'], $_POST['operador2']);

$division1 = new Operaciones($_POST['operador1'], $_POST['operador2']);


echo '<br>' .'LA MULTIPLICACION ES: '.$multiplicacion1->multiplicar();
echo '<br>' .'LA DIVISION ES: '.$division1->division();


?>
