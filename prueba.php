<?php 

// Incluir la clase Operaciones 
require_once 'operaciones.php'; 

// Crear un objeto de la clase Operaciones con valores iniciales
$operacion = new Operaciones();

// Llamar y mostrar los resultados de todos los métodos
echo "Suma sin parámetros (usando propiedades de la clase): " . $operacion->sumarSinParametros() . "<br>"; 
echo "Suma con parámetros (5 + 7): " . $operacion->sumarConParametros(5, 7) . "<br>";
echo "Multiplicación sin parámetros (usando propiedades de la clase): " . $operacion->multiplicarSinParametros() . "<br>"; 
echo "Multiplicación con parámetros (3 * 4): " . $operacion->multiplicarConParametros(3, 4) . "<br>"; 

?>
