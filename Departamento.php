<?php
/**
* Departamento.php.php manda a llamar a datosNomina.php
* 
* Enunciado:
* Para  el proceso de pagos de una empresa se deben agregar la cantidad ganada para cada empleado, 
* calcular el I:V:A(15%) e I.S.R.(10%), mostrar el nombre del empleado, la cantidad ganada, 
* retención de impuestos así como el total pagado a cada empleado.
*/

$message = 'Calcula el sueldo Bruto de un empleado '; 

//-----------  Captura el vector datosNomina que proviene de otro archivo    ----------
$xdatos = require 'datosDepartamento.php'; //require es fuerte si no lo encuentra aborta, include manda un warning si no lo encuentra
print_r($xdatos); //exclusivo para imprimir vectores

echo "\nNombre del Empleado Sueldo Base  IVA  ISR  Sueldo BRUTO";
foreach($xdatos as $field => $value)
{
   $nombre = $value['name'];
   $iva =  $value['sueldo'] *0.15;
   $isr =  $value['sueldo'] *0.10; 
   $sueldoFinal = $value['sueldo']-$iva -$isr;
 
   echo "\n{$value['name']} \t{$value['sueldo']} \t$iva \t$isr   \t$sueldoFinal";
}
echo "\n";
 
?>
