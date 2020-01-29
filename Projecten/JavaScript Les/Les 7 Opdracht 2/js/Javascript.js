window.onload = function () {

    var RadioGroup = document.getElementsByName('radiogroup');
    var RadioSpan = document.getElementsByName('Radio');
    var Choice = '';

    

    document.getElementById('btnRadio').onclick = function () {

        for (var RadioCounter in RadioGroup) {
            if (RadioGroup[RadioCounter].checked) {
                Choice = 'De gekozen kleur = ' + RadioGroup[RadioCounter].value;
                RadioSpan[RadioCounter].classList.add(RadioGroup[RadioCounter].value);
            } else
                RadioSpan[RadioCounter].classList.remove(RadioGroup[RadioCounter].value);
        }
        document.getElementById('selectionResult').innerHTML = Choice;
    }
}

