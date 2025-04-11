<?php
class Alumno {
    // Propiedades privadas
    private $nombre;
    private $apellidos;
    private $numeroControl;

    // Métodos Setters para asignar valores
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setNumeroControl($numeroControl) {
        $this->numeroControl = $numeroControl;
    }

    // Método para asignar todos los valores en una sola instrucción
    public function asignarDatos($nombre, $apellidos, $numeroControl) {
        $this->setNombre($nombre);
        $this->setApellidos($apellidos);
        $this->setNumeroControl($numeroControl);
    }

    // Método para mostrar los datos del alumno
    public function mostrarDatos() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellidos: " . $this->apellidos . "<br>";
        echo "Número de Control: " . $this->numeroControl . "<br>";
    }

    // Método para generar un correo basado en el nombre y número de control
    public function generarCorreo() {
        return strtolower($this->nombre . '.' . $this->apellidos . '@universidad.com');
    }
}
?>
