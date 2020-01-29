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
        $sWSTitle = cleanup('sWSTitle');
        $sWSDesc = cleanup('sWSDesc');
        $sWSLocation = cleanup('sWSLocation');
        $sWSDay = cleanup('sWSDay');
        $sWSTime = cleanup('sWSTime');
    
        $oDBaction->sPdoQuery = "INSERT INTO tbl_workshops(`wstitle`,`wsdesc`,`wslocation`,`wsday`,`wstime`) VALUES ('".$sWSTitle."','".$sWSDesc."','".$sWSLocation."','".$sWSDay."','".$sWSTime."')";
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
    
      <br><br><label for="titel"><b>Titel voor de workshop</b></label>
    <input type="text" id="titel" placeholder="Geef hier de titel van de workshop" name="sWSTitle" required>
      
    <br><br><label for="desc"><b>Beschrijving voor de workshop</b></label>
    <input type="text" id="desc" placeholder="Geef hier de beschrijving van de workshop" name="sWSDesc" required>

    <br><br><label for="location"><b>Locatie voor de workshop (Gebouw en Lokaal)</b></label>
    <input type="text" id="location" placeholder="Geef hier de locatie van de workshop" name="sWSLocation" required>

    <br><br><label for="day"><b>Datum waarop de workshop plaatsvind</b></label>
    <input type="text" id="day" placeholder="Geef hier de dag waarop de workshop plaats vind" name="sWSDay" required>
    
    <br><br><label for="time"><b>Tijd van de workshop</b></label>
    <input type="text" id="time" placeholder="Geef hier het tijdstip van de workshop" name="sWSTime" required>

    <!--<br><br><label for="image"><b>Upload een image voor de workshop</b></label><br>
    <input type="file" name="pic" accept="image/*" name="fWSimg" required>-->
    
    <br><br><hr>
    <input type="submit" value="Aanmaken">
  </form>
    <a href="beheerdereditphp.php">Terug</a>
</div>

