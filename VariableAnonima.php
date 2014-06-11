<?php
//VariableAnonima.php
$mayor = function($a, $b)
{
   if($a > $b)
   {
     return $a;
   }
   else
   {
      return $b;
   };
};

echo $mayor(12,7);
$mayor = 'Hola';
echo "\n$mayor \n";

$numbers = [1,2,4,11,100,5];

//Ordena de menor a mayor
usort($numbers, function($a,$b)
{
   return $a -$b; 
});//deben ser 2 argumentos
print_r($numbers);

//Ordena de mayor a menor
usort($numbers, function($a,$b)
{
   return $b -$a; 
});//deben ser 2 argumentos
print_r($numbers);

//Funcion closure, Ordena de mayor a menor
echo "\nFuncion closure, Ordena de mayor a menor";
$ordering = 'ascendent';

usort($numbers, function($a,$b) use ($ordering)
{
   if('ascendent' === $ordering)
   {
      return $a -$b; 
   }
   return $b -$a; 
});//deben ser 2 argumentos
print_r($numbers);
