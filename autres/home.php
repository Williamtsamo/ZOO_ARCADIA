<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=tutoriel', 'root', '');
    // On utilise un alias, grâce au mot-clé AS
    foreach ($pdo->query('SELECT * FROM users', PDO::FETCH_ASSOC) as $user) {
        // Ici, on utilise le nom de l'alias et non celui de la colonne
        echo $user['pseudo'] . ' ' . $user['message'] . '<br>';
    }
} catch (PDOException $e) {
    echo 'non non';
}
