<?php
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$resultado = factorial(5);
echo "El factorial de 5 es $resultado";
?>
