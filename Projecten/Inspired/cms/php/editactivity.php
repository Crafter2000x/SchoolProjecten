<?php
    session_start();
    if($_SESSION['bAccessGranted'] == FALSE){
        header('location:../../mainpage/php/index.php');
    }

   include_once('../../mainpage/php/header.php');

require_once '../../cms/classes/class_dbcommands.php';
$oDBaction = new dbcommands_class();

function cleanup($p_sUncleanText){
    $sUncleanText = filter_input(INPUT_POST,$p_sUncleanText, FILTER_SANITIZE_SPECIAL_CHARS);
    $sClean = htmlentities($sUncleanText);
    return($sClean);
}

if(!empty($_POST)){
    if(isset($_GET)){
        $aActivityID = $_GET['aid'];
    }
    
        $saTitle = cleanup('saTitle');
        $saDesc = cleanup('saDesc');

    $oDBaction->sPdoQuery = "UPDATE `tbl_activiteiten`SET aTitle = '$saTitle', aDesc = '$saDesc' WHERE `tbl_activiteiten`.`aid` = '".$aActivityID."'";
    $oDBaction->PdoSqlReturnTrue();
    header('location:beheerdereditphp.php');
}
?>
<link href="../../css/contactstyle.css" rel="stylesheet">
<div class="contactbox">
    <div>
        <h5>Hier kan je de activiteit bewerken.</h5>
    </div>
  <form method="POST">
    
      <br><br><label for="titel"><b>Titel van de activiteit</b></label>
    <input type="text" id="titel" placeholder="Geef hier de titel van de activiteit" name="saTitle" required>
      
    <br><br><label for="desc"><b>Beschrijving van de activiteit</b></label>
    <input type="text" id="desc" placeholder="Geef hier de beschrijving van de activiteit" name="saDesc" required>

    
    <br><br><hr>
    <input type="submit" value="Bewerken">
  </form>
    <a href="beheerdereditphp.php">Terug</a>
</div>>