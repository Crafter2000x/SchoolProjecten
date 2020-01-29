// Function: bestellen
// Parameters: Form Object
// Returns: Cookie met bestekking info...
// Purpose: Cookie maken met info bestelde item

function bestellen(thisForm) {
    productInfo =
    thisForm.id.value + '|' +
    thisForm.merk.value + '|' +
    thisForm.model.value + '|' +
    thisForm.prijs.value + '|' +
    thisForm.aantal.value 

    maakCookie(thisForm.id.value, productInfo, 1);
    notice = thisForm.aantal.value + ' ' +
        thisForm.merk.value + ' in winkelwagen.';
    alert(notice);
}