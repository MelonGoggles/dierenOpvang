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
<form action="klant_foto_verwerk.php" method="post" class="klant_form" enctype="multipart/form-data">

  <input type="hidden" name="ID" value="<?php echo $ID; ?>">

  <p>
      <label for="foto">Foto:</label>
      <input type="file" name="foto" id="foto" required="required">
  </p>

  <p>
      <input type="submit" name="submit" id="submit" value="uploaden">
      <button onclick="history.back();return false;">Annuleren</button>
  </p>

  <?php

  if (file_exists(__DIR__ . '/klant_uploads/' . $ID . '.jpg'))
  {
    echo "<p><img src='klant_uploads/" . $ID . ".jpg' alt='foto'></p>";
  }

  ?>

  <a href="klanten.php">terug</a>
</form>
	</body>
	  </html>