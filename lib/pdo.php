<?php

try {
    // Connexion à PostgreSQL avec PDO
    $conn = new PDO('pgsql:host=cfls9h51f4i86c.cluster-czrs8kj4isg7.us-east-1.rds.amazonaws.com;port=5432;dbname=d15g9n3vdd2bhk', 'u2maj91261kaco', 'p5037b1dd27ab164cf7203f5ec7cbd8c43edabf99c7232fbe51e21e5bbfc39a4e');
    
    // Confirmation de la connexion réussie
    echo "Connected to PostgreSQL database";

    // Configuration du mode d'erreur PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    // Gestion des erreurs de connexion
    echo "Erreur de connexion";
    die('Erreur : ' . $e->getMessage());
}

    } else {
        // Connexion à une base de données locale si JawsDB n'est pas disponible
        $conn = new PDO('mysql:host=localhost:3307;dbname=arcadia;charset=utf8', 'root', '');
        echo "Connected to local database";
    }

    // Configuration du mode d'erreur PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "erreur connexion";
    die('Erreur : ' . $e->getMessage());
}
