<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Vétérinaire</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="my-4">Tableau de Bord Vétérinaire</h2>
        <div class="row">
            <div class="col-md-6">
                <form action="veterinaire_dashboard.php" method="post">
                    <div class="form-group">
                        <label for="etat_animal">État de l’animal :</label>
                        <input type="text" class="form-control" id="etat_animal" name="etat_animal" required>
                    </div>
                    <div class="form-group">
                        <label for="nourriture">Nourriture proposée :</label>
                        <input type="text" class="form-control" id="nourriture" name="nourriture" required>
                    </div>
                    <div class="form-group">
                        <label for="grammage">Grammage de la nourriture (en grammes) :</label>
                        <input type="number" class="form-control" id="grammage" name="grammage" required>
                    </div>
                    <div class="form-group">
                        <label for="date_passage">Date de passage :</label>
                        <input type="date" class="form-control" id="date_passage" name="date_passage" required>
                    </div>
                    <div class="form-group">
                        <label for="detail_etat">Détail de l’état de l’animal :</label>
                        <textarea class="form-control" id="detail_etat" name="detail_etat" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Soumettre</button>
                </form>
            </div>
            <div class="col-md-6">
                <h4>Récapitulatif des Données Précédentes</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>État de l’animal</th>
                            <th>Nourriture proposée</th>
                            <th>Grammage</th>
                            <th>Date de passage</th>
                            <th>Détail de l’état</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Exemple de données pour le tableau récapitulatif
                        $data = [
                            ['Bon', 'Foin', 500, '2024-09-18', 'Animal en bonne santé'],
                            ['Moyen', 'Granulés', 300, '2024-09-17', 'Légère fatigue'],
                        ];

                        foreach ($data as $row) {
                            echo "<tr>";
                            foreach ($row as $cell) {
                                echo "<td>" . htmlspecialchars($cell) . "</td>";
                            }
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
