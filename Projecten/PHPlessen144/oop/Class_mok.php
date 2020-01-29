<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Class_mok
 * 
 * @author Connor
 */
class mok_Class {
    
    var $sContentMok = "Leeg";
    var $sColor="Wit";
    
    public function GetContent() 
        // The purpose of this method is to show the content of the object Mok
        // @parameter : none
    {
            return($this->sContentMok);
    }
    public function SetContent($p_sContent)
        // The purpose of this method is to set/fill the content of the object mok
        // @parameter : $p_sContent   type : string   scope : local
    {   
            $this->sContentMok = $p_sContent;
    }
    
     public function BreakTheMug($p_sMugtype)
        // The purpose of this method is to break a mug.
        // @parameter : $p_sMugtype   type : string   scope : local 
    {   
            $this->sContentMok = "";
            echo ("Oeps, de ".$p_sMugtype." is gevallen. ");
            return($this->sContentMok);
    }
    
    public function SetColor($p_sColor)
        // The purpose of this method is to set/fill the content of the object mok
        // @parameter : $p_sContent   type : string   scope : local
    {   
            $this->sContentMok = $p_sColor;
    }
    public function GetColor()
        // The purpose of this method is to set/fill the content of the object mok
        // @parameter : $p_sContent   type : string   scope : local
    {   
            return($this->sColor);
    }

} // End of Class 
