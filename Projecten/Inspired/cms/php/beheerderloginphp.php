<?php
	
	
	
    $_SESSION['activeMenu'] = "beheerder";
	
    // Header of the page
    include_once('../../mainpage/php/header.php');
    // Start of the content of the page
    echo("<div class='container-fluid'>");
    // The navbar
    // include_once('menubar.php');
    // Real content of the page
    
    include_once('beheerderlogin.php');
    
    
    // End of the real content
    // end of the container
    echo("</div>");
    // Footer of the page
    // echo("<br><br><br>");
    // include_once('footer.php');
?>

