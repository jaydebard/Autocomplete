<?php

// This is the database connection information which should be included anywhere you are pulling a request from the database

// Be sure to enter your own database credentials

$username = '';

$password = '';

try {
    $db = new PDO('mysql:host=hostname;dbname=database-name', $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>