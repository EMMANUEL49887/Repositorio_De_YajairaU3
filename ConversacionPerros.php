<?php
require_once "Perro.php"; // Importar la clase Perro

/**
 * Clase que maneja la conversación entre varios perros.
 */
class ConversacionPerros {
    /**
     * Método que inicia la conversación entre los perros.
     */
    public function iniciar() {
        // Crear instancias de Perro con diferentes razas y nombres
        $sabueso = new Perro("Rufus", "Sabueso");
        $pitbull = new Perro("Titan", "Pitbull");
        $retriever = new Perro("Daisy", "Golden Retriever");

        // Mostrar información de cada perro
        echo "<strong>Información de los perros:</strong><br>";
        echo $sabueso->mostrarDatos() . "<br>";
        echo $pitbull->mostrarDatos() . "<br>";
        echo $retriever->mostrarDatos() . "<br><br>";

        // Simulación de conversación entre los perros
        echo "<strong>Conversación entre los perros:</strong><br>";
        echo $sabueso->ladraAlto("Auuuuuuu") . "<br>"; // El sabueso aúlla
        echo $pitbull->ladraBajo("grrrr...") . "<br>"; // El pitbull gruñe
        echo $retriever->ladra("¡Guau guau guau!") . "<br>"; // El retriever ladra

        echo $pitbull->ladra("¡Ya cállense, perros escandalosos!") . "<br>"; // El pitbull se queja
        echo $retriever->ladraAlto("¡Jugar, jugar, jugar!") . "<br>"; // El retriever está emocionado
        echo $sabueso->ladraBajo("mejor sigo durmiendo...") . "<br>"; // El sabueso prefiere dormir
    }
}

// Crear una instancia de ConversacionPerros y ejecutar la conversación
$conv = new ConversacionPerros();
$conv->iniciar();
?>
