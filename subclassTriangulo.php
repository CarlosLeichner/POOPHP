<?php
require_once ("classShape.php");

class Triangulo extends Shape{
    
    protected $areaTriangulo;
    function __construct($width,  $height){
        parent::__construct($width, $height);
    }
    
    public function calcularAreaTriangulo ($width, $height){
        $areaTriangulo = ($width * $height)/2;
        
        
        return "el area del Triangulo es $areaTriangulo .<br>";
    }
}

?>