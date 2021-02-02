<?php
    //database connection
    include 'includes/head.inc.php';
    include 'includes/db_connection.php';
    $conn = OpenCon();
    //sql query
    $sql = "SELECT name, info FROM medicine ORDER BY name ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
        while($row = $result->fetch_assoc()){
            echo "Naam: ". $row['name']. " - Info: " .$row["info"]. "<br>";
        }
    }
    else {
        echo "geen resultaten";
    }

    //close connection
    CloseCon($conn);
?>