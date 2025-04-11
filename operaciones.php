<?php 

class Operaciones { 
    // Propiedades privadas 
    private $num1; 
    private $num2; 

    // Constructor para asignar valores iniciales
    public function __construct($num1 = 5, $num2 = 9) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    // Método sin parámetros: usa las propiedades de la clase 
    public function sumarSinParametros() { 
        return $this->num1 + $this->num2; 
    } 

    // Método con parámetros: recibe valores en la llamada 
    public function sumarConParametros($a, $b) { 
        return $a + $b; 
    } 

    // Método sin parámetros: multiplica las propiedades de la clase
    public function multiplicarSinParametros() {
        return $this->num1 * $this->num2;
    }

    // Método con parámetros: recibe valores en la llamada y los multiplica
    public function multiplicarConParametros($a, $b) {
        return $a * $b;
    }
}
?>
