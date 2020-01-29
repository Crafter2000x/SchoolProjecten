<?php
    // Start of a session array
    session_start();
    $_SESSION['bAccessGranted'] = FALSE;
require_once ('../classes/class_dbcommands.php');

$oDB_Operations = new dbcommands_class();

if(!empty($_POST)){
    $oDB_Operations->sPdoQuery= "SELECT  `username`, `password` FROM `tbl_users`";
    $aFetchedData = $oDB_Operations->PdoSqlReturnArray();

    $sUsername = htmlspecialchars($_POST['sUsername']);
    $sPassword = htmlspecialchars($_POST['sPassword']);
    foreach($aFetchedData as $aUser){
    if ($sUsername == $aUser[0] && password_verify($sPassword,$aUser[1])) {
        $_SESSION['bAccessGranted'] = TRUE;
        header('location:beheerdereditphp.php');
    } else {
        echo 'Invalid password.';
    }
    }
}

?>

<link href="../../css/contactstyle.css" rel="stylesheet">
<div class="contactbox">
  <form method="POST">
    
    <label for="Username"><b>Username</b></label>
    <input required type="text" class="form-control" id="username" name="sUsername" required>
      
    <label for="password"><b>Password</b></label>
    <input required type="password" class="form-control" id="password" name="sPassword" required>      
    
    
    
    <input type="submit" value="Log in">
  </form>
</div>
