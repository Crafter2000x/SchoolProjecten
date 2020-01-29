<?php
// DvkhlV1jCsY4iy4W
// Get the nessesary class file
require ('Class_mok.php');
// Make a connection to the class 
$oCoffeeMug = new mok_Class();
$oTeaMug = new mok_Class();

$oCoffeeMug->SetContent("Koffie");
$oTeaMug->setContent("ChocoladeMelk");

echo("De Koffiemok is gevuld met: ".$oCoffeeMug->GetContent().".");
echo("<br>");
echo("De Theemok is gevuld met: ".$oTeaMug->GetContent().".");

echo("<br><br>");

$oTeaMug->SetContent("Thee");
$oCoffeeMug->SetContent("ChocoladeMelk");

echo("De Theemok is gevuld met: ".$oTeaMug->GetContent().".");
echo("<br>");
echo("De Koffiemok is gevuld met: ".$oCoffeeMug->GetContent().".");

echo("<br><br>");

$oCoffeeMug->BreakTheMug("koffiemok");
if ($oCoffeeMug->sContentMok != ""){
    echo("De koffiemok is gevuld met: ".$oCoffeeMug->GetContent().".");
} else {
    echo ("De koffiemok is kapot");
    
}
echo("<br><br>");
$oCoffeeMug->SetColor("Rood");
$oTeaMug->SetColor("Blauw");

echo("De Koffiemok is de kleur: ".$oCoffeeMug->GetColor().".");
echo("<br>");
echo("De Theemok is de kleur: ".$oTeaMug->GetColor().".");




