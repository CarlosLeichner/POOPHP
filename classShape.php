<?php
/*- Ejercicio 2
 Escribe un programa que defina una clase Shape con un constructor que
 reciba como parámetros el ancho y alto.
 Define dos subclases; Triángulo y Rectángulo que hereden de Shape y que
 calculen respectivamente el área de la forma area().

 En el archivo main define dos objetos, un triángulo y un rectángulo y
 llama al método area de cada uno.*/
abstract class Shape{
    protected $width;
    protected $height;
    protected $area;
    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
       
    }
    public function mostrarArea(){
        echo " el area es $this->area.</br>";
    }

    public function calcularAreaTriangulo (){
        $this->area = ($this->width *$this->height)/2;
    }
    public function calcularAreaRectangulo (){
        $this->area = ($this->width *$this->height);
    }
    /*public function  calcularAreaRectangulo(){
        echo "el area del rectangulo es "($this->width * $this->height)."</br>";
    }
    public function  calcularAreaTriangulo(){
        echo "el area del Triangulo es "(($this->width * $this->height)/2)."</br>";
    }*/
    
}

?>