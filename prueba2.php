<?php
include_once 'Ejer2.php';

// Prueba de la clase Caja
$caja = new Caja(3.5, 2.0, 4.0); // Se crea una instancia de la clase con valores iniciales

echo "Ancho: " . $caja->getAncho() . "\n"; // Se obtiene y muestra el ancho inicial
echo "Alto: " . $caja->getAlto() . "\n"; // Se obtiene y muestra el alto inicial
echo "Largo: " . $caja->getLargo() . "\n"; // Se obtiene y muestra el largo inicial

// Se modifican los valores de la caja
$caja->setAncho(5.0);
$caja->setAlto(3.0);
$caja->setLargo(6.0);

echo "Nuevo Ancho: " . $caja->getAncho() . "\n"; // Se obtiene y muestra el nuevo ancho
echo "Nuevo Alto: " . $caja->getAlto() . "\n"; // Se obtiene y muestra el nuevo alto
echo "Nuevo Largo: " . $caja->getLargo() . "\n"; // Se obtiene y muestra el nuevo largo