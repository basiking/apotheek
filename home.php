<?php
    include 'includes/head.inc.php';
    include 'includes/db_connection.php';

    $conn = OpenCon();

?>

<!-- content -->

<!-- <div id="carouseleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/slideshow1.jpg" class="d-block w-100" alt="Vrouw in een apotheek">
    </div>
    <div class="carousel-item">
      <img src="images/slideshow2.jpg" class="d-block w-100" alt="Pillen">
    </div>
    <div class="carousel-item">
      <img src="images/slideshow3.jpg" class="d-block w-100" alt="Pillen">
    </div>
    <div class="carousel-item">
      <img src="images/slideshow4.jpg" class="d-block w-100" alt="Pillen">
    </div>
    <div class="carousel-item">
      <img src="images/logo.png" class="d-block w-100" alt="Logo">
    </div>
  </div>
</div> -->

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6 offset-sm-1">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/slideshow1.jpg" class="d-block w-100" alt="Klant bij balie">
          </div>
          <div class="carousel-item">
            <img src="images/slideshow2.jpg" class="d-block w-100" alt="pillen">
          </div>
          <div class="carousel-item">
            <img src="images/slideshow3.jpg" class="d-block w-100" alt="pillen">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>

    <div class="col-sm-3 offset-sm-1">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2413.1075145887817!2d4.792472416125313!3d52.7843693798651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47cf4e258ca8ccdb%3A0x3272ca6e663a9bac!2sROC%20Kop%20Noord-Holland!5e0!3m2!1snl!2snl!4v1612263916324!5m2!1snl!2snl" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
  <div class="row">
    
  </div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-sm-6 offset-sm-1">
<?php  //sql query
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
</div>
</div>
</div>

<?php
    include 'includes/footer.php';
?>