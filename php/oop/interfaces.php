<?php
//Interfejsy - metody zadeklarowane w interfejsie muszą pojawić się w klasie,
    //która go używa
interface F {
    function m1();
    function m2();
}

class G implements F {
    function __construct() {
        $this->m1();
        $this->m2();
        $this->m3();
    }
    
    function m1() {
        echo "m1<br>";
    }
    function m2() {
        echo "m2<br>";
    }
    function m3() {
        echo "m3<br>";
    }
} 
$g = new G;
