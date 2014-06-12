<?php
require 'HtmlElement.php';
require 'HtmlRender.php';

$link = new HtmlElement('a', ['href' => 'http://www.googler.com.mx'],'Google');
$renderer = new HtmlRender();

echo $renderer->render($link);  
echo $link->tag; 

$link->content = 'Yahoo';
echo $renderer->render($link);