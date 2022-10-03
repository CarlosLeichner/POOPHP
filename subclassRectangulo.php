<?php
require_once ("classShape.php");

class Rectangulo extends Shape{
    protected $areaRectangulo;
    function __construct( $width, $height){
        parent::__construct($width, $height);
    }
    public function rectangulo ($width ,$height){
        $areaRectangulo = ($width * $height);
        
        
        return "el area del rectangulo es $areaRectangulo .<br>";
    }
}