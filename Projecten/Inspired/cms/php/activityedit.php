<link href="../../css/contactstyle.css" rel="stylesheet">
<?php
   
require_once ('../classes/class_dbcommands.php');
require ('../classes/class_db_operations.php');

$oDB_Operations = new db_operations_class;

$aFetchedUserData = $oDB_Operations->FetchActivity();

echo('<div class="contactbox">');

echo("<br><hr>");
echo("<center>");
foreach ($aFetchedUserData as $aActivityData) {
    echo("<a href='editactivity.php?aid=".$aActivityData[0]."'>Activity ID: ".$aActivityData[0]."<br></a>");
    echo("Titel: ".$aActivityData[1]."<hr>");
}
echo("</center>");
?>
<!-- option statement maken waar je uit kan kiezen om een workshop te wijzigen -->


<center><hr><a href="beheerdereditphp.php">Terug</a></center>