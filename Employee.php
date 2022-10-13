<?php

/*- Ejercicio 1
Crea una clase Employee, define como atributos su nombre y sueldo. 
Definir un método initialize que reciba como parámetros el nombre y sueldo. 
Plantear un segundo método print que imprima el nombre y un mensaje si debe pagar o no impuestos 
(si el sueldo supera 6000, paga impuestos).*/

class Employee{
    public $nombre ='';
    public $sueldo = 0;
    
    public function __construct($nombre, $sueldo){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }
    public function initialize($nombre, $sueldo){
        
        return "$this->nombre tiene un sueldo de $this->sueldo euros"."<br>" ;}

    public function imprimir($nombre, $sueldo){
        
        if($this->sueldo > 6000){
            echo "$this->nombre Tiene que pagar impuesto.<br>";
            return;

        }else {
            echo "$this->nombre NO tiene que pagar impuesto.<br>"; 
            return;
        }return ;
    }
}
$miobjeto1 = new Employee('carlos', 7000);
echo $miobjeto1 -> initialize('carlos', 7000);
$miobjeto2 = new Employee('eduardo', 5000);
echo $miobjeto2 -> imprimir('eduardo', 5000);





?>