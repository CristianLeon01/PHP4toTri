<?php

require_once('Computador.php');
require_once('ComputadorLaptop.php');
require_once('ComputadorDesktop.php');

$desktop1 = new ComputadorDesktop('HP', '16RAM', 'DDR5', 'SSD', '1000GB', 'Windows 10', 'Office', 'Intel Core i5', 4, true);

$desktop2 = new ComputadorDesktop('Apple', '32GB', 'DDR6', 'SSD', '2TB', 'macOS Ventura', 'Office 365', 'Intel Core i7', 8, false);

echo Computador::hora_actual();

echo '<br>';


echo '--COMPUTADORES DE MESA--'. '<br>'. '<br>';

// Desktop1

echo '<b>Fabricante: </b>' . $desktop1 -> get_fabricante() . '<br>';
echo '<b>Capacidad de Memoria: </b>' . $desktop1 -> get_capMemoria() . '<br>';
echo '<b>Tipo de Memoria: </b>' . $desktop1 -> get_tipoMemoria() . '<br>';
echo '<b>Tipo de Almacenamiento: </b>' . $desktop1 -> get_tipoAlmacenamiento() . '<br>';
echo '<b>Capacidad de Almacenimiento: </b>' . $desktop1 -> get_capAlmacenamiento() . '<br>';
echo '<b>Sistema Operativo: </b>' . $desktop1 -> get_sistemaOperativo() . '<br>';
echo '<b>Oficina: </b>' . $desktop1 -> get_suiteOficina() . '<br>';
echo '<b>Procesador: </b>' . $desktop1 -> get_procesador() . '<br>';
echo '<b>Numeros de Puertos USB: </b>' . $desktop1 -> get_numPuertosUSB() . '<br>';
echo '<b>UPS: </b>' . $desktop1 -> get_ups() . '<br>';

echo '<br>'. '<br>';

// Desktop2

echo '<b>Fabricante: </b>' . $desktop2 -> get_fabricante() . '<br>';
echo '<b>Capacidad de Memoria: </b>' . $desktop2 -> get_capMemoria() . '<br>';
echo '<b>Tipo de Memoria: </b>' . $desktop2 -> get_tipoMemoria() . '<br>';
echo '<b>Tipo de Almacenamiento: </b>' . $desktop2 -> get_tipoAlmacenamiento() . '<br>';
echo '<b>Capacidad de Almacenimiento: </b>' . $desktop2 -> get_capAlmacenamiento() . '<br>';
echo '<b>Sistema Operativo: </b>' . $desktop2 -> get_sistemaOperativo() . '<br>';
echo '<b>Oficina: </b>' . $desktop2 -> get_suiteOficina() . '<br>';
echo '<b>Procesador: </b>' . $desktop2 -> get_procesador() . '<br>';
echo '<b>Numeros de Puertos USB: </b>' . $desktop2 -> get_numPuertosUSB() . '<br>';
echo '<b>UPS: </b>' . $desktop2 -> get_ups() . '<br>' .'<br>' .'<br>';



$laptop1 = new ComputadorLaptop('Lenovo', '8RAM', 'DDR4', 'SSD', '500GB', 'Windows 9', 'Office 2018', 'AMD Ryzen 3', 3, true, 5000);

$laptop2 = new ComputadorLaptop('Acer', '16GB', 'DDR5', 'HDD', '1TB', 'Ubuntu 22.04', 'LibreOffice 7.3', 'Intel Core i5', 2, false, 7000);


echo '--COMPUTADORES PORTATILES--'. '<br>'. '<br>' ;

// Laptop 1

echo '<b>Fabricante: </b>' . $laptop1 -> get_fabricante() . '<br>';
echo '<b>Capacidad de Memoria: </b>' . $laptop1 -> get_capMemoria() . '<br>';
echo '<b>Tipo de Memoria: </b>' . $laptop1 -> get_tipoMemoria() . '<br>';
echo '<b>Tipo de Almacenamiento: </b>' . $laptop1 -> get_tipoAlmacenamiento() . '<br>';
echo '<b>Capacidad de Almacenimiento: </b>' . $laptop1 -> get_capAlmacenamiento() . '<br>';
echo '<b>Sistema Operativo: </b>' . $laptop1 -> get_sistemaOperativo() . '<br>';
echo '<b>Oficina: </b>' . $laptop1 -> get_suiteOficina() . '<br>';
echo '<b>Procesador: </b>' . $laptop1 -> get_procesador() . '<br>';
echo '<b>Numeros de Puertos USB: </b>' . $laptop1 -> get_numPuertosUSB() . '<br>';
echo '<b>Cursor Tactil: </b>' . $laptop1 -> get_tactil() . '<br>';
echo '<b>Potencia Bateria: </b>'. $laptop1 -> get_potBateria() . '<br>';

echo '<br>'. '<br>';

// Laptop 2

echo '<b>Fabricante: </b>' . $laptop2 -> get_fabricante() . '<br>';
echo '<b>Capacidad de Memoria: </b>' . $laptop2 -> get_capMemoria() . '<br>';
echo '<b>Tipo de Memoria: </b>' . $laptop2 -> get_tipoMemoria() . '<br>';
echo '<b>Tipo de Almacenamiento: </b>' . $laptop2 -> get_tipoAlmacenamiento() . '<br>';
echo '<b>Capacidad de Almacenimiento: </b>' . $laptop2 -> get_capAlmacenamiento() . '<br>';
echo '<b>Sistema Operativo: </b>' . $laptop2 -> get_sistemaOperativo() . '<br>';
echo '<b>Oficina: </b>' . $laptop2 -> get_suiteOficina() . '<br>';
echo '<b>Procesador: </b>' . $laptop2 -> get_procesador() . '<br>';
echo '<b>Numeros de Puertos USB: </b>' . $laptop2 -> get_numPuertosUSB() . '<br>';
echo '<b>Cursor Tactil: </b>' . $laptop2 -> get_tactil() . '<br>';
echo '<b>Potencia Bateria: </b>' . $laptop2 -> get_potBateria() . '<br>';
