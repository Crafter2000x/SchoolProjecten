
<?php
    session_start();
    
    $_SESSION['activeMenu'] = "workshops";
    // Header of the page
    include_once('header.php');
    // Start of the content of the page
    echo("<div class='container-fluid'>");
    // The navbar
    include_once('menubar.php');
    // Real content of the page
    
?>
<link href="../css/contactstyle.css" rel="stylesheet"> 
<br><br><div class="contactbox">
    <div class="row">
       
        <div class="col-md-6">
            <div class="col-md-1">
                <!-- Hier komt de foto die bijpassend is bij de workshop, deze zet je in de img map. Alleen de src="..." veranderen. -->
                <img class="imgWS" src=" ">
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="col-md-12">
                <!-- Geef de titel van de workshop -->
                <h2> Workshop Titel </h2>
                <!-- Geef een beschrijving van de workshop -->
                <p> Geef hier informatie over de workshop </p>
            </div>
        </div>
        
    </div>
    <br>
    
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="col-md-2">
                <a href="workshopsphp.php" class="buttonWS">Terug</a>   
            </div>
        </div>
        
        <div class="col-md-5">
            <div class="col-md-8">
                
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="col-md-2">
                <!-- Het WSN is de workshop ID, deze moet per workshop veranderd worden in een ander nummer -->
                <a href="registerphp.php?wsn=005" class="buttonWS">Inschrijven</a>
            </div>
        </div>
    </div>
    <br>
</div><br><br>

<?php
    // End of the real content
    // end of the container
    echo("</div>");
    // Footer of the page
    echo("<br><br><br><br><br><br><br><br><br><br>");
    include_once('footer.php');
?>

