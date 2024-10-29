<?php
//EXPRESIONES ARITMETICAS ------------------------------------------------------------------------
//No es necesario inicializar variables en PHP, sin embargo, es muy buena practica. Las variables no inicializadas tienen un valor predeterminadas de acuerdo a su tipo dependiendo del contexto en el que son usadas.
//Las booleanas se asumen como false, los enteros y flotantes como cero, las cadenas (p.ej. usadas en echo) se establecen como una cadena vacia, y los arrays se establecen como un array vacio.

$a = 20;
$b = 3;
$resultado = "0";

echo "-- OPERACIONES -- <br>";

// Suma
$resultado = $a + $b;

echo "SUMA <br>";
echo "$a + $b es $resultado <br>";
echo '$a + $b es $resultado <br><br>'; //Con comilla sola muestra su valor, en vez del resultado.

//Resta
echo "RESTA <br>";
$resultado = $a - $b;
echo "$a - $b es $resultado <br><br>";

//Producto
echo "MULTIPLICACION <br>";
$resultado = $a * $b;
echo "$a * $b es $resultado <br><br>";

//Division
echo "DIVISION <br>";
$resultado = $a / $b;
echo "$a / $b es $resultado <br><br>";

//Division Entera
echo "DIVISION ENTERA <br>";
$resultado = (int)($a / $b);
echo "(int)($a / $b) es $resultado <br><br>";

//Operador Modulo, Es el resto de la Division
echo "RESTO DIVISON <br>";
$resultado = $a % $b;
echo "El resto de dividir $a entre $b es $resultado <br><br>";


//INCREMENTOS y DECREMENTOS ---------------------------------------------------------------------
echo "-- INCREMENTOS -- <br>";

//POST-INCREMENTO: Devuelve el valor y luego lo incrementa.
$resultado = $a++; //$resultado = $a + 1; //$a = $a + 1;
echo "El valor de a con POST-INCREMENTO es: $a. El valor de resultado es $resultado <br>";

//PRE-INCREMENTO
$resultado = ++$a; //1º $a = $a + 1; 2º $resultado = $a
echo "El valor de a con PRE-INCREMENTO es: $a. El valor de resultado es $resultado <br>";

//POST-DECREMENTO
$a = 20;
$resultado = $a--; //resultado = 20; $a = 19
echo "El valor de a con POST-DECREMENTO es: $a. El valor de resultado es: $resultado <br>";

//PRE-DECREMENTO
$a = 20;
$resultado = --$a; //resultado = 20; $a = 19
echo "El valor de a con PRE-DECREMENTO es: $a. El valor de resultado es: $resultado <br><br>";

//ASIGNACION CON OPERADORES ---------------------------------------------------------------------
echo "-- ASIGNACION CON OPERADORES -- <br>";

$a = 20;
$a += 10; //$a = $a + 10;
echo "El valor de 20 += 10 es: $a <br>";

$a = 20;
$a -= 10; //$a = $a - 10;
echo "El valor de 20 -= 10 es: $a <br>";

$a = 20;
$a *= 10; //$a = $a * 10;
echo "El valor de 20 *= 10 es: $a <br>";

$a = 20;
$a /= 10; //$a = $a / 10;
echo "El valor de 20 /= 10 es: $a <br><br>";

//PRIORIDAD DE OPERADORES
echo "-- PRIORIDAD DE OPERADORES -- <br>";

$resultado = 2 + 3 * 5;
echo "El valor de 2 + 3 *5 es $resultado <br>";

$resultado = (2 + 3) * 5;
echo "El valor de (2 + 3) *5 es $resultado <br>";
?>