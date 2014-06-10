<?php
/**
* COmentario de varias lineas
*/

$message = 'Hola mundo maravilloso y cruel al mismo tiempoo ';//comentario de una línea

#El punto y coma se puede omitir al final de un bloque
ECHO "$message\n";

define('PUBLISHER','Springer ');
echo PUBLISHER;

$pi = 0.0314E2;
echo "\n$pi\n";
echo '\n$pi';

$people = ['Luis','miriam','Noé',1234,false,[2]];
print_r($people);//función que da formato a los elementos de un arreglo

$old = array(1,2,3,4,5);
print_r($old);

$product = ['name' => 'ajax',
            'price' => 230,
			'available' => true,]; //arreglo asociativo porque los indices del vector no son índices numéricos
 
print_r($product);

echo "\nEste es el precio del producto {$product['price']}\n";
echo $product['name'];

$foo = 'bar';
$$foo = 'baz';

echo "\n$foo";
echo "\n$bar";

$bigVariable = 'PHP';
$short = &$bigVariable;// & apuntador
$bigVariable .= '  Rocks!'; //Con puntito pega la cadena  Rock! al final de la variable $bigVariable

//equivale a 
$bigVariable2 = $bigVariable .'  Rocks!'; 
echo "Short is $short";
echo "\nLong is $bigVariable";
echo "\nCadena concatenada con +  $bigVariable2";

 

//Función con una variable estática
function update_counter()
{
  static $counter;
  $counter++;
  echo "\nStatic: $counter";
}
$counter = 10;
update_counter();
update_counter();
echo "\nDesde PP segunda vez $counter";

function greet($name)
{
  echo "\nSaludar: Hello, {$name}\n";
}

greet("Janet");

$age = 30;
var_dump($age); //Con esta función devuelve el tipo

$age = (string)$age;
var_dump($age);

$age = (boolean) $age;
var_dump($age);

$age = (array) $age;
var_dump($age);

var_dump('10'== 10); //conversión implícita
var_dump(10 == '10'); //conversión implícita
var_dump('10' === 10); //conversión implícita
var_dump('5' . 5); //puntito concatena operador opara cadenas
var_dump('2' + 2); //conversión implícita


//-----------  Estructuras de control if ----------
$password = 'Letmein';
if($password === 'letmein')
{
 echo 'Passwoerd is correct';
}
else
   {
     echo 'Try again';
   }

//-----------  Estructura de control switch ----------
$color = 'red';
switch($color)
{
   case 'green': echo 'Green';
                 break;
   case 'blue':  echo 'blue';
		         break;
   default:
		    echo "\n$color";
}

//-----------  Estructura de control foreach ----------
foreach($product as $field => $value)
{
  echo "\n$field: $value";
}

//-----------  Sentencia return ----------
function test()
{
 $parameter1 = 'foo';
 $parameter2 = 'far';
 
 if ($parameter1 == 'baz')
 {
   die('Terminate script');
 }
  
 return "$parameter1 $parameter2";
}

//return 'Luis'; //aquí termina la ejecución
test();
echo test();
//exit(0);

//-----------  Sentencia return desde el programa configuracion.php  ----------
$configuration = require 'configuracion.php'; //require es fuerte si no lo encuentra aborta, include manda un warning si no lo encuentra
print_r($configuration);

?>
