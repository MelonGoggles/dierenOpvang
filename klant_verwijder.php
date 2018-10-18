<?php
require_once 'header.php';

$ID = $_GET['ID'];

if (is_numeric($ID))
{
  $result = mysqli_query($mysqli, "SELECT * FROM DIERENOPVANG_KLANTEN WHERE ID = $ID");

  if (mysqli_num_rows($result) == 1)
  {
    $row = mysqli_fetch_array($result);
  }
  else
  {
    echo "de klant is niet gevonden";
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
<form action="" class="login_form">
<h3>Klant verwijderen</h3>

<p>
  Weet je zeker dat je de klant
  <strong><?php echo $row['VOORNAAM'] . " " . $row['TUSSENVOEGSEL'] . " " . $row ['ACHTERNAAM']; ?></strong>
  wilt verwijderen?
</p>

<p>
  <a href="klant_verwijder_verwerk.php?ID=<?php echo $ID; ?>">Ja, verwijderen</a>
  /
  <a href="klanten.php">Nee, terug</a>
</p>
	</body>
</html>