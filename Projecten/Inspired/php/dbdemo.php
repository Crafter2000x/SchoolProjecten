<?php

require_once 'class_dbcommands.php';

$oDBaction = new dbcommands_class();

$oDBaction->sPdoQuery = "SELECT * FROM myDatabaseTable";
$aTablecontent = $oDBaction->PdoSqlReturnArray();

foreach($aTablecontent as $aTablerow){
    echo($aTablerow[0]."<br>");
}

$oDBaction->sPdoQuery = "INSERT INTO myDatabaseTable (`username`,`password`) VALUES ('".$sUsername."','".$sPassword."')";
$oDBaction->PdoSqlReturnTrue();


?>

