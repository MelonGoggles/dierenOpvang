<?php
require_once "session.inc.php";
?>

<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
    <title>DierenOpvang</title>
  </head>

  <body class="background">


<form action="klant_nieuw_verwerk.php" method="post" class="klant_form">
  <h3> Een nieuwe klant toevoegen </h3><br>
	<p>
    <label for="VOORNAAM">Voornaam</label>
      <input type="text" name="VOORNAAM" id="VOORNAAM" class="forminput" style="text-align: center;" required="required">
  </p>

  <p>
    <label for="TUSSENVOEGSEL">Tussenvoegsel</label>
      <input type="text" name="TUSSENVOEGSEL" class="forminput" style="text-align: center;" id="TUSSENVOEGSEL">
  </p>

  <p>
    <label for="ACHTERNAAM">Achternaam</label>
      <input type="text" name="ACHTERNAAM" id="ACHTERNAAM" class="forminput" style="text-align: center;" required="required">
  </p>

  <p>
    <label for="POSTCODE">Postcode</label>
      <input type="text" name="POSTCODE" id="POSTCODE" class="forminput" style="text-align: center;" required="required">
  </p>

  <p>
    <label for="HUISNUMMER">Huisnummer</label>
      <input type="text" name="HUISNUMMER" id="HUISNUMMER" class="forminput" style="text-align: center;" required="required">
  </p>

  <p>
   <label for="STRAAT">Straat</label>
     <input type="text" name="STRAAT" id="STRAAT" class="forminput" style="text-align: center;" required="required">
  </p>

  <p>
   <label for="TELEFOONNUMMER">Telefoonnummer</label>
     <input type="text" name="TELEFOONNUMMER" id="TELEFOONNUMMER" class="forminput" style="text-align: center;" required="required">
  </p>

  <p>
    <label for="EMAIL">E-mail</label>
      <input type="text" name="EMAIL" id="EMAIL" class="forminput" style="text-align: center;" required="required">
  </p>

  <p>
    <label for="LEGITIMATIENUMMER">Legitimatienummer</label>
      <input type="text" name="LEGITIMATIENUMMER" id="LEGITIMATIENUMMER" class="forminput" style="text-align: center;" required="required">
  </p>

  <p>
	 <button onclick="history.back();return false;">Annuleren</button>
    <input type="submit" name="submit" id="submit" class="forminput" value="Opslaan">
    
  </p>

</form>
	</body>
</html>