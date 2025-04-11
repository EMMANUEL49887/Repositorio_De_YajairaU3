<?php
//   NOMBRE ALUMNO: VALERIA YAJAIRA VARGAS LÒPEZ
//NO.CONTROL:242310291
//CARRERA: ING. INFORMTAICA
//MAESTRO:Ing.Jesús Salas Marin

class Automovil {

    public $color;

    public $marca;

    public $numeroPuertas;

    private $esCamioneta;

    private $modificarColor;
    // Constructor para inicializar atributos

    public function __construct( $color, $marca, $numeroPuertas, $esCamioneta, $modificarColor ) {

        $this->color = $color;

        $this->marca = $marca;

        $this->numeroPuertas = $numeroPuertas;

        $this->esCamioneta = $esCamioneta;

        $this->modificarColor = $modificarColor;

    }

    // Método para verificar si es camioneta

    public function esCamioneta() {

        return $this->esCamioneta ? 'Sí, es una camioneta' : 'No, no es una camioneta';
    }

    // Método para verificar si quiere cambiar color

    public function cambiarColor() {

        return $this->modificarColor ? 'Sí, se cambia el color  ' : 'No, no se cambia el color';
    }

    // Método para mostrar información del automóvil

    public function mostrarDatos() {

        return "Marca: $this->marca<br> 
 Color: $this->color<br> 
 Número de Puertas: $this->numeroPuertas<br> 
 ¿Es camioneta?: " .
        $this->esCamioneta().'<br> '.
        'cambia Color:' . $this->cambiarColor();
    }

}

?>

