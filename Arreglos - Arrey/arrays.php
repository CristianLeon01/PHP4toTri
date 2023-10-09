<?php

$estacion = [];

$estacion[0] = "Primavera";

$estacion[1] = "Verano";

$estacion[2] = "Otoño";

$estacion[3] = "Invierno";


echo $estacion[0];
echo '<br>';
echo $estacion[1];
echo '<br>';
echo $estacion[2];
echo '<br>';
echo $estacion[3];
echo '<br>';

?>
<?php
echo '<br>';
?>
<?php

$persona = array(

"nombre" => "Cristian",
"estatura" => 1.73,
"edad" => "18 años",

);

echo $persona["nombre"];
echo '<br>';
echo $persona["estatura"];
echo '<br>';
echo $persona["edad"];
echo '<br>';

foreach($persona as $p)
    echo '<br>'. $p;

?>
