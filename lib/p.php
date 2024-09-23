<?php
require_once 'templates/header.php'; // Connexion à la base de données via $conn
include_once("lib/pdo.php");
// Vérifier si le l'id de l'animal a été passé dans l'URL
if (isset($_GET['animal_id'])) {
    $animal_id = $_GET['animal_id'];
    var_dump($animal_id);

    // Requête SQL pour récupérer les informations de l'animal en fonction de son prénom
    
    $sql = "SELECT animal.animal_id,animal.prenom, habitat.nom AS habitat_nom, image.image_data, race.nom AS race_nom
           FROM animal
          JOIN habitat ON animal.habitat_id = habitat.habitat_id
          JOIN image ON habitat.image_id = image.image_id
          JOIN race ON animal.race_id = race.race_id
          WHERE animal.animal_id = :animal_id "; 

      // $sql = "SELECT animal_id, prenom, habitat_id from animal"; 

    // Préparation de la requête
    $stmt = $conn->prepare($sql);

    // Associer la valeur du prénom en tant que chaîne de caractères
    $stmt->bindValue(':animal_id', $animal_id, PDO::PARAM_INT);

    // Exécuter la requête
    $stmt->execute();

    // Récupérer les résultats
    $animal = $stmt->fetch(PDO::FETCH_ASSOC);
    
     
      
    // Vérifier si un animal a été trouvé
    
    if ($animal) {
        ?>
                <!DOCTYPE html>
                <html lang="fr">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Détails de l'animal</title>
                </head>
                <body>
                    <h1>Détails de l'animal : <?= htmlspecialchars($animal['prenom']); ?></h1>
        
                    <p><strong>Prénom :</strong> <?= htmlspecialchars($animal['prenom']); ?></p>
                    <p><strong>Race :</strong> <?= htmlspecialchars($animal['race_nom']); ?></p>
                    <p><strong>Habitat :</strong> <?= htmlspecialchars($animal['habitat_nom']); ?></p>
        
                    <?php if (!empty($animal['image_data'])): ?>
                        <img src="data:image/jpeg;base64,<?= base64_encode($animal['image_data']); ?>" alt="Image de l'animal" style="width: 200px;">
                    <?php else: ?>
                        <p>Aucune image disponible pour cet animal.</p>
                    <?php endif; ?>
        
                    <p><a href="index.php">Retour à la liste des animaux</a></p>
                </body>
                </html>
        <?php
            } else {
                echo "Animal non trouvé.";
            }
        } else {
            echo "Aucun animal spécifié.";
        }
        ?>