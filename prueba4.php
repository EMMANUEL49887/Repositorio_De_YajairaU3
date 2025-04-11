<?php
include_once 'Ejer4.php';
// Prueba de la clase Caja
$cajaOriginal = new Caja(3.5, 2.0, 4.0); // Se crea una instancia original
$cajaCopia = Caja::copiarCaja($cajaOriginal); // Se copia la caja original

// Se muestran los valores de la caja copiada
echo "Caja copiada - Ancho: " . $cajaCopia->getAncho() . "\n";
echo "Caja copiada - Alto: " . $cajaCopia->getAlto() . "\n";
echo "Caja copiada - Largo: " . $cajaCopia->getLargo() . "\n";