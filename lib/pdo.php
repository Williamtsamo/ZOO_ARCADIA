<?php

try {
    $conn = new PDO('mysql:dbname=arcadia;host=localhost:3307;charset=utf8', "root", "");
    // set the PDO error mode to exception
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected";
} catch (PDOException $e) {

    die('Erreur : ' . $e->getMessage());
}

?>