<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $vocales=0;
    $vocalesMayus = “AEIOU”;
    for ($i = 0; $i < strlen($texto); $i++) { 
 $char = $texto[$i]; 
 if (ctype_alpha($char)) { // Verifica si es una letra 
 if (strpos($vocales_lista, $char) !== false) { 
 $vocales++; 
 } else { 
 $consonantes++; 
 } 
 } elseif (strpos($signos_lista, $char) !== false) { 
 $signos++; 
 } elseif ($char == " ") { 
 $espacios++; 
 } 
}
?>
</body>
</html>