<?php
    // Start of a session array
    session_start();
    $_SESSION['bAccessGranted'] = FALSE;
    var_dump($_SESSION);
    if(!empty($_POST)){
        $sUsername = htmlspecialchars($_POST['sUsername']);
        $sPassword = htmlspecialchars($_POST['sPassword']);
        echo("Username: ".$sUsername."<br>");
        echo("Wachtwoord: ".$sPassword."<br>");
        //Create a empty array
        $aUserDB = array();
        //Get the current content of the userDB
        $sGetArray = file_get_contents("./userdb.txt");
        //Create a new array record in the UserDB
        if(!empty($sGetArray)){$aUserDB = json_decode($sGetArray,true);}
        // does not work yet!
        foreach ($aUserDB as $sUser){
            
            if ($sUsername == $aUser[0] && password_verify($aUser[2],PASSWORD_DEFAULT)) {
                echo 'Password is valid!';
                $_SESSION['bAccessGranted'] = TRUE;
                header('location:mainpage.php');
            } else {
                echo 'Invalid password.';
            }
        }
    }    
    // Header of the page
    include_once('header.php');
    // Start of the content of the page
    echo("<div class='container-fluid'>");
    // The navbar
    //include_once('menubar.php');
    // Real content of the page
    
    echo("Login pagina");
    echo("<form method='post'>");
        echo("<div class='form-group >");
            echo("<label for='Username'>Gebruikersnaam:</label>");
            echo("<input required type='text' class='form-control' id='Username' name='sUsername'>");
        echo("</div>");
        echo("<div class='form-group'>");
            echo("<label for='Password'>Wachtwoord:</label>");
            echo("<input required type='password' class='form-control' id='Password' name='sPassword'>");
        echo("</div>");
        echo("<input type='submit' value='Verzenden'>");
    echo("</form>");
    echo ("<a href='register.php'>Registreren</a>");
    // End of the real content
    // end of the container
    echo("</div>");
    // Footer of the page
    include_once('footer.php');
?>