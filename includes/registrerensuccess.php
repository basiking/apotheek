<?php

//check if user came from registreren page
if (isset($_POST["submit"])){

    $gebruikersnaam = $_POST["gebruikersnaam"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];
    
    $dbhost = "localhost";
        $dbuser = "admin";
        $dbpass = "admin";
        $db = "pharmacy";

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

    //require_once 'db_connection.php';
    require_once "./functies.inc.php";

    if (emptyInputSignup($gebruikersnaam, $email, $password, $passwordRepeat) !== false){
        header("location: ../registreren.php?error=emptyInput");
        exit();
        
    }

    if (invalidGebruikersnaam($gebruikersnaam) !== false){
        header("location: ../registreren.php?error=invalidGebruikersnaam");
        exit();
        echo "kanker7";
    }

    if (invalidEmail($email) !== false){
        header("location: ../registreren.php?error=invalidEmail");
        exit();
        echo "kanker8";
    }

    if (pwdMatch($password, $passwordRepeat) !== false){
        header("location: ../registreren.php?error=passwordsdontmatch");
        exit();
        echo "kanker9";
    }

    if (gebruikersnaamExists($conn, $gebruikersnaam, $email) !== false){
        header("location: ../registreren.php?error=usernameTaken");
        exit();
        echo "kanker11";
    }


    createUser($conn, $gebruikersnaam, $email, $password, $passwordRepeat );
    
}
else{
    header("location: ../registreren.php");
    exit();
    //send user back
}



?>