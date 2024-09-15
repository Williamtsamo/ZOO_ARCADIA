<?php
require_once 'templates/header.php';
require_once 'lib/pdo.php'; // Inclure le fichier de connexion à la base de données

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Préparer la requête de suppression
    $stmt = $conn->prepare("DELETE FROM utilisateur WHERE role_id = ?");
    if ($stmt->execute([$id])) {
        echo "Utilisateur supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression de l'utilisateur.";
    }

    // Rediriger vers la page d'administration après la suppression
    header('Location: admin_dashboard.php');
    exit();
} else {
    echo "ID utilisateur non spécifié.";
    exit();
}
