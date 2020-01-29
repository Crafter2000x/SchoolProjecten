<?php

try
    {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_CASE => PDO::CASE_NATURAL,
            PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING,
            PDO::ATTR_EMULATE_PREPARES=>PDO::ATTR_EMULATE_PREPARES
        ];

      $oDB_connect = new PDO("mysql:host=".S_DB_HOST.";dbname=".S_DB_NAME.";charset=utf8",S_DB_USERNAME, S_DB_PASSWORD, $options);
    }                        
    catch (PDOException $ex)
    {
        // Inform the user that something went wrong
        echo("Server fout: ".$ex->getCode().". Sorry voor het ongemak, we gaan kijken wat er fout is.<BR>");
        // Get more information about the error
        $arr_trace = $ex->getTrace();
        // If it is in a class, which class?
        if($arr_trace[0]['class'] != ''){
            $classname = $arr_trace[0]['class'];
        }
        // In which file?
        $filename = $arr_trace[0]['file'];
        // Which methode?
        $method = $arr_trace[0]['function'];
        // and in which line?
         $line = $arr_trace[0]['line'];
         $exceptionOutput = $ex->getMessage()."<BR>Complete foutmelding.<BR> Fout zit in bestand: ".$filename.",<br>Class: ".$classname.",<br>methode: ".$method.",<br>regelnr: ".$line."<br>";         
         echo($exceptionOutput);
    } // Einde catch

