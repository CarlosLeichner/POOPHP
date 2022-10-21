<?php
require_once ("classShape.php");

class Triangulo extends Shape{
    
    
    function __construct($width,  $height){
        parent::__construct($width, $height);
        
    }
    
    /*public function calcularArea (){
        $this->area = ($this->width *$this->height)/2;
        echo "el area del triangulo con base $this->width y altura $this->height es $this->area .</br>";
        
    }*/
    
}

?>