<link href="../../css/contactstyle.css" rel="stylesheet">
<?php
require('../../cms/classes/class_db_operations.php');
        $oDB_Operations = new db_operations_class;

        $aFetchedData = $oDB_Operations->FetchUsers();

        if(isset($_GET)){
        $workshopid = $_GET['wsid'];
        }
        
        $oDB_Operations->sPdoQuery= "SELECT  `wstitle`, `wsdesc`, `wslocation`, `wstime`, `wsday`, `wsid` FROM `tbl_workshops` WHERE `tbl_workshops`.`wsid` = '".$workshopid."'";
        $aFetchedData = $oDB_Operations->PdoSqlReturnArray();
        
        foreach($aFetchedData as $aWorkshopdata){
        echo('<br><br><br>');
        echo("<center>");
        echo('<div class="col-sm-6">');
            echo('<div class="col-sm-12 sm-12">');
                echo('<div class="card h-100">');
                    echo('<div class="card-body">');
                        echo('<h2 class="card-title">'.$aWorkshopdata[0].'</h2><hr>');
                        echo('<p class="card-text">'.$aWorkshopdata[1].'</p><br>');
                        echo('<p class="card-text">De workshop vind plaats op '.$aWorkshopdata[4].' op '.$aWorkshopdata[2].' om '.$aWorkshopdata[3] .'</p>');
                    echo('</div>');
                    echo('<div class="card-footer">');
                        echo('<a href="../php/registerphp.php?wsid='.$aWorkshopdata[5].'" class="btn btn-primary">Inschrijven</a>');
                        echo('<br><a href="../php/workshopsphp.php">Terug</a>');
                    echo('</div>');
                echo('</div>');
            echo('</div>');
        echo('</div>');
        echo('<br>');
        echo("</center>");
        }
?>