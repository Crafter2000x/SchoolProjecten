<?php
    // Start of a session array
    session_start();
    $_SESSION['activeMenu'] = "editMenu";
    // Form handling
    if(!empty($_POST)){
        $sUsername = $_POST['sUsername'];
        $sEmail = $_POST['sEmail'];
        $sPassword = password_hash($_POST['sPassword'], PASSWORD_DEFAULT);
        $bGender = $_POST['bGender'];
        $sLand = $_POST['sLand'];
        
        //Creating a MariaDB file
        //Create a array
        $aUserDB = array();
        //Get the current content of the userDB
        $sGetArray = file_get_contents("./userdb.txt");
        //Create a new array record in the UserDB
        if(!empty($sGetArray)){$aUserDB = json_decode($sGetArray,true);}
        //Create a new array record in the userDB
        $aUserDB[$sUsername] = array($sUsername,$sEmail,$sPassword,$bGender,$sLand);
        //Encode the UserDB array
        $sSaveArray = json_encode($aUserDB);
        //If not exist, open a mew file
        $file = fopen("userdb.txt","w");
        //Write the encode textstring to the file
        fwrite($file, $sSaveArray); 
        header('location:login.php');
    }
    

   
    
    // $sSql-query ="INSERT INTO tbl_Registration SET(`sUsername`) VALUE ($sUsername);
    // Header of the page
    include_once('header.php');
    // Start of the content of the page
    echo("<div class='container-fluid'>");
    // The navbar
    // include_once('menubar.php');
    // Real content of the page
    ?>
    <div class='col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 well well-lightcoral text-center'>
        <form method="POST" ID='Registerform'>
            <div class="form-group">
                <label for="Username">Gebruikersnaam:</label>
                <input required type="text" class="form-control" id="Username" name='sUsername'>
            </div>
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" class="form-control" id="Email" name='sEmail'>
            </div>
            <div class="form-group">
                <label for="Password">Wachtwoord:</label>
                <input required type="password" class="form-control" id="Password" name='sPassword'>
            </div>
            <div class="form-group">
                <label for="Gender">Geslacht:</label>
                <?php
                echo("<input required type='radio' value='M' name='bGender'");
                if(!empty($bGender)){
                    if($bGender == 'M'){echo(" checked ");}
                }
                echo("> Man ");                                   
                echo("<input required type='radio' value='V' name='bGender'");
                if(!empty($bGender)){
                    if($bGender == 'V'){echo(" checked ");}
                }
                echo("> Vrouw ");                 
                ?>
            </div>
            <div class="form-group">
                <label for="Land">Land:</label>
                <select name='sLand'>
                    <?php
                    echo("<option value='NL'");
                    if(!empty($sLand)){
                        if($sLand == 'NL'){echo("  selected='selected' ");}
                    }
                    echo(">Nederland</option>");
                    echo("<option value='D'");
                     if(!empty($sLand)){
                        if($sLand == 'D'){echo("  selected='selected' ");}
                    }
                    echo(">Duitsland</option>");
                    echo("<option value='B'");
                     if(!empty($sLand)){
                        if($sLand == 'B'){echo("  selected='selected' ");}
                    }
                    echo(">België</option>");
                    echo("<option value='F'");
                     if(!empty($sLand)){
                        if($sLand == 'F'){echo("  selected='selected' ");}
                    }
                    echo(">Frankrijk</option>");
                    echo("<option value='Chn'");
                     if(!empty($sLand)){
                        if($sLand == 'Chn'){echo("  selected='selected' ");}
                    }
                    echo(">China</option>");
                    ?>
                </select>
            </div>
            <input type='submit' value='Verzenden' ID='Registerform'>
        </form>
    </div>


    <?php
    // End of the real content
    // end of the container
    echo("</div>");
    // Footer of the page
    include_once('footer.php');
?>