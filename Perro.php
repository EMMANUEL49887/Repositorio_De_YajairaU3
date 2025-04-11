<?php
/**
 * Clase que representa a un perro con atributos y métodos para simular sonidos.
 */
class Perro {
    private $nombre; // Nombre del perro
    private $raza;   // Raza del perro

    /**
     * Constructor de la clase Perro.
     *
     * @param string $nombre Nombre del perro.
     * @param string $raza Raza del perro.
     */
    public function __construct($nombre, $raza) {
        $this->nombre = $nombre;
        $this->raza = $raza;
    }

    /**
     * Método que simula el ladrido normal del perro.
     *
     * @param string $sonido El sonido del ladrido.
     * @return string Mensaje con el nombre y el sonido del perro.
     */
    public function ladra($sonido) {
        return $this->nombre . " dice: " . $sonido;
    }

    /**
     * Método que simula un ladrido fuerte del perro.
     *
     * @param string $sonido El sonido del ladrido.
     * @return string Mensaje con el nombre y el sonido en mayúsculas.
     */
    public function ladraAlto($sonido) {
        return $this->nombre . " ladra fuerte: " . strtoupper($sonido);
    }

    /**
     * Método que simula un gruñido bajo del perro.
     *
     * @param string $sonido El sonido del gruñido.
     * @return string Mensaje con el nombre y el sonido en minúsculas.
     */
    public function ladraBajo($sonido) {
        return $this->nombre . " gruñe bajo: " . strtolower($sonido);
    }

    /**
     * Método que devuelve la información del perro.
     *
     * @return string Datos del perro (nombre y raza).
     */
    public function mostrarDatos() {
        return "Nombre: " . $this->nombre . ", Raza: " . $this->raza;
    }
}
?>
 