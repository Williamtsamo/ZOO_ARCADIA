<<?php
  require_once 'templates/header.php'; // Assurez-vous que ce fichier établit la connexion PDO ($conn)
  include_once("lib/pdo.php");
  // Requête SQL pour récupérer tous les animaux
  $sql = "SELECT  prenom, animal_id, habitat_id FROM animal";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <div class="p-3 mb-2 bg-primary-subtle text-primary-emphasis">
  <div class="container px-4 py-5" id="featured-">
    <h2 class="pb-2 border-bottom">Les differents habitats</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3" id="featured-3">
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <div class="card shadow-sm">
            <img src="assets/images/oiseaux.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">


          </div>
        </div>
        <h3 class="fs-2 text-body-emphasis">Savane</h3>
        <div class="container" class="text-center">
          <p class="  p-3 text-secondary-emphasis bg-secondary-subtle border border-secondary-subtle rounded-3" class="text-center">Les animaux de la savane sont adaptés à vivre dans les vastes étendues d'herbes et d'arbustes des régions tropicales et subtropicales. Voici une brève description de quelques-uns de ces animaux :<br>
          <ul>
            <h5>Liste des Animaux de la savane</h5>
            <?php foreach ($animaux as $animal): ?>
              <?php if ($animal['habitat_id'] == 1): ?>
                <li>
                  <!-- Lorsqu'on clique sur le prénom, on est redirigé vers animal.php avec l'id de l'animal -->
                  <a href="animal.php?animal_id=<?= $animal['animal_id']; ?>">
                    <?= htmlspecialchars($animal['prenom']); ?>

                  </a>
                </li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>









        </div>
        <a href="#" class="icon-link">
          Call to action
          <svg class="bi">
            <use xlink:href="#chevron-right"></use>
          </svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <div class="card shadow-sm">
            <img src="assets/images/oiseaux.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">


          </div>
        </div>
        <h3 class="fs-2 text-body-emphasis">Marais</h3>
        <div class="container" class="text-center">
          <p class="  p-3 text-info-emphasis bg-info-subtle border border-info-subtle rounded-3" class="text-center">Le milieu aquatique est un monde vibrant et dynamique, abritant une multitude de créatures, des minuscules planctons aux majestueuses baleines, dans un écosystème interconnecté. Les lacs et les marais offrent une diversité d'habitats où la vie prospère, sous l'influence des courants, des marées et des cycles saisonniers.

          </p>
          <ul>
            <h5>Liste des Animaux des marais</h5>
            <?php foreach ($animaux as $animal): ?>
              <?php if ($animal['habitat_id'] == 2): ?>
                <li>
                  <!-- Lorsqu'on clique sur le prénom, on est redirigé vers animal.php avec l'id de l'animal -->
                  <a href="animal.php?animal_id=<?= $animal['animal_id']; ?>">
                    <?= htmlspecialchars($animal['prenom']); ?>

                  </a>
                </li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
        </div>
        <a href="#" class="icon-link">
          Call to action
          <svg class="bi">
            <use xlink:href="#chevron-right"></use>
          </svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <div class="card shadow-sm">
            <img src="assets/images/oiseaux.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">


          </div>
        </div>
        <h3 class="fs-2 text-body-emphasis">Forêt</h3>
        <div>
          <p class="  p-3 text-success-emphasis bg-success-subtle border border-success-subtle rounded-3" class="text-center">La foret densLes animaux de la savane sont adaptés à vivre dans les vastes étendues d'herbes et d'arbustes des régions tropicales et subtropicales. Voici une brève description de quelques-uns de ces animaux :

          <ul>
            <h5>Liste des Animaux de la foret</h5>
            <?php foreach ($animaux as $animal): ?>
              <?php if ($animal['habitat_id'] == 3): ?>
                <li>
                  <!-- Lorsqu'on clique sur le prénom, on est redirigé vers animal.php avec l'id de l'animal -->
                  <a href="animal.php?animal_id=<?= $animal['animal_id']; ?>">
                    <?= htmlspecialchars($animal['prenom']); ?>

                  </a>
                </li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
        </div>
        <a href="#" class="icon-link">
          Animaux de la forêt
          <svg class="bi">
            <use xlink:href="#chevron-right"></use>
          </svg>
        </a>
      </div>
    </div>
  </div>
  </div>