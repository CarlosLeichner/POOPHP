<?php
/*- Ejercicio 2
 Escribe un programa que defina una clase Shape con un constructor que reciba como parámetros el ancho y alto.
 Define dos subclases; Triángulo y Rectángulo que hereden de Shape y que calculen respectivamente
 el área de la forma area().
 
 En el archivo main define dos objetos, un triángulo y un rectángulo y llama al método area de cada uno.*/
 
require_once ("subclassTriangulo.php");

$triangulo = new Triangulo(5,2);
echo $triangulo->triangulo(5,2)."<br>";


require_once ("subclassRectangulo.php");


$rectangulo = new Rectangulo(5,2);
echo $rectangulo->rectangulo(5,2)."<br>";
?>