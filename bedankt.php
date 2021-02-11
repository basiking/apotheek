<?php
include 'includes/head.inc.php';
include 'includes/db_connection.php';
?>

<p>Bedankt voor het invullen van het formulier</p>
<p>Klik <a href="home.php">hier</a> om terug te gaan naar de homepagina.</p>

<!-- INSERT INTO `contact` (`contactID`, `firstName`, `lastName`, `streetName`, `streetNumber`, `cityName`, `postalCode`, `phoneNumber`, `email`, `date`, `message`) VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?); -->

<?php
include 'includes/footer.php';
?>