<?php
require_once '<templates/header.php'; // Connexion à la base de données via $conn
include_once("lib/pdo.php");
// Vérifier si le l'id de l'animal a été passé dans l'URL
if (isset($_GET['animal_id'])) {
    $animal_id = $_GET['animal_id'];
    var_dump($animal_id);
} else {
    die('Error: animal_id not provided');
}

try {

    $sql = "SELECT a.prenom, 
       r.nom AS race, 
       h.nom AS habitat, 
       i.image_data AS image
FROM animal a
LEFT JOIN race r ON a.animal_id = r.animal_id
LEFT JOIN animal_habitat ah ON a.animal_id = ah.animal_id
LEFT JOIN habitat h ON ah.habitat_id = h.habitat_id
LEFT JOIN image i ON h.habitat_id = i.habitat_id
WHERE a.animal_id = :animal_id;";

    $stmt = $conn->prepare($sql);

    $stmt->bindValue(':animal_id', $animal_id, PDO::PARAM_INT);

    $stmt->execute();


    $animal = $stmt->fetch(PDO::FETCH_ASSOC);

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
            <p><strong>habitat :</strong> <?= htmlspecialchars($animal['habitat']); ?></p>
            <p><strong>Race :</strong> <?= htmlspecialchars($animal['race']); ?></p>
            <p><strong>image :</strong> <?= htmlspecialchars($animal['image']); ?></p>


            <?php if (!empty($animal['image_data'])): ?>
                <img src="assets/images/les fauves.jpg" ,<?= base64_encode($animal['image_data']); ?> alt="Image de l'animal" style="width: 200px;">
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
} catch (PDOException $e) {
    // Handle database connection or execution errors
    echo "Error: " . $e->getMessage();
}


?>