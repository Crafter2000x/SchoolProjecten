
var aColor = new Array("Red", "Green", "Blue", "Black", "White");

aColor.push("Yellow");
aColor.unshift(null);
aColor.splice(5,1)

for (i = 0; i < aColor.length; i++) {
    document.write(aColor[i] + "<br>");
}

document.write("<br>");

document.write("Element 4 is a type of: " + aColor[4] + ", " + typeof (aColor[4]));


var AColor1 = aColor.slice(0,4);
var AColor2 = aColor.slice(4,8);

document.write("<br>");
document.write("<br>");

for (i = 0; i < AColor1.length; i++) {
    document.write(AColor1[i] + "<br>");
}

document.write("<br>");
document.write("<br>");

for (i = 0; i < AColor2.length; i++) {
    document.write(AColor2[i] + "<br>");
}

document.write("<br> <paragraph style='background-color:" + aColor[3] + ";'> This line has a " + aColor[3] + " background </paragraph> <linebreak>");

document.write("<br>");
document.write("<br>");

for (i = 0; i < aColor.length; i++) {
    document.write(("<br> <paragraph style='background-color:" + aColor[i] + ";'> This line has a " + aColor[i] + " background </paragraph> <linebreak>"));
}
