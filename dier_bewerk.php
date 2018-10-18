<?php
require_once 'header.php';

$ID = $_GET['ID'];

if (is_numeric($ID))
{
  $result = mysqli_query($mysqli, "SELECT * FROM DIERENOPVANG_DIEREN WHERE ID = $ID");

  if (mysqli_num_rows($result) == 1)
  {
    $row = mysqli_fetch_array($result);
  }
  else
  {
    echo "het dier is niet gevonden";
    exit;
  }
}else
{
  echo "onjuist ID";
  exit;
}
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
		  <form action="dier_bewerk_verwerk.php" method="post" class="dier_form">
			  <input type="hidden" name="ID" value="<?php echo $ID; ?>">

				<h3>dier bewerken</h3><br>

			  <p>
				<label for="SOORT">Soort</label>
				  <input type="text" name="SOORT" id="SOORT" class="forminput" style="text-align: center;" required="required"
				  value="<?php echo $row['SOORT']; ?>">
			  </p>

			  <p>
				<label for="RAS">Ras</label>
				  <input type="text" name="RAS" id="RAS" class="forminput" style="text-align: center;" required="required"
				  value="<?php echo $row['RAS']; ?>">
			  </p>

			  <p>
				<label for="KLEUR">Kleur</label>
				  <input type="text" name="KLEUR" id="KLEUR" class="forminput" style="text-align: center;" required="required"
				  value="<?php echo $row['KLEUR']; ?>">
			  </p>

			  <p>
				<label for="GEBOORTE_DATUM">Geboorte datum</label>
				  <input type="date" name="GEBOORTE_DATUM" id="GEBOORTE_DATUM" class="forminput" style="text-align: center;" required="required"
				  value="<?php echo $row['GEBOORTE_DATUM']; ?>">
			  </p>

			  <p>
				<label for="DATUM_BINNEN">Datum binnen</label>
				  <input type="date" name="DATUM_BINNEN" id="DATUM_BINNEN" class="forminput" style="text-align: center;" required="required"
				  value="<?php echo $row['DATUM_BINNEN']; ?>">
			  </p>

			  <p>
				  <label for="GESLACHT">Geslacht</label>
				<label class="forminput">
				  <input type="radio" name="GESLACHT" id="GESLACHT_M" value="M" check="checked"
				  <?php if ($row['GESLACHT'] == 'M') echo 'checked="checked"'; ?>>
				  Man</label><br>
				<label class="forminput">
				  <input type="radio" name="GESLACHT" id="GESLACHT_F" value="F"
				  <?php if ($row['GESLACHT'] == 'F') echo 'checked="checked"'; ?>>
				  Vrouw</label><br>
			  </p>

			  <p>
				<label for="GECASTREERD">Gecastreerd</label>
				<label class="forminput">
				  <input type="radio" name="GECASTREERD" id="GECASTREERD_JA" value="JA" check="checked"
				  <?php if ($row['GECASTREERD'] == 'JA') echo 'checked="checked"'; ?>>
				  Ja</label><br>
				<label class="forminput">
				  <input type="radio" name="GECASTREERD" id="GECASTREERD_NEE" value="NEE"
				  <?php if ($row['GECASTREERD'] == 'NEE') echo 'checked="checked"'; ?>>
				  Nee</label><br>
			  </p>

			  <p>
				<label for="OVERIG_KENMERK">Overig kenmerk</label>
				  <input type="text" name="OVERIG_KENMERK" id="OVERIG_KENMERK" class="forminput" style="text-align: center;"
				  value="<?php echo $row['OVERIG_KENMERK']; ?>">
			  </p>

			  <p>
				<label for="MEDISCH">Medisch</label>
				  <input type="text" name="MEDISCH" id="MEDISCH" class="forminput" style="text-align: center;"
				  value="<?php echo $row['MEDISCH']; ?>">
			  </p>

			  <p>
				<label for="GEËNT">GEËNT</label>
				<label class="forminput">
				  <input type="radio" name="GEËNT" id="GEËNT_JA" value="JA" check="checked"
				  <?php if ($row['GEËNT'] == 'JA') echo 'checked="checked"'; ?>>
				  Ja</label><br>
				<label class="forminput">
				  <input type="radio" name="GEËNT" id="GEËNT_NEE" value="NEE"
				  <?php if ($row['GEËNT'] == 'NEE') echo 'checked="checked"'; ?>>
				  Nee</label><br>
			  </p>

			  <p>
				  <button onclick="history.back();return false;">Annuleren</button>
				<input type="submit" name="submit" id="submit" class="forminput" value="Opslaan">
			  </p>
			</form>
	</body>
</html>