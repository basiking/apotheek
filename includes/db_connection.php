<?php 

function OpenCon()
    {
        //database info
        $dbhost = "localhost";
        $dbuser = "admin";
        $dbpass = "admin";
        $db = "pharmacy";

        //database connection
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

        return  $conn;
    }

function CloseCon($conn)
    {
        //function that closes db connection
        $conn -> close();
    }

?>