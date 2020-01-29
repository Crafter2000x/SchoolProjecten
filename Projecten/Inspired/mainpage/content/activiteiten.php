<link href="../css/test.css" rel="stylesheet">
<?php
require_once ('../../cms/classes/class_dbcommands.php');
require ('../../cms/classes/class_db_operations.php');

$oDB_Operations = new db_operations_class;

$aFetchedData = $oDB_Operations->fetchActivity();

echo('<div class="contactbox">');

echo("<br><hr>");
echo("<center>");
foreach ($aFetchedData as $aActiviteitenData) {
echo('<div class="col-sm-6">');
    echo('<div class="col-sm-12 sm-12">');
        echo('<div class="card h-100">');
            echo('<div class="card-body">');
                echo('<h2 class="card-title">'.$aActiviteitenData[1].'</h2><hr>');
                echo('<p class="card-text">'.$aActiviteitenData[2].'</p>');
            echo('</div>');
        echo('</div>');
    echo('</div>');
echo('</div>');
echo('<br><br>');

}
echo("</center>");


?>




