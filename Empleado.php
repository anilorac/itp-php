<?php
/**
* Empleado.php manda a llamas datosEmpleado.php
* Enunciado:
* Para el proceso de pago de un empleado se debe de ingresar la cantidad ganada. 
* Al ingresar la cantidad se tienen que calcular los impuestos, tales como I.V.A (15%) e I.S.R (10%), 
* mostrando la cantidad de los impuestos y el sueldo total para el empleado.
*/

$message = 'Calcula el sueldo Bruto de un empleado '; 

 

//-----------  Sentencia return desde el programa datosEmpleado.php  ----------
$xdatos = require 'datosEmpleado.php'; //require es fuerte si no lo encuentra aborta, include manda un warning si no lo encuentra
print_r($xdatos);
$nombre = $xdatos['name'];
$iva =  $xdatos['sueldo'] *0.15;
$isr =  $xdatos['sueldo'] *0.10; 
$sueldoFinal = $xdatos['sueldo']-$iva -$isr;

echo "\n nombre del Empleado: {$xdatos['name']}";
echo "\nsueldo =  {$xdatos['sueldo']} \niva = $iva \nisr = $isr";
echo "\nSueldo final = $sueldoFinal";
?>
