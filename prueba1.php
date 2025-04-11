<?php
include_once 'Ejer1.php';

// Crear una instancia de la clase Caja
$caja = new Caja(3.5, 2.0, 4.0);

// Calcular y mostrar el volumen
echo "Volumen de la caja: " . $caja->volumen() . " unidades cúbicas\n";

// Calcular y mostrar el área total
echo "Área total de la caja: " . $caja->areaTotal() . " unidades cuadradas\n";

?>