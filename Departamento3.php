<?php
/**
* Departamento.php manda a llamar a datosNomina.php
* 
* Enunciado:
* Para  el proceso de pagos de una empresa se deben agregar la cantidad ganada para cada empleado, 
* calcular el I:V:A(15%) e I.S.R.(10%), mostrar el nombre del empleado, la cantidad ganada, 
* retención de impuestos así como el total pagado a cada empleado.
*/

$message = 'Calcula el sueldo Bruto de los empleados de varios departamento '; 

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

$cont = 0;

foreach($deptos as $nomDepto => $empleado_i)
{
   if($cont === 0)
   {
      echo "\nNombre del Depto: {$deptos['nomDepto1']}"; 
	  $cont++;
   }
   else
   {
      echo "\nNombre del Depto: {$deptos['nomDepto2']}"; 
	  $cont++;
   }
   
   nomina_foreach($empleado_i);
}
 

function nomina_foreach($empleados)
{ 
    
   foreach($empleados as $empleado )
   {
      $sueldo = $empleados['sueldo']-  $empleados['sueldo'] *0.15 - $empleados['sueldo'] *0.10; 
       
      echo "{$empleados['name']} |\t$sueldo \n";
   }
}
echo "\n"; 
  
 
?>
