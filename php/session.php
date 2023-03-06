<?php

session_start();

$_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;
print_r($_SESSION);


//unset($_SESSION['count']);