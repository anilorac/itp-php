<?php
class HtmlElement
{
   protected $tag;//Al menos debe exitir este tag, aunque no haya contenido ni atributo.
   protected $content;
   protected $attributes;
   
   /*Constructor No. 1. Si no se pone un constructor php lo crea por default.
   No existe la sobrecarga de métodos en php, por lo que solo debe existir un constructor
   public function __construct($tag)
   {
   $this->tag = $tag;
   }*/
   
    /*Constructor No. 2. Recibe en forma obligatoria un tag, como contenido un arreglo vacío
	y como atributo puede ser un nulo*/
   public function __construct($tag, $attributes = [], $content = null)
   {
   $this->tag = $tag;
   $this->content = $content;
   $this->attributes = $attributes;
   }
   
   /*Zona de funciones ------
   *implode toma un arreglo y lo convierte en cadena, junta sus lementos y los junta con el signo =
   *%s significa el formato es una cadena
   * var_dump muestra el contenido y el tipo de una variable
   */
  /* public function __call($name, $arguments)
   {  
      var_dump($name);
      var_dump($arguments); 
   }*/
   
  /* public function render()
   {
   	       $html = sprintf(
		                    '<%s %s>%s</%s>',
							$this->tag,
							implode('=',$this->attributes), 
							$this->content,
							$this->tag
		                  );
		    return $html;
   }*/
   
   function __get($property)
   {
      if('tag' === $property)
	  {
	   return $this->tag;
	  }
   }
   
   function __set($property, $value)
   {
      if('content' === $property)
	  {
	     $this->content = $value;
	  }
   }
   
   /*public function __toString() 
   {
      return $this->render(); 
   }*/
   
   public function getTag()
   {
      return $this->tag; 
   }
   
   public function getContent()
   {
      return $this->content;
   }
   
   public function getAttributes()
   {
      return $this->attributes;
   }   
}

//Segundo llamado al contructor
//'class' => 'important-link', el operador para arreglos => significa para esta llave corresponde este valor
/*$link = new HtmlElement('a', ['href' => 'http://www.googler.com.mx'],'Google');
echo $link->render(['class' => 'important-link']); //render = imprimir no exite entonces se dispara __call

echo "\n$link->tag\n"; 

$link->content = 'Yahoo';
echo $link; //Con magia, llama ¿esto es string?, si es un objeto, ¿tiene el método toString? si lo imprime, no marca error*/







/*a es tag, href es atributo y Google es el contenido
<a href = "hhtp://www.google.com.mx">Google</a>
<span>Nombre </span> //es vacío
<br> // no tiene contenido*/