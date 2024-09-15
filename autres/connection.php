<?php

include_once("header.php");

?>


<?php
$servername = "localhost:3307";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=arcadia", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>

<?php

include_once("footer.php");
?>