<?php 

function OpenCon()
    {
        //database info
        $dbhost = "localhost";
        $dbuser = "admin";
        $dbpass = "admin";
        $db = "pharmacy";

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }

function CloseCon($conn)
    {
        //function that closes db connection
        $conn -> close();
    }

?>