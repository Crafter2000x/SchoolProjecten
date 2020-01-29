//var CellElement = document.getElementById('Cell');
var CellElements = document.getElementsByName('Cell') //Zodat ik alle cellen kan ophalen uit het html document 
//CellElement.innerHTML = 'Selected By ID';
document.write("<br> Er zijn " + CellElements.length + " cellen geselecteerd."); //Tel ik alle cellen na 

for (var CellCounter in CellElements) {
    CellElements[CellCounter].innerHTML = "Cel nummer: " + CellCounter; //Laat de cell per nummer zien 

    if (CellCounter & 1) {                              
        CellElements[CellCounter].classList.add("red"); //Voeg de class red toe
    } else {
        CellElements[CellCounter].classList.add("blue"); // Voeg de class blue toe
    }
}
