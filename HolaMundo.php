<?php
/**
* COmentario de varias lineas
*/

$message = 'Hola mundo maravilloso y cruel al mismo tiempoo ';//comentario de una línea

#El punto y comsa dr puede omitir al final de un bloque
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
			'available' => true,]; //arrglo asociativo
 
print_r($product);

echo "\nEste es el precio del producto {$product['price']}\n";
echo $product['name'];

$foo = 'bar';
$$foo = 'baz';

echo "\n$foo";
echo "\n$bar";
?>
