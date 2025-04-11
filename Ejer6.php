<?php

class Caja {
    // Propiedades
    private float $ancho;
    private float $alto;
    private float $largo;

    // Constructor
    public function __construct(float $ancho, float $alto, float $largo) {
        $this->ancho = $ancho;
        $this->alto = $alto;
        $this->largo = $largo;
    }

    // Getters y Setters
    public function getAncho(): float {
        return $this->ancho;
    }

    public function setAncho(float $ancho): void {
        $this->ancho = $ancho;
    }

    public function getAlto(): float {
        return $this->alto;
    }

    public function setAlto(float $alto): void {
        $this->alto = $alto;
    }

    public function getLargo(): float {
        return $this->largo;
    }

    public function setLargo(float $largo): void {
        $this->largo = $largo;
    }

    /**
     * Devuelve una representación en cadena de la Caja.
     * @return string
     */
    public function __toString(): string {
        return "Caja [Ancho: {$this->ancho}, Alto: {$this->alto}, Largo: {$this->largo}]";
    }
}
