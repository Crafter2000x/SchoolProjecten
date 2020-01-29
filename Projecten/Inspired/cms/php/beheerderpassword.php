<?php
require_once ('../../cms/classes/class_dbcommands.php');


$oDBaction = new dbcommands_class();

    function cleanup($p_sUncleanText){
        $sUncleanText = filter_input(INPUT_POST,$p_sUncleanText, FILTER_SANITIZE_SPECIAL_CHARS);
        $sClean = htmlentities($sUncleanText);
        return($sClean);
    }

    // Start of a session array
    //session_start();
    //$_SESSION['activeMenu'] = "editMenu";
    // Form handling
    if(!empty($_POST)){
        var_dump($_POST);
        $sUsername = cleanup('sUsername');
        $sPassword = password_hash(cleanup('sPassword'), PASSWORD_DEFAULT);
    
        $oDBaction->sPdoQuery = "INSERT INTO tbl_users(`username`,`password`) VALUES ('".$sUsername."','".$sPassword."')";
        $oDBaction->PdoSqlReturnTrue();
        header('location:beheerderloginphp.php');
    }
?>

  <form method="POST">
    
      <br><br><label for="username"><b>USERNAME</b></label>
    <input type="text" id="studentnummer" placeholder="Uw studentnummer" name="sUsername" required>
      
    <br><br><label for="password"><b>PASSWORD</b></label>
    <input type="password" id="fname" placeholder="Uw voornaam..." name="sPassword" required>  
    
    
    <br><br>
    <input type="submit" value="Inschrijven">
  </form>