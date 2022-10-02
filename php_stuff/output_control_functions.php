<?php

/**
 * [OL] https://www.php.net/manual/en/function.ob-start.php
 * 
 * [L] http://webmade.org/porady/buforowanie-headers-already-sent-php.php
 * 
 * ![ChR] - is used to remember everything you normally be outputing, but you haven't done anything with that data yet 
 * 
 * ! Turn on output buffering
 * 
 * ! Zbiera wszystkie dane które mają być wysłane do przeglądarki w jednej miennej i trzyma je tam, aż napotka ob_end_flush()
 * 
 */

ob_start();

