<?php 
// Incluir la clase 
require_once 'actividad_metodos.php'; 
// Llamar al método de clase (estático) 
echo Calculadora::mostrarMensaje() . "<br>";

// Crear una instancia de la clase 
$miCalculadora = new Calculadora(); 
// Usar los métodos de instancia 
echo "Suma de 5 + 3: " . $miCalculadora->sumar(5, 3) . "<br>"; 
echo "Multiplicación de 4 * 2: " . $miCalculadora->multiplicar(4, 2) . "<br>"; 
echo "Resta de 10 - 4: " . $miCalculadora->restar(10, 4) . "<br>";
echo "División de 8 / 2: " . $miCalculadora->dividir(8, 2) . "<br>";
echo "División de 8 / 0: " . $miCalculadora->dividir(8, 0) . "<br>";

// Usar el método estático de la clase Conversor
echo "30°C en Fahrenheit: " . Conversor::celsiusAFahrenheit(30) . "°F"; 
?>
