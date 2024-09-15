<?php

include_once("header.php");
include_once("connection.php");
?>

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
$name = strip_tags($_POST["date"]); 
$comment = strip_tags($_POST["detail"]); 
echo $name;
echo $comment;

$sql = "NSERT INTO 'rapport_veterinaire'
('date', 'detail') VALUES (:date, :detail);"


?>

<?php

include_once("footer.php");
?>