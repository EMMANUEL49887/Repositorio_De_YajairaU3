<!DOCTYPE html> 
<html lang="es"> 
<head> 
 <meta charset="UTF-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0">  <title>Práctica de Variables y Constantes en PHP</title> 
</head> 
<!--
    NOMBRE ALUMNO: VALERIA YAJAIRA VARGAS LÒPEZ 
    NO.CONTROL:242310291
    CARRERA: ING. INFORMTAICA
    MAESTRO:Ing.Jesús Salas Marin 
-->
<body> 
 <h1>Uso de Variables y Constantes en PHP</h1> 
 <?php 
 // Definición de variables 
 $nombre = "Valeria Yajaira "; 
 $edad = 20; 
 $ciudad = "Tlaxcala"; 
 $precioProducto = 100; 
 // Definición de una constante 
 Const EMPRESA = "Ventas 3B"; 
 const IVA =16;
 // Mostrando información en la página 
 echo "<p>Nombre del usuario: <strong>$nombre</strong></p>"; 
 echo "<p>Edad: <strong>$edad años</strong></p>"; 
 echo "<p>Ubicación: <strong>$ciudad</strong></p>"; 
 echo "<p>Precio del producto: <strong>$$precioProducto</strong></p>";  echo "<p>Empresa: <strong>" . EMPRESA . "</strong></p>"; 
 ?> 
 <hr> 
 <h2>Operaciones con Variables</h2> 
 <?php 
 // Operaciones matemáticas con variables 
 $precioConDescuento = $precioProducto * 0.9; 
 $Impuesto = ($precioConDescuento * IVA )/100;
 $precioConImpuesto= $Impuesto+$precioConDescuento;
 // Aplicando 10% de descuento  
 echo "<p>Precio con 10% de descuento: <strong>$$precioConDescuento</strong></p>"; 
 echo "<p>Precio con 16% de IVA: <strong>$$precioConImpuesto</strong></p>"; 
 // Concatenación de cadenas 
 $mensaje = "Bienvenido " . $nombre . " a " . EMPRESA . "."; 
 echo "<p>$mensaje</p>"; 

 ?> 
</body> 

</html>
