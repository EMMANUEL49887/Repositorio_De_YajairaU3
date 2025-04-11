<?php
include_once 'Ejer3.php';

// Prueba de la clase Caja
$caja = new Caja(3.5, 2.0, 4.0); // Se crea una instancia de la clase con valores iniciales

echo "Área total de la caja: " . $caja->areaTotal() . "\n"; // Se calcula y muestra el área total
