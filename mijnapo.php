<?php
include 'includes/head.inc.php';
?>

<div class='container-fluid col-md-4 col-md-offset-4 center_div'>
<?php
if (isset($_SESSION['userID'])){
    echo "<p>Gebruikersnaam: ".  $_SESSION['username'] . "<br>";
    echo "ID: " . $_SESSION['userID'] . "<br>";
    echo "Email: ".  $_SESSION['email']. "</p>";
  }

?>



</div>


<?php
include 'includes/footer.php';
?>