<?php

require('clase2.php');

use Sena as S;

$persona1 = new S\Persona('Rodrigo', 'jairo@abc', 'Buenos Dias...');
echo 'Imprimiendo datos de la clase persona en el espacio de nombres Sena'. '<br>';
echo 'Nombres: '.$persona1->nombre. '<br>';
echo 'Correo: '.$persona1->correo. '<br>';
echo 'Nombres: ' . S\Persona::$saludo .'<br>';

