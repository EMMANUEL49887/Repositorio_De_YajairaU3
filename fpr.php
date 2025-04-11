<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--NOMBRE ALUMNO: VALERIA YAJAIRA VARGAS LÒPEZ 
    NO.CONTROL:242310291
    CARRERA: ING. INFORMTAICA
    MAESTRO:Ing.Jesús Salas Marin 
-->
</head>
<body>
    <?php
    include("./header.php")
    ?>
    
    <?php 
    //muestra los numeros del 1 al 10
echo "<h2>Números del 1 al 10 usando for</h2>"; 
// se inicia el ciclo 
for ($i = 1; $i <= 10; $i++) { 
 echo "Número: $i <br>"; 
} 
?>

<?php 
//muestra la tabla de multiplicar del 5
$numero = 5; // Puedes cambiar este valor o pedirlo con un formulario 
echo "<h2>Tabla de multiplicar del $numero</h2>"; 
// se inicia el ciclo 
for ($i = 1; $i <= 10; $i++) { 
 echo "$numero x $i = " . ($numero * $i) . "<br>"; 
} 
?>

<?php 
//crea una lista con los nombres dados 
$nombres = array("Ana", "Carlos", "Beatriz", "Daniel", "Elena");

echo "<h2>Lista de nombres:</h2>"; 
echo "<ul>"; 
// se inicia el ciclo 
for ($i = 0; $i < count($nombres); $i++) { 
 echo "<li>$nombres[$i]</li>"; 
} 
echo "</ul>"; 
?> 

<?php 
//muestra todos los numeros pares del 2 al 20 
echo "<h2>Números pares del 2 al 20</h2>"; 
// se inicia el ciclo 
for ($i = 2; $i <= 20; $i += 2) { 
 echo "$i <br>"; 
} 
?>

</body>
</html>