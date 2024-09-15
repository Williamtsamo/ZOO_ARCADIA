<?php
// afficher les elements
//$avis = getavis($conn);
function getavis(PDO $conn)
{

    $query = $conn->prepare("SELECT * FROM utilisateur ");
    //$query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);

}

//$avis = getavis($conn);

    


