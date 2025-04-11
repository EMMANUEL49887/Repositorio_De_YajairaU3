<?php
class Persona {
    // Propiedades con diferentes niveles de acceso
    public $nombre = "Carlos";
    private $edad = 25;
    public $dni = "12345678X";

    // Métodos getter y setter para $edad
    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    // Métodos getter y setter para $dni
    public function getDni() {
        return $this->dni;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    // Método para acceder a las propiedades dentro de la clase
    public function mostrarDatos() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "DNI: " . $this->dni . "<br>";
    }
}
?>
