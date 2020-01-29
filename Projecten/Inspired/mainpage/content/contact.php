<link href="../../css/contactstyle.css" rel="stylesheet">
<br><br><div class="contactbox">
  <form action="contact_email_form.php">
      <label for="fname"><b>Voornaam</b></label>
    <input type="text" id="fname" name="voornaam" placeholder="Uw voornaam...">

    <br><br><label for="lname"><b>Achternaam</b></label>
    <input type="text" id="lname" name="achternaam" placeholder="Uw achternaam...">

    <br><br><label for="email"><b>Uw e-mail</b></label>
    <input type="text" id="email" name="email" placeholder="Uw e-mail...">

    <br><br><label for="onderwerp"><b>Onderwerp</b></label>
    <select id="Onderwerp" name="onderwerp">
      <option value="" disabled selected hidden>Selecteer uw onderwerp</option>
      <option value="Klacht">Klacht</option>
      <option value="Vraag">Vraag</option>
      <option value="Algbericht">Algemeen bericht</option>
    </select>

    <br><br><label for="bericht"><b>Uw bericht</b></label>
    <textarea id="subject" name="subject" placeholder="Schrijf ons uw bericht..." style="height:200px"></textarea>

    <input type="submit" value="Inzenden">
  </form>
</div><br><br>
