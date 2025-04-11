<?php

//variables string
$nombre = "Juan";

//variable entero
$edad= 25;

//variable flotante
$altura = 1.75;

//variable booleano
$esMayorDeEdad = true;

//constante entera
const PI = 3.1416;
// constante flotante
const  PI2 = 3.1416;
//constante string
const Nombre = "Juan";

//sumando altura mas PI
echo $altura + PI;
echo "\n";
echo "<br>";

// para mostrtar datos (imprimirlos en pantalla)
echo $nombre."tiene".$edad."años tiene".$altura;
echo"<br>";
echo "$nombre tiene $edad años y mide $altura ";
echo"<br>";
echo '$nombre tiene $edad años y mide $altura ';

//operadores
//suma
echo 5+5;
echo "<br>";
//resta
echo 5-5;
echo "<br>";
//multiplicacion
echo 5*5;
echo "<br>";
//divisiom
echo 5/5;
echo "<br>";
//modulo
echo 5%5;
echo "<br>";
//incremento
$edad++;
echo $edad;
echo "<br>";
//decremrnto
$edad --;
echo $edad;
echo "<br>";
//igual (asignacion)
$edad=20;
echo $edad;
echo"<br>";
//no igaul
$edad != 20;
echo $edad;
echo "<br>";
//mayor
$edad > 20;
echo $edad;
echo "<br>";
//menor
$edad < 20;
echo $edad;
echo "<br>";
//mayor o igail
$edad >= 20;
echo $edad;
echo "<br>";
//menor o igaul
$edad <= 20;
echo $edad;
echo "<br>";
//and
$edad = 20;
$nombre ="juan";
if($edad == 20 && $nombre == "juan")
{
    echo "Es juan de 20 años ";
}
else 
{
    echo "no es juan de 20 años ";
}
//operador or || (option + 1)