<?php
    //database connection
    include 'db_connection.php';

    $conn = OpenCon();

    //test connection
    //echo "Connected Successfully";

    $sql = "SELECT name, info FROM medicine";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
        while($row = $result->fetch_assoc()){
            echo "naam: ". $row['name']. " - Info: " .$row["info"]. "<br>";
        }
    }
    else {
        echo "geen resultaten";
    }


    CloseCon($conn);
?>