<?php
    // Start of a session array
    session_start();
    
    
    
    
    $_SESSION['activeMenu'] = "fileMenu";
    
    // Header of the page
    include_once('header.php');
    // Start of the content of the page
    echo("<div class='container-fluid'>");
    // The navbar
    include_once('menubar.php');
    // Real content of the page
    
    echo("This the mainpage");
    
    // End of the real content
    // end of the container
    echo("</div>");
    // Footer of the page
    include_once('footer.php');
?>