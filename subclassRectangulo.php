<?php
require_once ("classShape.php");

class Rectangulo extends Shape{
    
    
    public function calcularArea (){
        $this->area = ($this->width *$this->height);
    }
    public function mostrarArea(){
        echo "el area del rectangulo con base $this->width y altura $this->height es  .</br>";
        parent::mostrarArea();
    }
    }
    
