<?php



//try {
//    $conn = new PDO('mysql:dbname=arcadia;host=localhost:3307;charset=utf8', "root", "");
// set the PDO error mode to exception
//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connected";
//} catch (PDOException $e) {

//   die('Erreur : ' . $e->getMessage());
//}


try {
    if (getenv('JAWSDB_URL') !== false) {
        $dbparts = parse_url(getenv('JAWSDB_URL'));

        // Connexion à JawsDB via PDO
        $hostname = $dbparts['mfplywfpf75qwuaz@gx97kbnhgjzh3efb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'];
        $username = $dbparts['e00pkwpgqc7iz7dk'];
        $password = $dbparts['mfplywfpf75qwuaz'];
        $database = ltrim($dbparts['nvpri7rto4mc24hf'], '/');


        // Création de la connexion PDO avec JawsDB
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
        echo "Connected to JawsDB";
    } else {
        // Connexion à une base de données locale si JawsDB n'est pas disponible
        $conn = new PDO('mysql:host=localhost:3307;dbname=arcadia;charset=utf8', 'root', '');
        echo "Connected to local database";
    }

    // Configuration du mode d'erreur PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "erreur connexion";
    die('Erreur : ' . $e->getMessage());
}
