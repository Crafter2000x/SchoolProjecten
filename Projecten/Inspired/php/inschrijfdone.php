<?php
    // Header of the page
    include_once('header.php');
    // Start of the content of the page
    echo("<div class='container-fluid'>");
    // The navbar
    // include_once('menubar.php');
?>

<link href="../css/contactstyle.css" rel="stylesheet">
<br><br><div class="contactbox">
    <div>
        <h5> Bedankt voor het inschrijven</h5>
        <h5> Je krijgt zo snel mogelijk een mail waar de details van de workshop in staan.</h5>
    </div>    
    <br><br><a href="index.php"><input type="submit" value="Terug naar de homepage"></a>
  </form>
</div>

<?php
// end of the container
echo("</div>");
// Footer of the page
echo("<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>");
include_once('footer.php');
?>
