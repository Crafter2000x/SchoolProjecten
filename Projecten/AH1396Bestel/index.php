<!DOCTYPE html>
<!--
This is the index page of the application that will hold 4 main area's: Orders that arrive today, Orders that will be picked up today, Reapeating orders and a quick menu.
-->
<?php
require './php/db_connection.php'; /* The file that holds the SQL connection */
require './php/footer.php';
?>

<html>
    <head lang="en">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <!-- Own stylesheet -->
        <link rel="stylesheet" type="text/css" href="./css/stylesheet.css">
        <!-- Latest compiled Fontawsome -->
        <script src="https://kit.fontawesome.com/7cb52287d0.js" crossorigin="anonymous"></script>
        <!-- All meta tags -->
        <meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AH 1396 Index</title>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#">Navbar</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div class="container-fluid">
           <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4"></div>
           </div>
        </div>
    </body>
</html>
