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
        $wiek = 0,
        public ?string $miasto = 'Gdańsk' //constructor property promotion
    ) {
        $this->imie = $imie;
        $this->wiek = $wiek;
        $this->miasto = $miasto;
        echo 'Narodziny: ' . get_class() . '<br>';
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
    
    # Method chaining 
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
    
    # Metody statyczne - nie trzeba tworzyć obiektów, zamiast $this używamy self
    public static function statystyczny($kraj = 'Polak'): void
    {
        echo 'statystyczny ' . $kraj . "<br>";
    }

    # Final function - nie można nadpisywać metody
    # klasa też może być final - nie można jej dziedziczyć
    final public function doRoboty()
    {
        echo 'kiedy weekend';
    }
}
$classname = "Czlowiek";
$jankes = new $classname('Jankes', 36); //utworzenie nowego egzemplarza
$jankes->setNazwisko('Polit');
$jankes->przywitanie();
print_r($jankes->wiek()->wiekDodaj());
echo '<br>';
Czlowiek::statystyczny();
echo '<pre>';
var_dump($jankes);
echo'</pre>';
unset($jankes);

//  
echo "<hr>";
//  

# INHERITANCE - dziedziczenie
class Dziecko extends Czlowiek 
{
    public string $legitymacja = '#001';

    public function __construct()
    {
        parent::__construct('Brajanek');
        echo get_class() . '<br>';
    }
}

$synek = new Dziecko('Brajanek');
$synek->setNazwisko('Polit');
$synek->przywitanie();

echo '<pre>';
var_dump($synek);
echo'</pre>';