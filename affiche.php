<?php
include_once("templates/header.php");
require_once 'lib/avis.php';
//$avis = getavis($conn);


?>
<table class="table ">
    <thead>
        <tr>
            <th scope="col">Username</th>
            <th scope="col">passeword</th>
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($avis as $row) {
            echo "<tr><td>" . $row["Username"];
            echo "</td><td>" . $row["password"];
           echo "</td><td>". $row["nom"];
           echo "</td><td>" . $row["prenom"];
        }
        ?>
    </tbody>
</table>