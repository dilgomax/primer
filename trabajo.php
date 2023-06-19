<?php

//Declaración de variables

$valor1 = 2000;
$valor2 = 1500;
$valor3 = 1500;

if ($valor1 == $valor2) {
echo 'los valores son iguales';
}
if ($valor1 != $valor2) {
echo 'los valores son distintos';
}
if ($valor1 < $valor2) {
echo 'el valor 1 es menor que el valor 2';
}
if ($valor1 > $valor2) {
echo 'el valor 1 es mayor que el valor 2';
}
if ($valor1 <= $valor2) {
echo 'el valor 1 es menor o igual al valor 2';
}
if ($valor1 >= $valor2) {
echo 'el valor 1 es mayor o igual al valor 2';
}
if ($valor1 == $valor2 && $valor1 != $valor3) {
echo 'el valor 1 es igual al valor 2 y el valor 1 es diferente del valor 3';
}
if ($valor1 == $valor2 || $valor1 <= $valor3) {
echo 'el valor 1 es igual al valor 2 y el valor 1 es menor o igual al valor 3';
}
?>