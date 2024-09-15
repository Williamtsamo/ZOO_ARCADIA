<?php
$index = true;
include_once("header.php");
include_once("connection.php");



?>
<div class="container">
    <h2>Nos Habitats</h2>
</div>

<form  method="post">
<div>
    <label for="date"  ></label>
    <input type="date" name="date">
</div>
<div>
    <label for="text"></label>
    <textarea name="detail"  cols="60" rows="10"></textarea> <br>
</div>
<div>
    <button type="submit">validez</button>
</div>


</form>


<?php
///$name = strip_tags($_POST["date"]); 
//$comment = strip_tags($_POST["detail"]); 
//echo $name;
//echo $comment;


$sql = "INSERT INTO arcadia.avis (pseudo, commentaire)
VALUES ('paul', 'oui')";
$conn->exec($sql);
echo "New record created successfully"
?>

<footer class="bg-info text-center text-lg-start fixed-bottom">
  <!-- Grid container -->
 
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
     Copyright:2023
    <a > </a>
  </div>
  <!-- Copyright -->
</footer>