
<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=arcadia", $username, $password);

$sql =  'SELECT avis_id, pseudo, commentaire FROM avis';
foreach ($conn->query($sql) as $row) {
    print $row['avis_id'] . "---";
    print  $row['pseudo'] . "---";
    print $row['commentaire'] . "<br>";
}
?>