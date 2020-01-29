<?php

require ('..\classes\class_db_operations.php');

$oDBOperations = new db_operations_class;

$aFetchedUSerdata = $oDBOperations->fetchUsers();
var_dump($aFetchedUSerdata);

echo ("<br><br>");

foreach ($aFetchedUSerdata as $aUserdata) {
    echo ("Gebruikersnaam: ".$aUserdata[1]."<br>");
    echo ("Wachtwoord: ".$aUserdata[2]."<br>");
    echo ("UserID: ".$aUserdata[0]."<hr>");
}
    
    $sUsername = "Jan";
    $sPassword = "b1f9g5bf9b9d99ddbd1984b";
    
    foreach ($aFetchedUSerdata as $aUserdata){
        if($aUserdata[1] == $sUsername && $aUserdata[2]== $sPassword)
        {
            echo("Acces Granted <br><br>");
        }    else{
            echo ("Verkeerde gebruikersnaam en/of wachtwoord <br><br>");
        }
    }