<link href="../css/test.css" rel="stylesheet">
<?php
require_once ('../../cms/classes/class_dbcommands.php');
require ('../../cms/classes/class_db_operations.php');

$oDB_Operations = new db_operations_class;

$aFetchedUserData = $oDB_Operations->FetchUsers();

echo('<div class="contactbox">');

echo("<br><hr>");
echo("<center>");
echo('<img src="../../img/connected.png" width="700px">');
foreach ($aFetchedUserData as $aWorkshopData) {
echo('<div class="col-sm-6">');
    echo('<div class="col-sm-12 sm-12">');
        echo('<div class="card h-100">');
            echo('<div class="card-body">');
                echo('<h2 class="card-title">'.$aWorkshopData[1].'</h2><hr>');
                echo('<p class="card-text">'.$aWorkshopData[2].'</p>');
            echo('</div>');
            echo('<div class="card-footer">');
                echo('<a href="../php/detailswsphp.php?wsid='.$aWorkshopData[0].'" class="btn btn-primary">Meer informatie</a>');
            echo('</div>');
        echo('</div>');
    echo('</div>');
echo('</div>');
echo('<br><br>');

}
echo("</center>");


?>




