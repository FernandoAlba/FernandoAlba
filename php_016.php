<?php
//CADENAS. Su posicion inicial es 0.

//FUNCIONES:
//strlen(); Devuelve la posicion de una cadena
//strtolower(); Convierte toda la cadena a minusculas
//strtoupper(); Convierte toda la cadena a mayusculas
//strcmp(); Compara dos cadenas (sensible a mayusculas y minusculas). Devuelve 0 si son iguales
//strcasecmp(); Compara dos cadenas (insensible a mayusculas y minusculas). Devuelve 0 si son iguales
//substr(); Extraer una parte de la cadena
//str_repeat(); Repiteuna cadena el numero de veces que se especifican
//trim(); Eliminar los espacios en blanco al principio y al final de una cadena
//str_word_count():
//strrev(); Invierte una cadena
//strpos(); Busca un texto dentro de una cadena y devuelve su posicion
//str_replace(); Reemplazar unos caracteres por otros

//Asignar "Hola Mundo!" a una varaible
$texto = "Hola Mundo";

//Contar el numero de palabras
echo "Numero de palabras de $texto:".str_word_count($texto)."<br>";

//Invertir la cadena
echo "Cadena Invertida: ".strrev($texto)."<br>";

//Buscar el texto "Mundo" dentro de la cadena
echo "Posicion de 'Mundo': ".strpos($texto, "Mundo")."<br>";

//Reemplazar 'Mundo' por 'Dolly'
echo "Reemplazo de 'Mundo' por 'Dolly': ".str_replace("Mundo","Dolly", $texto)."<br>";

//Longitud de una cadena
echo "Longitud de la cadena $texto: ".strlen($texto)."<br>";

//Pasar a minusculas
echo "Cadena en minusculas: ".strtolower($texto)."<br>";

//Pasar a mayusculas
echo "Cadena en mayusculas: ".strtoupper($texto)."<br>";

//Comparar cadenas sensibles mayusculas y minusculas
echo "Comparacion de 'Hola' y 'hola': ".strcmp("Hola", "hola")."<br>";

//Comparar cadenas insensibles mayusculas y minusculas
echo "Comparacion de 'Hola' y 'hola': ".strcasecmp("Hola", "hola")."<br>";

//Extraer cinco caracteres a partir del caracter 5
echo "subcadena de tres caracteres de '$texto': a partir del quinto".substr($texto, 5, 3)."<br>";
echo "subcadena de '$texto' a partir del primer caracter: ".substr($texto, 5, 3)."<br>";

//Repetir una cadena
echo "repetir 'Hola' tres veces: ".str_repeat("Hola", 3)."<br>";

//Eliminar espacios en blanco
echo "Cadena con espacios eliminados: ".trim("Onda $texto vital")."<br>";  

?>