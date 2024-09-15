<?php

include("header.php");

?>
<main class="flex-shrink-0">
  <div class="container">
    <form method="post" action="avis.php">

      <h3 class="mt-5">vos impressions</h3>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"  name = "pseudo">date</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label" name = "detail">detail</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <input type="submit" value="envoyer">
      </div>
    </form>
  </div>

</main>
<?php

include_once("footer.php");
?>