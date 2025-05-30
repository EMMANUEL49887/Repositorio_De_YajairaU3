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
     * Calcula el área total de la caja utilizando métodos privados.
     * @return float
     */
    public function areaTotal(): float {
        return 2 * ($this->areaFrontal() + $this->areaSuperior() + $this->areaLateral());
    }

    /**
     * Calcula el área de la cara frontal.
     * @return float
     */
    private function areaFrontal(): float {
        return $this->ancho * $this->alto;
    }

    /**
     * Calcula el área de la parte superior.
     * @return float
     */
    private function areaSuperior(): float {
        return $this->ancho * $this->largo;
    }

    /**
     * Calcula el área del lateral.
     * @return float
     */
    private function areaLateral(): float {
        return $this->alto * $this->largo;
    }
}