<?php
// session_start();

// Vérifier si l'utilisateur est connecté et s'il est administrateur
// if (!isset($_SESSION['utilisateur']) || $_SESSION['utilisateur']['role'] != 'admin') {
//     header('location: login.php');
//     exit();
// }

require_once 'lib/pdo.php';
require_once 'templates/header.php';

// Exemple de récupération des utilisateurs depuis la base de données
$sql = "SELECT animal.animal_id AS animal_id, animal.prenom, animal.etat, rapport_veterinaire.repas, rapport_veterinaire.gram, rapport_veterinaire.date
            FROM animal
            INNER JOIN rapport_veterinaire ON animal.animal_id = rapport_veterinaire.animal_id";
$animal = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord vétérinaire</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h4>Tableau de bord vétérinaire</h4>
        <p>Bienvenue, </ /?=htmlspecialchars($_SESSION['utilisateur']['nom']); ?>!</p>

        <h2>Gestion des animaux</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Animal_id</th>
                    <th>Nom Animal</th>
                    <th>État animal</th>
                    <th>Nourriture proposée</th>
                    <th>Grammage</th>
                    <th>Date de passage</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($animal as $animal): ?>
                    <tr>
                        <td><?= htmlspecialchars($animal['animal_id']); ?></td>
                        <td><?= htmlspecialchars($animal['animal.prenom']); ?></td>
                        <td><?= htmlspecialchars($animal['animal.etat']); ?></td>
                        <td><?= htmlspecialchars($animal['repas']); ?></td>
                        <td><?= htmlspecialchars($animal['gram']); ?></td>
                        <td><?= htmlspecialchars($animal['date']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="path/to/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
require_once 'templates/footer.php';
?>