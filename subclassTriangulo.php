<?php
require_once ("classShape.php");

class Triangulo extends Shape{
    
    
    
    
    public function calcularArea (){
        $this->area = ($this->width *$this->height)/2;
    }
    public function mostrarArea(){
        echo "el area del triangulo con base $this->width y altura $this->height es  .</br>";
        parent::mostrarArea();
    }
    }
    

?>