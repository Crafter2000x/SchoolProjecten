<?php


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * In this are all the actions collected for the main application and its forms
 *
 * @author J. de Klijn
 */
//----------------------------------- PARENT CLASS -----------------------------
require_once 'class_dbcommands.php';


class db_operations_class extends dbcommands_class {
//----------------------------------- BEGIN CLASS ------------------------------
//----------------------------------- VARIABELEN -------------------------------    
public function fetchUsers(){
    $this->sPdoQuery = "SELECT * FROM `tbl_users` ORDER BY `tbl_users`.`iPK` ASC";
    $aFetchedData = $this->PdoSqlReturnArray();
    return($aFetchedData);   
}

public function addUser($p_sUsername, $p_sPassword){
    $this->sPdoQuery = "INSERT INTO `tbl_users` (`sUsername`,`ePassword`) VALUE('".$p_sUsername."','".$p_sPassword."') ";
    $this->PdoSqlReturnTrue();
    return;
}

} //====== END CLASS ===============