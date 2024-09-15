<?php
function verifyUserLoginPassword(PDO $conn, string $username, string $password):bool|array
{
    $query = $conn->prepare("SELECT * FROM utilisateur WHERE username = :username");
    $query->bindValue(':username', $username, PDO::PARAM_STR);
    $query->execute();
    //fetch() nous permet de récupérer une seule ligne
    $utilisateur = $query->fetch(PDO::FETCH_ASSOC);

    

    //if ($username && password_verify($password, $username['password'])) {
    if ($utilisateur && password_verify($password, $utilisateur['password']))
    
    {
    
      //var_dump(password_verify($password, $utilisateur['password']));
      return $utilisateur;
     } else {
     //email ou mdp incorrect: on retourne false
      return false;
     }
}
