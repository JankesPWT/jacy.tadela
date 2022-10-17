<?php
# https://www.php.net/manual/en/book.pdo.php

#połączenie z bazą
$pdo = new PDO($dsn, $user, $password);

# włączanie opcji
# https://www.php.net/manual/en/pdo.setattribute.php
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

/* PDO::ATTR_ERRMODE - Włącza raportowanie błędów. 
        Can take one of the following values:
        PDO::ERRMODE_SILENT    - Only sets error codes.
        PDO::ERRMODE_WARNING   - Raises E_WARNING diagnostics.
        PDO::ERRMODE_EXCEPTION - Throws PDOExceptions.
        
 * PDO::ERRMODE_EXCEPTION
 * PDO::ATTR_DEFAULT_FETCH_MODE
 * PDO::FETCH_ASSOC
 */