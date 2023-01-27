<?php
# https://www.php.net/manual/en/ref.strings.php

# podmiana znaków
echo str_replace("a", "o", "rabarbar");

echo '<br>';

# usuwa znaczniki HTML
echo strip_tags("<b>bold <i>and</i> bolder</b>");

echo '<br>';

# długość ciągu
echo strlen("Ile znaków ma ten napis?");

echo '<br>';

# traktuje ciąg 'jak tablicę' i liczy od 0 pozycji
echo strpos("To jest tekst, w którym trzeba znaleźć małe T", "t"); //zwraca pozycję szukanego podciągu (w)

echo substr("To jest tekst ");