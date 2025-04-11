<?php
// Incluir la clase Persona
require_once 'persona.php';

// Crear el primer objeto de la clase Persona
$persona1 = new Persona();

// Acceder a la propiedad pública
echo "Accediendo directamente a las propiedades del primer objeto:<br>";
echo "Nombre: " . $persona1->nombre . "<br>"; // Accesible

// Intentar acceder a la propiedad privada (esto generará un error)
// echo "Edad: " . $persona1->edad . "<br>"; // Generará un error

// Intentar acceder a la propiedad protegida (esto generará un error)
// echo "DNI: " . $persona1->dni . "<br>"; // Generará un error

// Acceder a las propiedades a través del método mostrarDatos()
echo "<br>Accediendo a las propiedades mediante el método mostrarDatos() del primer objeto:<br>";
$persona1->mostrarDatos();

// Usar métodos getter y setter para acceder a propiedades privadas y protegidas
echo "<br>Accediendo a través de los métodos getter y setter:<br>";
echo "Edad usando getter: " . $persona1->getEdad() . "<br>";
echo "DNI usando getter: " . $persona1->getDni() . "<br>";

// Cambiar la edad y el DNI usando setter
$persona1->setEdad(30);
$persona1->setDni("87654321Y");

echo "<br>Datos actualizados del primer objeto:<br>";
$persona1->mostrarDatos();

// Crear un segundo objeto de la clase Persona con diferentes valores
$persona2 = new Persona();
$persona2->nombre = "Ana"; // Modificamos la propiedad pública directamente
$persona2->setEdad(28);
$persona2->setDni("98765432Z");

echo "<br>Accediendo a las propiedades del segundo objeto:<br>";
$persona2->mostrarDatos();

// Acceder a las propiedades privadas y protegidas del segundo objeto
echo "<br>Edad del segundo objeto: " . $persona2->getEdad() . "<br>";
echo "DNI del segundo objeto: " . $persona2->getDni() . "<br>";

?>
