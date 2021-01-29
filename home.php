<!doctype html>

         <html lang="nl">

         <head>
        <title>apotheek DHR.J.SCHUT</title>
        <meta name="description" content= "beschrijving inhoud">
        <meta charset="iso-8859-1">
        <meta name= "vieuwport" content="width=device-width, initial-scale1.0">

        <style>
        body {font-family: Verdana, sans-serif;}
      header h1 {font-size:1em; margin:0; padding:30px 0; color :#8B4513;}
      header img {float:left; border :0px; padding-right: 5px;}

       nav ul {margin:0; padding:o;}
       nav ul li {display:inline; border-right:1px solit black; margin:0; padding:5px;}
       nav ul li a {color:#8B4513;}
       </style>
        <article>
        </article>






         </head>

         <header> 
            
         </header>
   </style>
      <body>
   <div id="pagina"> 

    <nav>
    </nav>
    <article> 
    <h1> </h1>
    <p>

       <?php
   //database connection
    include 'db_connection.php';

    $conn = OpenCon();

    //test connection
    //echo "Connected Successfully";

    //sql query
    $sql = "SELECT title, content, date FROM news ORDER BY date DESC LIMIT 3";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
        while($row = $result->fetch_assoc()){
            echo "Titel: ". $row['title']. "<br>  " .$row["content"]. "<br>".$row['date']. "<br>";
        }
    }
    else {
        echo "geen resultaten";
    }

    //close connection
    CloseCon($conn);






      ?>
    </p>


    </article>
 
    </div>
       </body>
</html>