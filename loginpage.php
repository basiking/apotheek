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
<!doctype HTML>
<html lang ="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">

    <title>Apotheek Dhr. J. Schut</title>

</head>

<body>
<div class="container-fluid">
    <div class="row">
    <div class="offset-sm-1 col-sm-11">
    <a href="home.php"><img src="images/logo.png" alt="logo" class="logo"></a>
    </div>
    </div>
<nav>
<ul class="nav justify-content-center nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="service.php">Service</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="overzicht.php">Voorlichting</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact.php">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="loginpage.php">Login</a>
  </li>
</ul>
</nav>
</div>

        
<div class='container-fluid col-md-4 col-md-offset-4 center_div'>
<h3>Loginpagina</h3>
    <form>
    <div class="form-group">
    <label for="exampleInputEmail1">Gebruikersnaam</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="gebruikersnaam" placeholder="Vul hier uw gebruikersnaam in.">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Wachtwoord</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Vul hier uw wachtwoord in.">
  </div>

  <button type="submit" class="btn btn-primary">Inloggen</button>
    </form>
</div>


    </body>
</html>