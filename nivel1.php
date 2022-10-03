<?php 
    //nivel1 ejercicio 1
    echo "Nivel1 Ejercicio 1 <br>";
    $integer = 10;
    echo $integer, "<br>";
    $double = 20.5;
    echo $double , "<br>";
    $string = "esto es un string";
    echo $string , "<br>";
    $boolean = true;
    echo $boolean, "<br>";
    //nivel1 ejercicio 2
    echo "Nivel1 Ejercicio 2 <br>";
    $messege = 'Hello World! ';
    echo strtoupper($messege), "<br>";
    echo strlen ($messege), "<br>";
    echo strrev($messege), "<br>";
    $messege = 'Hello World! ';
    $messege.= 'Este es el curso de PHP.';
    echo $messege, "<br>";
    //nivel1 ejercicio 3
    echo "Nivel1 Ejercicio 3<br>";
    $name = "Carlos";
    echo "<h1><b>$name</b></h1>" ,"<br>";
    echo "Nivel1 Ejercicio 4<br>";
    $x = 4;
    $y = 6;
    $n = 2.5;
    $m = 4.5;
    echo "<b>Variables $n , $m , $y , $x . </b>","<br>";
    //suma
    echo "la suma de $x + $y es: ", $x + $y, "<br>";
    echo "la suma de $n + $m es: ", $n + $m, "<br>";
    //resta
    echo "la resta de $x - $y es: ", $x - $y, "<br>";
    echo "la resta de $n - $m es: ", $n - $m, "<br>";
    //producto
    echo "el producto de $x * $y es: ", $x * $y, "<br>";
    echo "el producto $n * $m es: ", $n * $m, "<br>";
    //modulo
    echo "el modulo de $x / $y es: ", $x / $y, "<br>";
    echo "el modulo de $n / $m es: ", $n / $m, "<br>";
    echo "el doble de la variable $n = ", $n*2, "<br>";
    echo "el doble de la variable $m = " ,$m*2, "<br>";
    echo "el doble de la variable $x = " ,$x*2, "<br>";
    echo "el doble de la variable $y = ", $y*2, "<br>";
    echo "el doble de cada variables es: $n = ", $n*2," ; $m = " ,$m*2,"; $x = " ,$x*2,"; $y = ", $y*2,"<br>";
    echo "la suma de todas las variables es: ", $n + $m + $x + $y, "<br>";
    echo "el producto de todas las variables es: ", $n * $m * $x * $y, "<br>";
    
    //ejercicio 5
    echo "Ejercicio 5";
    $first = array(2,4,6,8,10);
    $second = array(1,3,5);
    $second[]=7;
    echo "<pre>";
    var_dump($second);
    $arraymerge = array_merge($first,$second);
    var_dump($arraymerge);
    print_r($arraymerge) ;
    //nivel 2 ejercicio 1
    echo "Nivel 2  ejercicio1 <br>" ;
    $x = 1;
    $y = 2;
    $z = 3;
    $w = 2;

    $xy = $x + $y;
    echo $xy, "<br>";
    $yz = $y + $z;
    echo $yz, "<br>";
    if($y == $w){
        $yw = ($y + $w)*2;
        echo $yw, "<br>";
    }
    //nivel 2 ejercicio 2
    echo "Ejercicio2 <br>" ;
    
    /*$string1 = "wxyz";
    $string2 = "a" ;
    $string3 = "ab" ;
    echo substr_replace($string1, 'w', 3) , "<br>"; 
    
    
    echo $string1, "<br>";*/

    //nivel 3 ejercicio 1
    echo "Nivel 3 ejercicio1 <br>" ;
    $str = "Hello world";

    $arr1 = str_split($str);
        print_r($arr1)."<br>";
    //nivel 2 ejercicio 2
    echo "Ejercicio2 <br>";
    //Escribe un programa en PHP que cuenta el número total de veces que un valor existe en el array.
    $ejercicio2= array(1,2,3,2,3,1,4,1,5);
    $contador = array_count_values($ejercicio2);
    echo "<pre>";
    var_dump ($contador);
    //nivel 2 ejercicio 3
    echo "Ejercicio3 <br>";

    $ejercicio3 = array (10, 20, 30, 40, 50);
    unset($ejercicio3[3]);
    echo "<pre>";
    var_dump ($ejercicio3);


    ?>


