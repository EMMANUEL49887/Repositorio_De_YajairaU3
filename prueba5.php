<?php
include_once 'Ejer5.php';
// Prueba de la clase Caja
$cajaOriginal = new Caja(4.0, 3.0, 5.0); // Se crea una caja original

// Se crea una caja un 25% más grande
$cajaGrande = $cajaOriginal->cajaMasGrande();
echo "Caja más grande - Ancho: " . $cajaGrande->getAncho() . "\n";
echo "Caja más grande - Alto: " . $cajaGrande->getAlto() . "\n";
echo "Caja más grande - Largo: " . $cajaGrande->getLargo() . "\n";

// Se crea una caja un 25% más pequeña
$cajaPequena = $cajaOriginal->cajaMasPequena();
echo "Caja más pequeña - Ancho: " . $cajaPequena->getAncho() . "\n";
echo "Caja más pequeña - Alto: " . $cajaPequena->getAlto() . "\n";
echo "Caja más pequeña - Largo: " . $cajaPequena->getLargo() . "\n";
