<?php
/**
* Departamento.php manda a llamar a datosNomina.php
* 
* Enunciado:
* Para  el proceso de pagos de una empresa se deben agregar la cantidad ganada para cada empleado, 
* calcular el I:V:A(15%) e I.S.R.(10%), mostrar el nombre del empleado, la cantidad ganada, 
* retención de impuestos así como el total pagado a cada empleado.
*/

$message = 'Calcula el sueldo Bruto de un empleado '; 

/*-----------  Captura el vector de datos de los departamentos a los que se les aplicará la Nomina    ----------*/

$deptos =  array 
        (
	'nomDepto1' => 'Tintes',
        array('name'   => 'Dionisio Portillo',
              'sueldo' => 8000, 
             ),
	array('name'   => 'Rafa Espinosa',
              'sueldo' => 10000, 
             ), 
	'nomDepto2' => 'Armado',
        array('name'   => 'Carmen Rojas',
              'sueldo' => 9000, 
             ),
	array('name'   => 'Mariquita Garcia',
              'sueldo' => 12000, 
             ),
       );
print_r($deptos); //exclusivo para imprimir vectores

echo "\nNombre del Empleado |Sueldo Base  |IVA  |ISR  |Sueldo BRUTO";
 
foreach($deptos as $nomDepto => $empleado_i)
{
   echo "\nNombre del Depto: {$deptos['nomDepto1']}\n";

   foreach($empleado_i as $datosEmpleado_i => $valor)
   {
      $nombre = $empleado_i['name'];
      $iva =  $empleado_i['sueldo'] *0.15;
      $isr =  $empleado_i['sueldo'] *0.10; 
      $sueldoFinal = $empleado_i['sueldo']-$iva -$isr;
 
      echo "\n{$empleado_i['name']} \t{$empleado_i['sueldo']} \t$iva \t$isr   \t$sueldoFinal";
   }
}
echo "\n";  
 
?>
