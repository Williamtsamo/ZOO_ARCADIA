<?php
include_once("header.php");
?>
<div class="container">
    <h2>se connecter</h2>
    <form action="" method="post">
        <div class="mb-3">
            <label for="username" class="form-label" id="username">username:</label><br>
            <input type="text" name="username">
            </div>
        <div class="mb-3">
            <label for="password" class="form-label" id="password">password:</label><br>
            <input type="text" name="password">
            </div>
        <div class="mb-3">
            <label for="nom" class="form-label" id="nom">nom:</label><br>
            <input type="text" name="nom">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label" id="prenom">prenom:</label><br>
            <input type="text" name="prenom">
        
        </div>
        <input href="login.php" name="loginuser" value="connection" class="btn btn-primary">
        <button type="button" class="btn btn-secondary">s'inscrire</button>
        
    </form>

</div>

<?php

include_once("footer.php");
?>