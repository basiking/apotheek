<?php 

include "includes/db_connection.php";
include "includes/head.inc.php";

?>

<div class='container-fluid col-md-4 col-md-offset-4 center_div'>
<h3>Registreren</h3>
    <form action="registrerensuccess.php" method="post">
    <div class="form-group">
    <label for="exampleInputEmail1">Gebruikersnaam</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="gebruikersnaam" placeholder="Vul hier uw gebruikersnaam in." name="gebruikersnaam">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Vul hier uw email in." name="email" >
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Wachtwoord</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Vul hier uw wachtwoord in." name="password">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Wachtwoord herhalen</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Vul hier nog een keer uw wachtwoord in." name="passwordRepeat">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Registreren</button>
  <small id="register" class="form-text text-muted">Al een account? Klik <a href="loginpage.php">hier</a> hier om in te loggen.</small>
    </form>
</div>


    </body>
</html>


<?php
  include 'includes/footer.php';
?>