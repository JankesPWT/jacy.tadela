<?php
//Klasa z polami i metodami
class Czlowiek {
    
    //Atrybuty, pola, właściwości
    public $imie; 
    public $wiek;
    
    //Metody
    public function witka($typ=null) { 
        echo "No elo" . $typ . "<br>";
    }
    static function glos(string $daj) {
        echo $daj;
    }
}
$classname = "Czlowiek";
$jankes = new $classname;
$jankes->imie = "Jankes ";
echo $jankes->imie;
$jankes->witka();
Czlowiek::glos("siema");

$czlowiek2 = new Czlowiek();
$czlowiek2->imie = "Czesiek ";
echo $czlowiek2->imie;
$czlowiek2->witka("typie");

//  
echo "<hr>";
//Klasa z metodami
class Pies {
    function szczekaj() {
        echo "Hau hau </br>";
    }
    
    function biegaj($ile) {
        echo "biegam $ile minut";
    }
}
$burek = new Pies;
$azor = new Pies;

$burek->szczekaj();
$azor->biegaj(10);

//  
echo "<hr>";
//  
class Klasa {
    public $pole;
    
    function zmien_pole($ile) {
        $this->pole = $ile;
    }
}

$obiekt = new Klasa;
$obiekt->zmien_pole(20);
echo $obiekt->pole;

//  
echo "<hr>";

// Dziedziczenie
//konstruktory nie są dziedziczone
class A {
    public $p1 = "P1</br>";
    private $p2 = "P2</br>";
    protected $p3 = "P3<br>";
    
    public function m1() {
        echo "m1</br>";
    }
    private function m2() {
        echo "m2</br>";
    }
    protected function m3() {
        echo "m3</br>";
    }
}

class B extends A {
    function __construct() {
        echo $this->p1;
        //echo $this->p2;
        echo $this->p3;
        $this->m1();
        //$this->m2();
        //$this->m3();
    }
}

$b = new B;

//  
echo "<hr>";
//Nadpisywanie metod
class Zwierze {
    public $wiek;
    public $spi;
    
    function __construct($w) {
        $this->wiek = $w;
    }
    
    public function przywitaj_sie() {
        echo "Cześć, jestem Zwierze</br>";
    }
    public function ide_spac() {
        echo "Śpię</br>";
        $this->spi = true; 
    }
}
class Pies2 extends Zwierze {
    function __construct($w) {
        $this->wiek = $w;
    }
    function przywitaj_sie() {
        echo "Cześć, jestem Pies</br>";
    }
}

$zwierze = new Zwierze(3);
$pies = new Pies2(4);

$zwierze->przywitaj_sie();
$zwierze->ide_spac();
$pies->przywitaj_sie();
$pies->ide_spac();

//  
echo "<hr>";
//Final - klasa też może być final (nie można jej dziedziczyć)
class C {
    //final function foo1() { //nie można nadpisywać metody z final
    function foo1() {
        echo "ABC<br>";
    }
    function foo2() {
        echo "DEF<br>";
    }
}
class D extends C {
    function foo1() {
        echo "123<br>";
    }
    function foo2() {
        echo "456<br>";
    }
}

$d = new D;
$d->foo1();
$d->foo2();

//  
echo "<hr>";

//Metody statyczne - nie trzeba tworzyć obiektów, nie można w niej używać $this
class E {
    static function kwadrat($liczba) {
        return $liczba*$liczba;
    }
}
echo E::kwadrat(5);

//  
echo "<hr>";

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
//  
echo "<hr>";

//konstruktor & destruktor
class H {
    function __construct() {
        echo "konstr ";
    }
    function __destruct() {
        echo "destr ";
    }
    static function jeden() {
        echo "jeden ";
    }
}
$g = new H;
$g->jeden();
H::jeden();