<?php
//session_start();

// Vérifier si l'utilisateur est connecté et s'il est administrateur
//if (!isset($_SESSION['utilisateur']) || $_SESSION['utilisateur']['role'] != 'admin') {
//   header('location: login.php');
//   exit();
//}

require_once 'lib/pdo.php';
require_once 'templates/header.php';

// Exemple de récupération des utilisateurs depuis la base de données
$utilisateur = $conn->query("SELECT * FROM utilisateur")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Tableau de bord administrateur</h1>
        <p>Bienvenue, <?//= $_SESSION['utilisateur']['username']; //?>!</p>

        <h2>Gestion des utilisateurs</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Usermame</th>
                    <th>Nom d'utilisateur</th>
                    <th>Prénom</th>
                    <th>Rôle</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($utilisateur as $utilisateur): ?>
                    <tr>
                        <td><?= $utilisateur['username']; ?></td>
                        <td><?= $utilisateur['nom']; ?></td>
                        <td><?= $utilisateur['prenom']; ?></td>
                        <td><?= $utilisateur['role_id']; ?></td>
                        <td>
                            <a href="modifier_utilisateur.php? role_id=<?= $utilisateur['role_id']; ?>" class="btn btn-warning">Modifier</a>
                            <a href="suppression_utilisateur.php?role_id=<?= $utilisateur['role_id']; ?>" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin=">
</body>

</html>

<?php
require_once 'templates/footer.php';
?>