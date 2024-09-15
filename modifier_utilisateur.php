<?php
require_once 'lib/pdo.php';
require_once 'templates/header.php';
// Inclure le fichier de connexion à la base de données

if (isset($_GET['role_id'])) {
    $id = $_GET['role_id'];
    $stmt = $conn->prepare("SELECT * FROM utilisateur WHERE role_id = ?");
    $stmt->execute([$id]);
    $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$utilisateur) {
        echo "Utilisateur non trouvé.";
        exit;
    }
} else {
    echo "ID utilisateur non spécifié.";
    exit;
}

if (isset($_POST['updateUser'])) {
    $username = $_POST['username'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $role_id = $_POST['role_id'];

    $stmt = $conn->prepare("UPDATE utilisateur SET username = ?, nom = ?, prenom = ?, role_id = ? ");
    if ($stmt->execute([$username, $nom, $prenom, $role_id])) {
        echo "Informations de l'utilisateur mises à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour des informations.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier l'utilisateur</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css"> <!-- Inclure votre fichier CSS -->
</head>

<body>
    <div class="container">
        <h4>Modifier l'utilisateur</h4>
        <form action="" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?= htmlspecialchars($utilisateur['username']); ?>">
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" value="<?= htmlspecialchars($utilisateur['nom']); ?>">
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" value="<?= htmlspecialchars($utilisateur['prenom']); ?>">
            </div>
            <div class="mb-3">
                <label for="role_id" class="form-label">Rôle</label>
                <select name="role_id" id="role_id" class="form-control">
                    <option value="1" <?= $utilisateur['role_id'] == 1 ? 'selected' : ''; ?>>Administrateur</option>
                    <option value="2" <?= $utilisateur['role_id'] == 2 ? 'selected' : ''; ?>>Veterinaire</option>
                    <option value="3" <?= $utilisateur['role_id'] == 3 ? 'selected' : ''; ?>>Employé</option>
                </select>
            </div>
            <input type="submit" name="updateUser" value="Mettre à jour" class="btn btn-primary">
        </form>
    </div>
    <div class="container">
        <h4>Administrer forum</h4>
        <form action="" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?= htmlspecialchars($utilisateur['username']); ?>">
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" value="<?= htmlspecialchars($utilisateur['nom']); ?>">
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" value="<?= htmlspecialchars($utilisateur['prenom']); ?>">
            </div>
            <div class="mb-3">

            </div>
            <input type="submit" name="updateUser" value="Mettre à jour" class="btn btn-primary">
        </form>
    </div>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin=">
</body>

</html>
<?php

require_once   'templates/footer.php';
?>