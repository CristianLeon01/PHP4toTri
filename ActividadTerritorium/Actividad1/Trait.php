<?php
trait Log {
    public function logMensaje($mensaje) {
        echo "Registrando: $mensaje";
    }
}

class Usuario {
    use Log;
}

$usuario = new Usuario();
$usuario->logMensaje("El usuario se ha registrado.");
?>
