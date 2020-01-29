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
    
    
public function storeNewPeriodscheme($p_sValues){
    // Save a new period scheme in the database
    // @parameter $p_sValues    type: string    scope:local    
    $this->sPdoQuery="INSERT INTO `tbl_periodeschemes` (`sPeriodname`,`iStudylevel`, `iStudyyear`, `iPeriode1`, `iPeriode2`, `iPeriode3`, `iPeriode4`)".$p_sValues;
    $bSucces = $this->PdoSqlReturnTrue();
    $_SESSION['aAllPeriodSchemes'] = $this->selectAll('tbl_periodeschemes');
    return($bSucces);    
}

public function fetchPeriodRecord(){
    // Get a periodscheme record from the database
    // @parameter $p_iRecordNumber    type: integer    
    $this->sPdoQuery= "SELECT * FROM `tbl_periodeschemes` WHERE `iPeriodeSchemes_id` = '".$_SESSION['iRecordnumber']."'";
    $aFetchedData = $this->PdoSqlReturnArray();
    return($aFetchedData);   
}

public function updatePeriodscheme($p_sValue){
    // Update a periodescheme in the database
    // @parameter $p_sValue    type: string    scope:local
    $this->sPdoQuery= $p_sValue;
    $bSucces = $this->PdoSqlReturnTrue();
    $_SESSION['aAllPeriodSchemes'] = $this->selectAll('tbl_periodeschemes');
    return($bSucces);           
}

public function fetchUsers(){
    $this->sPdoQuery = "SELECT * FROM `tbl_workshops` ORDER BY `tbl_workshops`.`wsid` ASC";
    $aFetchedData = $this->PdoSqlReturnArray();
    return($aFetchedData);
}

public function fetchActivity(){
    $this->sPdoQuery = "SELECT * FROM `tbl_activiteiten` ORDER BY `tbl_activiteiten`.`aID` ASC";
    $aFetchedData = $this->PdoSqlReturnArray();
    return($aFetchedData);
}
    
} //====== END CLASS ===============