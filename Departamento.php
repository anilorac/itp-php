<?php
/**
* Departamento.php.php manda a llamar a datosNomina.php
* 
* Enunciado:
* Para  el proceso de pagos de una empresa se deben agregar la cantidad ganada para cada empleado, 
* calcular el I:V:A(15%) e I.S.R.(10%), mostrar el nombre del empleado, la cantidad ganada, 
* retención de impuestos así como el total pagado a cada empleado.
*/

$message = 'Calcula el sueldo Bruto de los empleados de varios departamentos ';  

//-----------  Captura el vector datosNomina que proviene de otro archivo    ----------
$deptos = require 'datosDepartamento.php'; //require es fuerte si no lo encuentra aborta, include manda un warning si no lo encuentra
//$deptos[] = ['Ventas' => []]; // modifica la estructura porque estaría un nivel mas abajo, no funcionaría el ciclo
 $deptos['Ventas'] =[]; //esto si es correcto no rompe la estructura significa  agrega el depto de Ventas, el cual no tiene empleados.
$deptos['Ventas'][] = [
        'name' => 'Roberto Hernandez',
        'sueldo' => 3500,
       ]; 
print_r($deptos); //exclusivo para imprimir vectores 
 
echo "\nNombre | Sueldo | Departamento |IVA | ISR | Total"; 
/*foreach($deptos as $depto => $empleados) 
{
    echo "\nNombre del Depto: {$depto}"; 
	$totalDepto = 0;
	
    foreach($empleados as $empleado )
    {
	  $iva = $empleado['sueldo'] * 0.15;
	  $isr = $empleado['sueldo'] * 0.10;
	  $total = $empleado['sueldo'] -  $iva - $isr;   
      $totalDepto += $total;
	  
      echo "\n{$empleado['name']} |\t{$empleado['sueldo']} |\t";
	  echo "$depto | $iva | $isr | $total";
    }
	echo "\n$totalDepto"; 
}*/

foreach($deptos as $depto => $empleados) 
{
    echo "\nNombre del Depto: {$depto}"; 
	$totalDepto = 0;
	
	/*array_walk ejecuta los ciclos necesarios y se emplea en lugar de un foreach. 
	Con use se pasan los parámetros y esta función se transforma en una función closure
	& es un apuntador pasa por referencia; es decir, usa directamente esa variable*/ 
    array_walk($empleados, function($empleado ) use ($depto,&$totalDepto)
    {
	  $iva = $empleado['sueldo'] * 0.15;
	  $isr = $empleado['sueldo'] * 0.10;
	  $total = $empleado['sueldo'] -  $iva - $isr;   
      $totalDepto += $total;
	  
      echo "\n{$empleado['name']} |\t{$empleado['sueldo']} |\t";
	  echo "$depto | $iva | $isr | $total";
    }); //)Cierra la función
	echo "\n$totalDepto";
}
 



/*-----------------------------------*/
/*foreach($deptos as $nomDepto => $empleado_i) 
{
    echo "\nNombre del Depto: {$nomDepto}"; 
	   
    nomina_foreach($empleado_i);
}
 

function nomina_foreach($empleados)
{ 
    
   foreach($empleados as $empleado )
   {
      $sueldo = $empleados['sueldo']-  $empleados['sueldo'] *0.15 - $empleados['sueldo'] *0.10; 
       
      echo "{$empleados['name']} |\t$sueldo \n";
   }
}*/
echo "\n";
 
?>
