<?php
require_once "templates/header.php"; // Connexion à la base de données avec PDO via $conn



function afficher_animal($conn, $prenom)
{
    // Requête SQL pour récupérer les informations de l'animal
    $sql = "SELECT animal.prenom, habitat.nom AS habitat_nom, image.image_data, race.nom AS race_nom
            FROM animal
            JOIN habitat ON animal.habitat_id = habitat.habitat_id
            JOIN image ON habitat.image_id = image.image_id
            JOIN race ON animal.race_id = race.race_id
            WHERE animal.prenom = :prenom";

    $stmt = $conn->prepare($sql); // Préparation de la requête

   

    // Exécuter la requête
    $stmt->execute();
    $animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    
    
    
    

    // Libérer les ressources
    $stmt->closeCursor();

    return $animaux; // Retourner les résultats
    
}

// Exemple d'affichage d'un animal
//$animaux = afficher_animal($conn, 'Luna'); // Rechercher l'animal avec le prénom 'Luna'

echo('bonjour');
?>

<div class="container">
    <h3>Informations Animaux</h3>
    <p>Bienvenue !</p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Race</th>
                <th>Image</th>
                <th>Habitat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animaux as $animaux): ?>
                <tr>
                    <td><?= htmlspecialchars($animal['prenom']); ?></td>
                    <td><?= htmlspecialchars($animal['race_nom']); ?></td>
                    <td>
                        <?php if (!empty($animal['image_data'])): ?>
                            <img src="data:image/jpeg;base64,<?= base64_encode($animal['image_data']); ?>" alt="Image de l'animal" style="width: 100px;">
                        <?php else: ?>
                            Pas d'image disponible
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($animal['habitat_nom']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>