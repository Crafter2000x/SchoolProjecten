<?php

require_once '../../cms/classes/class_dbcommands.php';


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
        $saTitle = cleanup('saTitle');
        $saDesc = cleanup('saDesc');
    
        $oDBaction->sPdoQuery = "INSERT INTO tbl_activiteiten(`atitle`,`adesc`) VALUES ('".$saTitle."','".$saDesc."')";
        $oDBaction->PdoSqlReturnTrue();
        header('location:beheerdereditphp.php');
    }
?>



<link href="../../css/contactstyle.css" rel="stylesheet">
<br><br><div class="contactbox">
    <div>
        <h5>Hier kan je een workshop toevoegen, deze kan je later bewerken.</h5>
    </div>
  <form method="POST">
    
      <br><br><label for="titel"><b>Titel van de activiteit</b></label>
    <input type="text" id="titel" placeholder="Geef hier de titel van de acitiviteit" name="saTitle" required>
      
    <br><br><label for="desc"><b>Beschrijving van de activiteit</b></label>
    <input type="text" id="desc" placeholder="Geef hier de beschrijving van de activiteit" name="saDesc" required>
    
    <br><br><hr>
    <input type="submit" value="Aanmaken">
  </form>
    <a href="beheerdereditphp.php">Terug</a>
</div>

