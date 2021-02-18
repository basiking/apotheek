<?php
include 'includes/head.inc.php';
include 'includes/db_connection.php';
?>


<div class="login col-md-4 col-md-offset-4"> 
<form method="post" action="check.php">
            Gebruikersnaam: <input type="text" name="username" size="20" maxlength="20"><br />
            Wachtwoord: <input type="password" name="wachtwoord" size="20" maxlength="20"><br /><br />
            <input type="submit" value="Log in!" />
        </form><br /><br />

</div>


    </body>
</html>