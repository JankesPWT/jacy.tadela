<?php

function replace_titles($tekst) {
    //tablice znaków
    $search=array(' ', '/', '\'', '&', '%', 'ć', 'ś', 'ą', 'ż', 'ó', 'ł', 'ś', 'ź', 'ń', 'ę',);
    $replace=array('_', '-', '-', 'and', 'procent', 'c', 's', 'a', 'z', 'o', 'l', 's', 'z', 'n', 'e',);
    $tekst = strtolower($tekst); // zamienia wszystkie litery na małe
    $tekst = html_entity_decode($tekst); // zamienia znaki na znaki html
    $tekst = str_replace($search, $replace, $tekst); // zamienia znaki z tablic
    return $tekst; //zwraca przekształcony tekst
}