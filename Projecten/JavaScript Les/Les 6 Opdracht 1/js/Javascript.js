// Voer het script uit zodra de pagina helemaal is geladen

window.onload = function () {

    // Caching van de HTML elementen in variabelen

    var divResult = document.getElementById('divResult');

    var box = document.getElementById('divBox');

    // event handler om de mouseover af te vangen

    box.onmouseover = function () {

        divResult.innerHTML += 'De muis is nu in de box gevangen'

    };

    // Event handler om de mouseout af te vangen

    box.onmouseout = function () {

        divResult.innerHTML += 'Tot Ziens! De muis is ontsnapt'

    };

} // Einde window.onload