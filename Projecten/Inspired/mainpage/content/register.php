<?php
require_once '../../cms/classes/class_dbcommands.php';

if(isset($_GET)){
    $workshopnr = $_GET['wsid'];
}

$oDBaction = new dbcommands_class();

    function cleanup($p_sUncleanText){
        $sUncleanText = filter_input(INPUT_POST,$p_sUncleanText, FILTER_SANITIZE_SPECIAL_CHARS);
        $sClean = htmlentities($sUncleanText);
        return($sClean);
    }

    // Start of a session array
    //session_start();
    //$_SESSION['activeMenu'] = "editMenu";
    // Form handling
    if(!empty($_POST)){
        $iStudentnummer = cleanup('iStudentnummer');
        $sFirstname = cleanup('sFirstname');
        $sLastname = cleanup('sLastname');
        $sEmail = cleanup('iStudentnummer').'@arcuscollege.nl';
    
        $oDBaction->sPdoQuery = "INSERT INTO tbl_inschrijvingen(`studentnummer`,`voornaam`,`achternaam`,`email`,`workshopid`) VALUES ('".$iStudentnummer."','".$sFirstname."','".$sLastname."','".$sEmail."','".$workshopnr."')";
        $oDBaction->PdoSqlReturnTrue();
        header('location:../content/inschrijfdone.php');
    }
?>



<link href="../../css/contactstyle.css" rel="stylesheet">
<br><br><div class="contactbox">
    <div>
        <h5> LET OP!</h5>
        <h5> Het inschrijven voor een workshop is alleen mogelijk als je een student bent op het arcus college.</h5>
    </div>
  <form method="POST">
    
      <br><br><label for="studentnummer"><b>Studentnummer</b></label>
    <input type="text" id="studentnummer" placeholder="Uw studentnummer" name="iStudentnummer" required>
      
    <br><br><label for="username"><b>Voornaam</b></label>
    <input type="text" id="fname" placeholder="Uw voornaam..." name="sFirstname" required>

    <br><br><label for="lname"><b>Achternaam</b></label>
    <input type="text" id="lname" placeholder="Uw achternaam..." name="sLastname" required>
    
    <!-- <br><br><label for="email"><b>Uw e-mail</b></label>
    <input type="text" id="email" name="sEmail" required placeholder="Studentnummer@arcuscollege.nl" pattern=".+@arcuscollege.nl"
          title="Je kan alleen jouw Arcus email gebruiken.">    -->   
    
    
    <br><br>
    <input type="submit" value="Inschrijven">
  </form>
    <a href="../php/workshopsphp.php">Terug</a>
</div>