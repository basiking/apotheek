<?php 

function OpenCon()
    {
        //database info
        $dbhost = "localhost";
        $dbuser = "admin";
        $dbpass = "admin";
        $db = "pharmacy";

        //database connection 
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
        if (!$conn) {
            //give error if database connection fails
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