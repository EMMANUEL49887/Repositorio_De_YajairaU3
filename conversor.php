<?php
class Conversor {
    // Método estático para convertir Celsius a Fahrenheit
    public static function celsiusAFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }
}