<?php
  require_once "session.inc.php";
  $ID = $_GET['ID'];
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
<form action="dier_bestand_verwerk.php" method="post" class="login_form" enctype="multipart/form-data">

  <input type="hidden" name="ID" value="<?php echo $ID; ?>">

  <p>
      <label for="pdf">Foto:</label>
      <input type="file" name="pdf" id="pdf" required="required">
  </p>

  <p>
      <input type="submit" name="submit" id="submit" value="uploaden">
      <button onclick="history.back();return false;">Annuleren</button>
  </p>

  <?php

  if (file_exists(__DIR__ . '/dier_extra/' . $ID . '.pdf'))
  {
    echo "<p><object data='dier_extra/" . $ID . ".pdf' type='application.pdf' width='50%' height='50%'><p><b>FOUT</b>: Deze browser ondersteunt geen PDF viewer. je kan het bestand wel downloaden: <a href='dier_extra/". $ID . ".pdf' target='_blank'>Download PDF</a>.</p></object></p>";
  }

  ?>

  <a href="dieren.php">terug</a>
</form>
	</body>
</html>