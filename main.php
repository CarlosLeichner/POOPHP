<?php
/*- Ejercicio 2
 Escribe un programa que defina una clase Shape con un constructor que reciba como parámetros el ancho y alto.
 Define dos subclases; Triángulo y Rectángulo que hereden de Shape y que calculen respectivamente
 el área de la forma area().
 
 En el archivo main define dos objetos, un triángulo y un rectángulo y llama al método area de cada uno.*/
 

require_once ("subclassTriangulo.php");

function instanciarTriangulo ($v1, $v2){
    $triangulo = new Triangulo($v1, $v2);
    return $triangulo->triangulo($v1, $v2)."<br>";

}
require_once ("subclassRectangulo.php");

function instanciarRectangulo ($v1, $v2){
    $rectangulo = new Rectangulo($v1, $v2);
    return $rectangulo->rectangulo($v1, $v2)."<br>";

}

echo instanciarRectangulo(30,2);
echo instanciarTriangulo(20,4);
?>