<?php
    session_start();
    if($_SESSION['bAccessGranted'] == FALSE){
        header('location:../../mainpage/php/index.php');
    }

   include_once('../../mainpage/php/header.php');

require_once '../../cms/classes/class_dbcommands.php';
$oDBaction = new dbcommands_class();

if(!empty($_POST)){
    if(isset($_GET)){
        $workshopid = $_GET['wsid'];
    }

    $oDBaction->sPdoQuery = "DELETE FROM `tbl_workshops` WHERE `tbl_workshops`.`wsid` = '".$workshopid."'";
    $oDBaction->PdoSqlReturnTrue();
    header('location:beheerdereditphp.php');
}
?>
<link href="../../css/contactstyle.css" rel="stylesheet">
<div class="contactbox">
<form method="POST">
    <h6><center>Weet u zeker dat u deze workshop wilt verwijderen? Deze actie kan niet ongedaan gemaakt worden</h6></center>
    <input type="hidden" value="True" name="iets"><input type="submit" value="Ja">
    <center><a href="beheerdereditphp.php">Terug</a></center>
</form>
</div>
