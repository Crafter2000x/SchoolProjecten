<?php

    // Start of a session array
    session_start();
    
    
    
    
    $_SESSION['activeMenu'] = "workshops";
    
    // Header of the page
    include_once('../php/header.php');
    // Start of the content of the page
    echo("<div class='container-fluid'>");
    // The navbar
    include_once('../php/menubar.php');
    // Real content of the page
    
    include('../content/detailsws.php');
    
    // End of the real content
    // end of the container
    echo("</div>");
    // Footer of the page
    echo("<br><br><br><br>");
    include_once('../php/footer.php');
?>