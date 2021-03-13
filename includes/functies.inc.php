<?php
function emptyInputSignup($gebruikersnaam, $email, $password, $passwordRepeat){
    $result = true;
    if (empty($gebruikersnaam) || empty($email) || empty($password) || empty($passwordRepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidGebruikersnaam($gebruikersnaam){
    $result = true;
    if (!preg_match("/^[a-zA-Z0-9]*$/" ,$gebruikersnaam )){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result = true;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($password, $passwordRepeat){
    $result = true;
    if ($password !== $passwordRepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function gebruikersnaamExists($conn, $gebruikersnaam, $email){
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../registreren.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $gebruikersnaam, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $gebruikersnaam, $email, $password){
    $sql = "INSERT INTO users (username, password, email) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../registreren.php?error=stmtfailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $gebruikersnaam, $hashedPassword, $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../registreren.php?error=none");
    exit();
}

function emptyInputLogin($gebruikersnaam, $password){
    $result = true;
    if (empty($gebruikersnaam) || empty($password) ){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $gebruikersnaam, $password){
    $gebruikerExists = gebruikersnaamExists($conn, $gebruikersnaam, $gebruikersnaam);

    if ($gebruikerExists === false) {
        header("location: ../loginpage.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $gebruikerExists["password"];
    $checkPassword = password_verify($password, $pwdHashed);

    if ($checkPassword === false){
        header("location: ../loginpage.php?error=wronglogin");
        exit();
    }
    else if ($checkPassword === true){
        session_start();
        $_SESSION["userID"] = $gebruikerExists["userID"];
        $_SESSION["username"] = $gebruikerExists["username"];
        header("location: ../home.php");
        exit();
    }
}