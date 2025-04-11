<?php 
class Calculadora { 
 // Método de instancia para sumar 
 public function sumar($a, $b) { 
 return $a + $b; 
 } 
 // Método de instancia para multiplicar 
 public function multiplicar($a, $b) { 
 return $a * $b; 
 } 
  // Método de instancia para restar 
  public function restar($a, $b) { 
    return $a - $b; 
} 

// Método de instancia para dividir con validación 
public function dividir($a, $b) { 
    if ($b == 0) {
        return "Error: No se puede dividir por cero.";
    }
    return $a / $b; 
} 
 // Método de clase (estático) para mostrar un mensaje 
 public static function mostrarMensaje() { 
 return "Bienvenido a la Calculadora en PHP ��"; 
 } 
} 

class Conversor {
    // Método estático para convertir Celsius a Fahrenheit
    public static function celsiusAFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }
}
?>
