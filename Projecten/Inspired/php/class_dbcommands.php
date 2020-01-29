<?php

/**
 * In this class are the methods to access the database.
 * 
 * @author J. de Klijn
 */

// String, dit is de gebruikersnaam voor de database toegang
    define('S_DB_USERNAME', 'root');    
    // String, dit is het wachtwoord voor de database toegang
    define('S_DB_PASSWORD', '');
    // String, de locatie van de database
    define('S_DB_HOST',     'localhost');
    // String, de naam van de te gebruiken database
    define('S_DB_NAME',     'Inspired'); 



//----------------------------------- PARENT CLASS -----------------------------


class dbcommands_class {
    

// Variables
public  $sPdoQuery   = '';  // @var SQL query, type: string, scope: member

    public function PdoSqlReturnArray(){
        // Methode: Execute a SQL query and return the fetched data in an array
        // @parameters: none
        // @var $this->sPdoQuery type: string, scope: member
        // Make connection to the database by PDO connect        
        include 'dbconnection.php';        
        // Make the query with the parameter
        $statement = $oDB_connect->prepare($this->sPdoQuery);
        // Put the results in the $result
        $result = $statement->execute();
        // if the statement didn't execute
        if (!$result) {
            if($statement->errorCode() == 0) {
                // Fetch the error
                while(($row = $statement->fetch()) != false) {
                    echo "statement error \n";
                }
            } else {
                // Fetch the error
                $errors = $statement->errorInfo();
                // Display the error in a small table
                echo("<table class='errorfield'><tr><td>".$errors[2]."</td></tr></table>");
            }
        }
        // Put all fetched data into a nested array
        $arr_rows = $statement->fetchAll(PDO::FETCH_NUM);
        // Close the connection
        $this->oDB=NULL;
        // Return the array data back to the calling method
        return($arr_rows);    
    }

    public function PdoSqlReturnTrue(){
        // Methode: Execute a SQL query and return return a TRUE if succesfull
        // @parameters: none
        // @var $sSqlQuery type: string, scope: member 

        // Make connection to the database by PDO connect
        include 'dbconnection.php';    
        $statement = $oDB_connect->prepare($this->sPdoQuery);                                             // Make the query with the parameter
        $result = $statement->execute();                                                                // Put the results in the $result
        if (!$result) {                                                                                 // if the statement didn't execute
            if($statement->errorCode() == 0) {                                                          // Fetch the error            
                while(($row = $statement->fetch()) != false) {
                    echo "statement error \n";                                                          // Display the error
                }
            } else {
                // Fetch the error
                $errors = $statement->errorInfo();
                // Display the error in a small table
                echo("<table class='errorfield'><tr><td>".$errors[2]."</td></tr></table>");
            }
        return(FALSE);
        } 
        // Close the connection
        $this->oDB=NULL;
        // Return to the calling method
        return(TRUE);
    }

    public function PdoSqlReturnValue(){
        // Methode: Execute a SQL query and return return a TRUE if succesfull
        // @parameters: none
        // @var $sSqlQuery type: string, scope: member 

        // Make connection to the database by PDO connect
        include 'dbconnection.php';                                                                             // Connect to the database
        $statement = $oDB_connect->prepare($this->sPdoQuery);                                             // Make the query with the parameter
        $result = $statement->execute();                                                                // Put the results in the $result
        // Close the connection
        $this->oDB=NULL;
        // Return to the calling method
        return($result);    
    }
   

}// END  CLASS

