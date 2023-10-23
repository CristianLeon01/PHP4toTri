<?php
abstract class Figura {
    protected $color;
    
    abstract public function area();
}

class Circulo extends Figura {
    public function __construct($color) {
        $this->color = $color;
    }
    
    public function area() {
        return "El área del círculo de color {$this->color} es ...";
    }
}

$miCirculo = new Circulo("rojo");
echo $miCirculo->area();
?>
