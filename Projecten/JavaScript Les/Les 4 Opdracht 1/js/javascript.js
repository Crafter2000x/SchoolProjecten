
var weekdag = new Array("Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag"); // mijn weekdag array 
document.write("<br> Arrays Aangemaakt");
document.write("<br> Element aangemaakt");
document.write("<br> Element aangemaakt");
document.write("<br> Element aangemaakt");
document.write("<br> Element aangemaakt");
document.write("<br> Element aangemaakt");
document.write("<br> Element aangemaakt");
document.write("<br> Element aangemaakt");

weekdag.forEach(Element => { document.write("<br>" + Element) }); //eerste loop voor het weergeven van mijn week array 
document.write("<br>")
weekdag.shift(); // haal de eerste entry eruit
weekdag.forEach(Element => { document.write("<br>" + Element) }); //array nog eens laten zien zonder eerste enrty 
document.write("<br> Het vierde element in de array is: " + weekdag[3]); // laat de 4de entry zien in array 

weekdag.unshift('zomerdag', 'winterdag', 'lentedag', 'herfstdag'); //Voeg 4 waarde toe aan het begin van de array 
document.write("<br>")
weekdag.forEach(Element => { document.write("<br>" + Element) }); // run array nog eens met de extra entry's 
document.write("<br>")



var auto = new Array(); //setup auto arrays

auto[0] = new Array();

auto[1] = new Array();

auto[2] = new Array();

document.write("<br>");

auto[0][0] = "Volkswagen";

auto[0][1] = "Up!";

auto[0][2] = "Polo";

auto[0][3] = "Golf";

auto[0][4] = "e-Golf";


auto[1][0] = "Renault";

auto[1][1] = "Capture";

auto[1][2] = "Clio";

auto[1][3] = "Koleos";

auto[1][4] = "Kangoo";


auto[2][0] = "Opel";

auto[2][1] = "Corsa";

auto[2][2] = "Karl";

auto[2][3] = "Omega";

auto[2][4] = "Insignia";

for (var merk = 0; merk < auto.length; merk++) {  // geef auto array weer 
    for (var i = 0; i < auto[merk].length; i++) {
        document.write(auto[merk][i]);
        document.write("<br>")
    }
}

weekdag.shift();
weekdag.pop();
weekdag.unshift("Test");
weekdag.push("Test");

var Klasgenoten = new Array("Connor", "Xander","Thomas","Jordy","Sam","Tom","Jordi");

document.write("<br>");
document.write("<br>");

var Klasgenoten_index = Klasgenoten.indexOf('Connor');


document.write("<br>");
document.write("<br>");

document.write(Klasgenoten_index);

if (Klasgenoten_index != null)
{
    delete Klasgenoten[Klasgenoten_index];
};
document.write("<br>");
document.write("<br>");

for (i = 0; i < Klasgenoten.length; i++) {
    document.write(Klasgenoten[i] + "<br>");
}

document.write("<br>");
document.write("<br>");
Klasgenoten.sort();
Klasgenoten.reverse();
document.write('<br> Resultaat van het sorteren van Klasgenoten is:' + Klasgenoten);

document.write("<br>");
document.write("<br>");

weekdag.join(';');
Klasgenoten.join(';');

sMegelmoes = weekdag + Klasgenoten;
aMegelmoes = sMegelmoes.split(";");

for (i = 0; i < aMegelmoes.length; i++) {
    document.write(aMegelmoes[i]);
}


















document.write("<br>");
document.write("<br>");
TeamLeader = Klasgenoten[3];
TeamA = Klasgenoten.splice(0, 3);
TeamB = Klasgenoten.splice(4, 7);
document.write("<br>");
document.write("<br>");
document.write(TeamLeader);


