<?php
/**
 * Summary of Matka
 * @author Jacek Jankes Polit <jankes@jankes.com.pl>
 * @copyright (c) 2022
 * @package
 */

class Matka
{
    public function __construct() {
        echo 'Matka ->> konstruktor <br>';
    }
}

class Dziecko
{
    public $nowyObiekt;
    # jako argument musimy przekazać obiekt klasy Matka
    function __construct(Matka $a) {
        $this->nowyObiekt = $a;
        echo 'Dziecko ->> konstruktor';
    }
}

#utworzenie egzemplarza Dziecko z Matką w argumencie
$dziecko = new Dziecko(new Matka);