<?php
require_once ("classShape.php");

class Triangulo extends Shape{
    
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    
    
    public function calcularArea (){
        $this->area = ($this->width *$this->height)/2;
    }
    public function mostrarArea(){
        echo "el area del triangulo con base $this->width y altura $this->height es  .</br>";
        parent::mostrarArea();
    }
    }
    

?>