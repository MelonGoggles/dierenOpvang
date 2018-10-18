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

<form action="dier_nieuw_verwerk.php" method="post" class="dier_form">
	<h3> Een nieuw dier toevoegen </h3><br>
	<p>
    <label for="SOORT">Soort</label>
      <input type="text" name="SOORT" id="SOORT" class="forminput" style="text-align: center;" required="required">
  </p>

  <p>
    <label for="RAS">Ras</label>
      <input type="text" name="RAS" id="RAS" class="forminput" style="text-align: center;" required="required">
  </p>

  <p>
    <label for="KLEUR">Kleur</label>
      <input type="text" name="KLEUR" id="KLEUR" class="forminput" style="text-align: center;" required="required">
  </p>

  <p>
    <label for="GEBOORTE_DATUM">Geboorte datum</label>
      <input type="date" name="GEBOORTE_DATUM" id="GEBOORTE_DATUM" class="forminput" style="text-align: center;" required="required">
  </p>

  <p>
    <label for="DATUM_BINNEN">Datum binnen</label>
      <input type="date" name="DATUM_BINNEN" id="DATUM_BINNEN" class="forminput" style="text-align: center;" required="required">
  </p>

  <p>
	  <label for="GESLACHT">Geslacht</label>
    <label class="forminput">
		Man
      <input type="radio" name="GESLACHT" id="GESLACHT_M" value="M" check="checked">
      </label><br>
    <label class="forminput">
		Vrouw
      <input type="radio" name="GESLACHT" id="GESLACHT_F" value="F">
      </label>
  </p><br>

  <p>
    <label for="GECASTREERD">Gecastreerd</label>
    <label class="forminput">
		Ja
      <input type="radio" name="GECASTREERD" id="GECASTREERD_JA" value="JA" check="checked">
      </label><br>
    <label class="forminput">
		Nee
      <input type="radio" name="GECASTREERD" id="GECASTREERD_NEE" value="NEE">
      </label>
  </p><br>

  <p>
    <label for="OVERIG_KENMERK">Overig kenmerk</label>
      <input type="text" name="OVERIG_KENMERK" class="forminput" style="text-align: center;" id="OVERIG_KENMERK">
  </p>

  <p>
    <label for="MEDISCH">Medisch</label>
      <input type="text" name="MEDISCH" class="forminput" style="text-align: center;" id="MEDISCH">
  </p>

  <p>
    <label for="GEËNT">GEËNT</label>
    <label class="forminput">
	  Ja
      <input type="radio" name="GEËNT" id="GEËNT_JA" value="JA" check="checked">
      </label><br>
    <label class="forminput">
	  Nee
      <input type="radio" name="GEËNT" id="GEËNT_NEE" value="NEE">
      </label>
  </p><br>

  <p>
	<button onclick="history.back();return false;">Annuleren</button>
    <input type="submit" name="submit" id="submit" class="forminput" value="Opslaan">
  </p>
</form>
	</body>
</html>