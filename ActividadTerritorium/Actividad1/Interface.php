<?php
interface Animal {
    public function sonido();
}

class Perro implements Animal {
    public function sonido() {
        echo "El perro hace guau guau.";
    }
}

$miPerro = new Perro();
$miPerro->sonido();
?>
