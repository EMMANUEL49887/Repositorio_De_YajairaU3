<?php 
//NOMBRE ALUMNO: VALERIA YAJAIRA VARGAS LÒPEZ 
//NO.CONTROL:242310291
//CARRERA: ING. INFORMTAICA
//MAESTRO:Ing.Jesús Salas Marin 
// Definimos dos números para comparar 
$numero1 = 20; 
$numero2 = 10; 
$mes = 2;
// Estructura IF 
echo "<h2>Ejemplo con IF</h2>"; 
if ($numero1 < $numero2) { 
 echo "El número $numero1 es menor que $numero2"; 
} 
// Estructura IF-ELSE 
echo "<h2>Ejemplo con IF-ELSE</h2>"; 
if ($numero1 > $numero2) { 
 echo "El número $numero1 es mayor que $numero2"; 
} else { 
 echo "El número $numero1 NO es mayor que $numero2"; 
} 
// Estructura IF-ELSEIF-ELSE con temperatura 
$temperatura = 15; 
echo "<h2>Ejemplo con IF-ELSEIF-ELSE</h2>"; 
if ($temperatura > 30) { 
 echo "Hace mucho calor ��"; 
} elseif ($temperatura >= 15 && $temperatura <= 30) { 
 echo "El clima es agradable ��"; 
} else { 
 echo "Hace frío ��"; 
} 


if ($mes == 12 || $mes == 1 || $mes == 2) { // Invierno (diciembre, enero, febrero)
    if ($temperatura < 10) {
        echo "Hace mucho frío, es invierno ❄️";
    } elseif ($temperatura >= 10 && $temperatura <= 20) {
        echo "Hace frío, pero es invierno 🧣";
    } else {
        echo "Hace un invierno suave 🌨️";
    }
} elseif ($mes == 3 || $mes == 4 || $mes == 5) { // Primavera (marzo, abril, mayo)
    if ($temperatura < 15) {
        echo "Hace algo de frío, es primavera 🌸";
    } elseif ($temperatura >= 15 && $temperatura <= 25) {
        echo "El clima es agradable, primavera en su mejor momento 🌼";
    } else {
        echo "Hace calor, ¡la primavera está intensa! 🌷";
    }
} elseif ($mes == 6 || $mes == 7 || $mes == 8) { // Verano (junio, julio, agosto)
    if ($temperatura < 25) {
        echo "Hace calor, pero no es extremo, es verano 🌞";
    } elseif ($temperatura >= 25 && $temperatura <= 35) {
        echo "Hace mucho calor, ¡verano en su máximo! ☀️";
    } else {
        echo "Hace un calor extremo, ¡es verano ardiente! 🔥";
    }
} elseif ($mes == 9 || $mes == 10 || $mes == 11) { // Otoño (septiembre, octubre, noviembre)
    if ($temperatura < 15) {
        echo "Hace fresco, es otoño 🍂";
    } elseif ($temperatura >= 15 && $temperatura <= 25) {
        echo "El clima es suave, típico del otoño 🍁";
    } else {
        echo "Hace calor, el otoño está raro 🍃";
    }
} else {
    echo "Mes no válido para las estaciones";
}
?>
 