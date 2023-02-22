<?php
# INTERFACES

# man: https://www.php.net/manual/en/language.oop5.interfaces.php
# link: https://www.youtube.com/watch?v=-AJic0FjuAA

/**
 * metody zadeklarowane w interfejsie muszą pojawić się w klasie, która go używa
 * nie można mieć pól, ale można mieć stałe
 */

interface PojazdInterface
{
  public function jedz();
  public function tankuj(int $ilePaliwa);
}

class Maluch implements PojazdInterface {
  private int $iloscPaliwa;

  public function jedz() {
    echo "Maluch się toczy";
  }

  public function tankuj(int $ilePaliwa) {
    $this->iloscPaliwa += $ilePaliwa;
    if ($this->iloscPaliwa > 21)
      echo "Przelany";
  }
}

class Porshe implements PojazdInterface {
  public function jedz() {
    echo "Porshe jedzie bardzo szybko";
  }

  public function tankuj(int $ilePaliwa) {
    if ($ilePaliwa < 10)
      echo "Jeździsz Porshe, a na benzynę Cię nie stać?";
  }
}
$auto1 = new Maluch;
$auto2 = new Porshe;