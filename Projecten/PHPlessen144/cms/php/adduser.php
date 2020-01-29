<?php
require ('../classes/class_db_operations.php');
$oDBOperations = new db_operations_class;



if(!empty($_POST)){
    $sUsername = $_POST['sUsername'];
    $sPassword = $_POST['sPassword'];
    echo($sUsername. " & " .$sPassword);   
    $oDBOperations->addUser($sUsername,$sPassword);
}
?>

<form method="POST">
    Username: <input type="text" name="sUsername">
    Password: <input type="password" name="sPassword">
    <input type="submit">
</form>