<?php
    //database connection
    include 'includes/head.inc.php';
    include 'includes/db_connection.php';
   


    //close connection
    
?>

<div class="container-fluid">
    <div class="row">
        <div class="voorlichting-content col-10 offset-1 border border-dark">
            <div>
                <?php
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

                    CloseCon($conn);
                ?>    

            </div>
        </div>
    </div>
</div>



<?php

include 'includes/footer.php';
?>