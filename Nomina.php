<?php
/**
* Nomina.php manda a llamar a datosNomina.php
* 
* Enunciado:
* Para  el proceso de pagos de una empresa se deben agregar la cantidad ganada para cada empleado, 
* calcular el I:V:A(15%) e I.S.R.(10%), mostrar el nombre del empleado, la cantidad ganada, 
* retención de impuestos así como el total pagado a cada empleado.
*/

$message = 'Calcula el sueldo Bruto de un empleado '; 

//-----------  Captura el vector datosNomina que proviene de otro archivo    ----------
$xdatos = require 'datosNomina.php'; //require es fuerte si no lo encuentra aborta, include manda un warning si no lo encuentra
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
//-----------  Segunda forma de recorrer el vector Captura el vector datosNomina que proviene de otro archivo    ----------
 
echo "\nNombre del Empleado | Sueldo BRUTO\n";
foreach($xdatos as $empleado)
{
   $sueldo = $empleado['name']-  $empleado['sueldo'] *0.15 - $empleado['sueldo'] *0.10; 
   
   echo "{$empleado['name']} |\t$sueldo \n";
}

//-----------  3a. forma de recorrer el vector desde una función    ----------

nomina_foreach($xdatos);

function nomina_foreach($empleados)
{ 
   echo "\nDesde una Function\nNombre del Empleado | Sueldo BRUTO\n";
   
   foreach($empleados as $empleado)
   {
      $sueldo = $empleado['name']-  $empleado['sueldo'] *0.15 - $empleado['sueldo'] *0.10; 
       
      echo "{$empleado['name']} |\t$sueldo \n";
   }
}

//-----------  4a. forma de recorrer el vector desde una función con for    ----------
nomina_for($xdatos);

function nomina_for($empleados)
{
  echo "\nDesde una Function con for\nNombre del Empleado | Sueldo BRUTO\n";
 
  //Observar que ahora se emplea directamente el vector $empleados a lo largo del for
  for ($i = 0; $i < count($empleados); $i++)
   {
      $sueldo = $empleados[$i]['name']-  $empleados[$i]['sueldo'] *0.15 - $empleados[$i]['sueldo'] *0.10; 
       
      echo "{$empleados[$i]['name']} |\t$sueldo \n";
   }
}

//-----------  5a. forma de recorrer el vector desde una función con while    ----------

nomina_while($xdatos);

function nomina_while($empleados)
{
  echo "\nDesde una Function con while\nNombre del Empleado | Sueldo BRUTO\n"; 
 
  //Observar que ahora se emplea directamente el vector $empleados a lo largo del while
  $i = 0;
  while( $i < count($empleados) )
   {
      $sueldo = $empleados[$i]['name']-  $empleados[$i]['sueldo'] *0.15 - $empleados[$i]['sueldo'] *0.10; 
       
      echo "{$empleados[$i]['name']} |\t$sueldo \n";
	  $i++;
   }
 } 
 
//-----------  6a. forma de recorrer el vector desde una función con while    ----------

   nomina_ParametroOpcional($xdatos, 0.16);
   
   //Notar que mandó 2 argumentos, puede mandar 1m2 o 3. El que toma son los que pasa, el resto lo toma del encabezado
   //Solo un parámetro es obligatorio $xdatos
   function nomina_ParametroOpcional($empleados,$porcentajeIVA = 0.15, $porcentajeISR = 0.1)
   {
    echo "\nDesde una Function con Parametro Opcional\nNombre del Empleado | Sueldo BRUTO\n"; 
 
    //Observar que ahora se emplea directamente el vector $empleados a lo largo del while
    $i = 0;
    while( $i < count($empleados) )
    {
      $sueldo = $empleados[$i]['name']-  $empleados[$i]['sueldo'] *$porcentajeIVA - $empleados[$i]['sueldo'] *$porcentajeISR; 
       
      echo "{$empleados[$i]['name']} |\t$sueldo \n";
	  $i++;
    }
   }
 //-----------   función con parámetros 1,2...n    ----------  
 function suma()
 {
   $suma = 0;
   echo "\nFunction con Parametros Opcionales 1,2,.. hasta n parametros\n"; 
 
   foreach(func_get_args() as $number)
   {
     if (!is_numeric($number)) continue;
     $suma +=$number;
   }
   
   return $suma;
 }
 echo suma(2,5,6,7,8,10);
 echo suma();
 echo suma('yuyuyu',98,true); 
?>
