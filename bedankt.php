<?php
include 'includes/head.inc.php';


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$streetName = $_POST['streetName'];
$streetNumber = $_POST['streetNumber'];
$cityName = $_POST['cityName'];
$postalCode = $_POST['postalCode'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$message = $_POST['message'];



$conn = new mysqli('localhost', 'admin', 'admin', 'pharmacy');
if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into contact(firstName, lastName, streetName, streetNumber, cityName, postalCode, phoneNumber, email, message)
    values(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssss", $firstName, $lastName, $streetName, $streetNumber, $cityName, $postalCode, $phoneNumber, $email, $message);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}



?>

<p>Bedankt voor het invullen van het formulier</p>
<p>Klik <a href="home.php">hier</a> om terug te gaan naar de homepagina.</p>

<!-- INSERT INTO `contact` (`contactID`, `firstName`, `lastName`, `streetName`, `streetNumber`, `cityName`, `postalCode`, `phoneNumber`, `email`, `date`, `message`) VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?); -->

<?php
include 'includes/footer.php';
?>