<?php

//$avis = getavis($conn);
try
{

    $query = $conn->prepare("INSERT * INTO avis(firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')");
    //$query->bindValue(':id', $id, PDO::PARAM_INT);
    
    $query->exec($conn);
    echo "New record created successfully";
} catch(PDOException $e) 
  {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
  ?>
   



