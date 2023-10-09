<?php

require_once('Computador.php');
require_once('ComputadorLaptop.php');
require_once('ComputadorDesktop.php');

$desktop1 = new ComputadorDesktop('HP', '16RAM', 'DDR5', 'SSD', '1000GB', 'Windows 10', 'Office', 'Intel Core i5', '4', true);

$desktop2 = new ComputadorDesktop('Apple', '32GB', 'DDR6', 'SSD', '2TB', 'macOS Ventura', 'Office 365', 'Intel Core i7', '8', false);

// Desktop1

echo 'Fabricante: ' . $desktop1 -> get_fabricante() . '<br>';
echo 'Capacidad de Memoria: ' . $desktop1 -> get_capMemoria() . '<br>';
echo 'Tipo de Memoria: ' . $desktop1 -> get_tipoMemoria() . '<br>';
echo 'Tipo de Almacenamiento: ' . $desktop1 -> get_tipoAlmacenamiento() . '<br>';
echo 'Capacidad de Almacenimiento: ' . $desktop1 -> get_capAlmacenamiento() . '<br>';
echo 'Sistema Operativo: ' . $desktop1 -> get_sistemaOperativo() . '<br>';
echo 'Oficina: ' . $desktop1 -> get_suiteOficina() . '<br>';
echo 'Procesador: ' . $desktop1 -> get_procesador() . '<br>';
echo 'Numeros de Puertos USB: ' . $desktop1 -> get_numPuertosUSB() . '<br>';
echo 'UPS: ' . $desktop1 -> get_ups() . '<br>';

// Desktop2

echo 'Fabricante: ' . $desktop2 -> get_fabricante() . '<br>';
echo 'Capacidad de Memoria: ' . $desktop2 -> get_capMemoria() . '<br>';
echo 'Tipo de Memoria: ' . $desktop2 -> get_tipoMemoria() . '<br>';
echo 'Tipo de Almacenamiento: ' . $desktop2 -> get_tipoAlmacenamiento() . '<br>';
echo 'Capacidad de Almacenimiento: ' . $desktop2 -> get_capAlmacenamiento() . '<br>';
echo 'Sistema Operativo: ' . $desktop2 -> get_sistemaOperativo() . '<br>';
echo 'Oficina: ' . $desktop2 -> get_suiteOficina() . '<br>';
echo 'Procesador: ' . $desktop2 -> get_procesador() . '<br>';
echo 'Numeros de Puertos USB: ' . $desktop2 -> get_numPuertosUSB() . '<br>';
echo 'UPS: ' . $desktop2 -> get_ups() . '<br>';