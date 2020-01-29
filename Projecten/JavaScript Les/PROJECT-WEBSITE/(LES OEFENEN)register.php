
<!-- ----------------------------------------------- Form handeling ------------------------------------------------------------- --> 
        <?php var_dump($_POST);
        $sUsername = $_POST['sUsername'];
        $sPassword = $_POST['sPassword'];
        $sEmail = $_POST['sEmail'];
        $bSex = $_POST['bSex'];
        $sLand = $_POST['sLand'];
        echo("Gebruikersnaam".$sUsername."<br>");
        // $sSql-query ="INSERT INTO tbl_Registartion SET('sUsername')"
        ?>

<!-- ---------------------------------------------- Top of the page ------------------------------------------------------------ -->
        <?php include_once ('./php/toppage.php'); ?>
<!-- --------------------------------------------- Here I start the NAV bar ---------------------------------------------------- -->	 
	<?php include_once('./php/header.php'); ?>
<!-- ------------------------------------ After this the NAV have part of the page is done -------------------------------------- -->
<div class='col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 well-green text-center'>
    
    Gebruikersnaam <?php echo($sUsername);?><br>
    
    <form method="POST">
        <div class="form-group">
            <label for='Username'>Gebruikersnaam:</label>
            <input type="text" class="form-control" id="Username" name="sUsername">
        </div>
        
       <div class="form-group">
            <label for='Password'>Wachtwoord:</label>
            <input type="password" class="form-control" id="Password" name="sPassword">
        </div>
        
        <div class="form-group">
            <label for='Email'>Email:</label>
            <input type="email" class="form-control" id="Email" name="sEmail">
        </div>
       
        <div class="form-group">
            <label for='Sex'>Geslacht:</label>
            <input type="radio" value="m" name="bSex"> Man
            <input type="radio" value="v" name="bSex"> Vrouw        
        </div>
        
        <div class="form-group">
            <label for='Land'>Land:</label>
            <select name="sLand">
                <option value="NL">Nederland</option>
                <option value="D">Duitsland</option>
                <option value="B">Belgie</option>
                <option value="F">Frankrijk</option>
                <option value="Chn">China</option>
            </select>
        </div>
        <input type="submit">
    </form>
    
    <form method="POST" id="Editform">
        <div class="form-group">
            <label for='Username'>Gebruikersnaam:</label>
            <input type="text" class="form-control" id="Username" name="sUsername" value="<?php echo($sUsername);?>">
        </div>
        
       <div class="form-group">
            <label for='Password'>Wachtwoord:</label>
            <input type="password" class="form-control" id="Password" name="sPassword" value="<?php echo($sPassword);?>">
        </div>
        
        <div class="form-group">
            <label for='Email'>Email:</label>
            <input type="email" class="form-control" id="Email" name="sEmail" value="<?php echo($sEmail)?>">
        </div>
       
      <div class="form-group">
            <label for='Sex'>Geslacht:</label>
            <?php 
            if($bSex == 'm') {
                echo("<input type='radio' value='m' name='bSex' checked> Man ");    
            } else { 
                echo("<input type='radio' value='m' name='bSex'> Man");
            }
            if($bSex == 'v') {
                echo("<input type='radio' value='v' name='bSex' checked> Vrouw");
            } else {
                echo("<input type='radio' value='v' name='bSex'> Vrouw");
            }
            ?>
        </div> 
        
        <div class="form-group">
            <label for='Land'>Land:</label>
            <select name="sLand">
                <?php
                echo ("<option value='NL'");
                if($sLand == 'NL') {echo(" selected='selected'");}
                echo (">Nederland</option>");
                echo ("<option value='D'");
                if($sLand == 'D') {echo(" selected='selected'");}
                echo (">Duitsland</option>");
                echo ("<option value='B'");
                if($sLand == 'B') {echo(" selected='selected'");}
                echo (">Belgie</option>");
                echo ("<option value='F'");
                if($sLand == 'F') {echo(" selected='selected'");}
                echo (">Frankrijk</option>");
                echo ("<option value='Chn'");
                if($sLand == 'Chn') {echo(" selected='selected'");}
                echo (">China</option>");
                ?>
            </select>
        </div>
        <input type="submit" id="Editform">
    </form> 
    
</div>

 <?php include_once ('./php/bottompage.php'); ?>

</body>

</html>
