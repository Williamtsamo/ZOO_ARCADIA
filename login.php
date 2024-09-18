<?php

//include_once("templates/header.php");
require_once 'templates/header.php';
//require_once "lib/session.php";
require_once "lib/pdo.php";
require_once "lib/utilisateur.php";

$errors = [];

//var_dump($_SESSION);
if (isset($_POST['loginUser'])) {

  $utilisateur = verifyUserLoginPassword($conn, $_POST['username'], $_POST['password']);
  if ($utilisateur) {
    echo ('formu ok');

    // on va le connecter => session
    $_SESSION['utilisateur'] = $utilisateur;
    // Vérifier le rôle de l'utilisateur et rediriger en conséquence
    if ($utilisateur['role_id'] == '1') {
      header('location: admin_dashboard.php');
    } elseif ($utilisateur['role_id'] == '2') {
      header('location: veterinaire.php');
      // header('location: index.php');
      //var_dump($username);
    } else {
      header('location: employe.php');
    }
  } else {
    // afficher une erreur
    $errors[] = "Email ou mot de passe incorrect";
  }
  //var_dump($_SESSION);
}
?>



<main class="form-signin w-45 m-auto p=12">
  <div class="container col-xxl-8 px-4 py-5">
    <h1>Se connecter</h1>

    <?php
    foreach ($errors as $error) { ?>
      <div class="alert alert-danger" role="alert">
        <?= $error; ?>
      </div>
    <?php }
    ?>

    <form action="" method="post">
      <div class="mb-3">
        <label for="username" class="form-label">username</label>
        <input type="text" name="username" id="username" class="form-control">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control">
      </div>

      <input type="submit" name="loginUser" value="Connexion" class="btn btn-primary">
    </form>
  </div>
</main>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin=">

<?php
require_once 'templates/footer.php';
//include_once("lib/avis.php");

//$avis = getavis($conn);
//var_dump($avis);
?>