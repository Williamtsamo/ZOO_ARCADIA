<html>
<head>
<meta charset="UTF-8">
<title>TD1</title>
</head>
<body>
<?php

if (!isset($_POST['Nom']) && !isset($_POST['Prenom'])) {
    echo "<FORM action='register.php' method='POST'>";
    echo " Nom : <INPUT type='TEXT' name='Nom' size=10 value=''>";
    echo " Prenom : <INPUT type='TEXT' name='Prenom' size=10 value='' >";
    echo " Nom : <INPUT type='TEXT' name='Nom' size=10 value=''>";
    echo " Prenom : <INPUT type='TEXT' name='Prenom' size=10 value='' >";
    echo "<INPUT type='SUBMIT' value='et hop!'>";
    echo "</FORM>";
} else {
    if (!empty($_POST['Nom']) && !empty($_POST['Prenom'])) {
        echo '<h3>Informations récupérées en utilisant POST</h3>';
        echo 'Nom : ' . $_POST['Nom'] . ' <br> Prenom : ' . $_POST['Prenom'];
    } else {
        $name = isset($_POST['Nom']) ? $_POST['Nom'] : $name ;
        $prenom = isset($_POST['Prenom']) ? $_POST['Prenom'] : $prenom ;
        echo "<FORM action='affiche.php' method='POST'>";
        echo " Nom : <INPUT type='TEXT' name='Nom' size=10 value='". $name ."'>";
        echo " Prenom : <INPUT type='TEXT' name='Prenom' size=10 value='". $prenom ."' >";
        echo " Nom : <INPUT type='TEXT' name='Nom' size=10 value='". $name ."'>";
        echo " Prenom : <INPUT type='TEXT' name='Prenom' size=10 value='". $prenom ."' >";
        echo "<INPUT type='SUBMIT' value='et hop!'>";
        echo "</FORM>";
    }
}
?>