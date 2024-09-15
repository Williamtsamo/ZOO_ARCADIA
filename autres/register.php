<?php
$servername = "localhost:3307";
$username = "root";
$password = "";


$pdo = new PDO("mysql:host=$servername;dbname=arcadia", $username, $password);
$stmt = $pdo->prepare('INSERT INTO utilisateur(  )VALUES (:Username,:password, :nom,:prenom)');



    $stmt->bindValue(':Username', $_POST['Username'], PDO::PARAM_STR);
    $stmt->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
    $stmt->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
    $stmt->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
    $coll = $stmt->execute();

    if ($coll) {
        $message = 'le message a été validé';
    } else {
        $message = 'erreur';
    }

