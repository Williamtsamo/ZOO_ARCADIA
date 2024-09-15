<?php
require_once("templates/header.php");


?>
<DIv class="container">
    <form method="POST">
        <div>
            <label for="pseudo"></label>
            <input type="text" placeholder="entrer pseudo" name="pseudo">
        </div>
        <div>
            <label for="commentaire"></label><br>
            <textarea rows="10" cols="30" placeholder="commentaire" name="commentaire"></textarea>;
            <br><br>
            <input type="submit" name="submit">
        </div>
    </form>
    <?php

    //include_once("connection.php");
    $a = 0;
    // True because $a is set

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST['submit'])) {
        $pseudo = $_POST['pseudo'];
        $commentaire = $_POST['commentaire'];

        $query = " INSERT INTO avis('pseudo','commentaire') VALUES ($pseudo, $commentaire)";
        //$query_run = $conn->prepare($query);
        //$query_exe = $query_run->execute();
        $conn->exec($query);
    }







    ?>