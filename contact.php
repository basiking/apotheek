<?php
include 'includes/head.inc.php';
include 'includes/db_connection.php';
?>

<div class='container-fluid col-md-4 col-md-offset-4 center_div'>
    <h3>Contactpagina</h3>
    <form action='bedankt.php' method='post'>
        <div class="form-group">
            <label for="firstname">Voornaam:</label>
            <input type="text" class="form-control" id="firstName" name="firstName"
                placeholder="Vul hier uw voornaam in">
        </div>
        <div class="form-group">
            <label for="lastname">Achternaam:</label>
            <input type="text" class="form-control" id="lastName" name="lastName"
                placeholder="Vul hier uw achternaam in">
        </div>
        <div class="form-group">
            <label for="streetName">Straat:</label>
            <input type="text" class="form-control" id="streetName" name="streetName"
                placeholder="Vul hier uw straatnaam in">
        </div>
        <div class="form-group">
            <label for="streetNumber">Huisnummer:</label>
            <input type="text" class="form-control" id="streetNumber" name="streetNumber"
                placeholder="Vul hier uw huisnummer in">
        </div>
        <div class="form-group">
            <label for="cityName">Stad:</label>
            <input type="text" class="form-control" id="cityName" name="cityName"
                placeholder="Vul hier uw stad in">
        </div>
        <div class="form-group">
            <label for="postalCode">Postcode:</label>
            <input type="text" class="form-control" id="postalCode" name="postalCode"
                placeholder="Vul hier uw postcode in">
        </div>
        <div class="form-group">
            <label for="phoneNumber">Telefoonnummber:</label>
            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber"
                placeholder="Vul hier uw telefoonnummer in">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email"
                placeholder="Vul hier uw e-mailadres in">
        </div>
        <div class="form-group">
            <label for="message">Bericht:</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Versturen</button>
    </form>
</div>






<?php

include 'includes/footer.php';

?>