<?php
# ABSTRACT Class

# man: https://www.php.net/manual/en/language.oop5.abstract.php
# link: Gio - https://www.youtube.com/watch?v=UnwaW13xJuw
# link: https://kursphp.com/programowanie-obiektowe-php/abstrakcja-static/

/** 
 * wie co, nie wie jak
 * wymusza zaimplementowanie abstrakcyjnych metod w klasie dziedziczącej
 * nie można utworzyć egzemplarza
 * metody
 */ 

abstract class Pojazd {
    private $wlasciciel;
 
    public function setWlasciciel($wlasciciel) {
        $this->wlasciciel = $wlasciciel;
    }
 
    public function getWlasciciel() {
        return $this->wlasciciel;
    }
 
    abstract public function jedz();
    abstract protected function hamuj(): string;
}
 
class Samochod extends Pojazd {
    public function __construct($wlasciciel) {
        $this->setWlasciciel($wlasciciel);
    }

    public function jedz() {
        echo "Jedzie samochod";
    }

    protected function hamuj(): string {
        return "Pedał hamulca";
    }
}
 
class Rower extends Pojazd {
    public function jedz() {
        echo "Jedzie rower";
    }
    public function hamuj(): string
    {
        return 'a';
    }
}

$samochod = new Samochod("Jacek");
$rower = new Rower();
$samochod->jedz(); // wyświetli Jedzie samochod
$rower->jedz(); // wyświetli Jedzie rower