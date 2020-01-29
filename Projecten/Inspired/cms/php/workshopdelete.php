<link href="../../css/contactstyle.css" rel="stylesheet">
<?php
   
require_once ('../classes/class_dbcommands.php');
require ('../classes/class_db_operations.php');

$oDB_Operations = new db_operations_class;

$aFetchedUserData = $oDB_Operations->FetchUsers();

echo('<div class="contactbox">');

echo("<br><hr>");
echo("<center>");
foreach ($aFetchedUserData as $aWorkshopData) {
    echo("<a href='deletews.php?wsid=".$aWorkshopData[0]."'>Workshop ID: ".$aWorkshopData[0]."<br></a>");
    echo("Titel: ".$aWorkshopData[1]."<hr>");
    //echo("Beschrijving: ".$aWorkshopData[2]."<br>");
    //echo("Locatie: ".$aWorkshopData[3]."<br>");
    //echo("Tijdstip: ".$aWorkshopData[4]."<br>");
    //echo("Dag: ".$aWorkshopData[5]."<hr>");
}
echo("</center>");
?>
<!-- option statement maken waar je uit kan kiezen om een workshop te wijzigen -->


<center><hr><a href="beheerdereditphp.php">Terug</a></center>