<?php
class Czlowiek 
{
    //Atrybuty, pola, właściwości
    public ?string $imie; // znak zapytania oznacza, że pole może być nullowe
    private ?string $nazwisko;
    protected int $wiek;
    
    //Metody
    public function __construct(
        $imie, 
        $wiek = 10,
        public ?string $miasto = 'Gdańsk' //constructor property promotion
    ) {
        $this->imie = $imie;
        $this->wiek = $wiek;
        $this->miasto = $miasto;
    }
    public function __destruct()
    {
        echo 'Umarłem';
    }
    public function przywitanie($typ = null) 
    { 
        echo "Siema, jestem " . $this->imie . " " . $this->nazwisko . "<br>";
    }
    public function setNazwisko($nazwisko): string
    {
        return $this->nazwisko = $nazwisko;
    }
    
    # method chaining 
    public function wiek() : Czlowiek
    {
        $this->wiek += 10;
        return $this;
    }
    public function wiekDodaj() : Czlowiek
    {
        $this->wiek += 15;
        return $this;
    }
    
    #Metody statyczne - nie trzeba tworzyć obiektów, zamiast $this używamy self
    public static function statystyczny($kraj = 'Polak'): void
    {
        echo 'statystyczny ' . $kraj . "<br>";
    }

}
$classname = "Czlowiek";
$jankes = new $classname('Jankes', 36); //utworzenie nowego egzemplarza
$jankes->setNazwisko('Polit');
$jankes->przywitanie();
print_r($jankes->wiek()->wiekDodaj());
echo '<br>';
Czlowiek::statystyczny();

unset($jankes);

//  
echo "<hr>";
//  

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
        $this->m3();
    }
}

$b = new B;
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