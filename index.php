<?php

//include_once("templates/header.php");
require_once  "templates/header.php";
//require_once("lib/avis.php");

//$avis = getavis($conn);
//var_dump($avis);
$hash = password_hash('alino', PASSWORD_DEFAULT);
var_dump($hash)
?>

<?php
include_once 'templates/caroussel.php';
?>

<?php
include_once 'monAvis.php';
?>

<?php

require_once   'templates/footer.php';
?>