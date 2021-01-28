<?php
    //database connection
    include 'db_connection.php';

    $conn = OpenCon();

    //test connection
    //echo "Connected Successfully";

    //sql query
    $sql = "SELECT name, info FROM medicine ORDER BY name DESC";
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