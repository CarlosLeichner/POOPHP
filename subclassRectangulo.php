<?php
require_once ("classShape.php");

class Rectangulo extends Shape{
    
    function __construct( $width, $height){
        parent::__construct($width, $height);
        
    }
    /*public function calcularArea (){
        $this->area = ($this->width *$this->height);
        echo "el area del Rectangulo con base $this->width y altura $this->height es $this->area .</br>";
    }*/
    
}