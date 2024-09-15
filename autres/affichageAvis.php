<!DOCTYPE html>
<html>

<head>
  <style>
    table,
    th,
    td {
      border: 1px solid black;
    }
  </style>
</head>

<body>
  <?php
  include_once("header.php");
  include_once("connection.php")




  ?>
  <?php
  $stmt = $conn->query('SELECT * FROM avis');
  $stmt->setFetchMode(PDO::FETCH_NUM);
  foreach ($stmt as $row) {
    
    echo "<table   ><tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</tr></table>";
  }
  exit()
  ////$sth = $conn->prepare("SELECT pseudo, commentaire FROM avis");
  //$sth->execute();

  // while ($row = $sth -> fetch()) {
  //  printf ("%s (%s)\n", $row[0], $row[1]);
  // }




  ?>

  ?>


  <?php

  include_once("footer.php");
  ?>

</body>

</html>