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
	  <form action="" class="login_form">
<h3>Dier verwijderen</h3>

<p>
  Weet je zeker dat je dit dier wilt verwijderen?
</p><br><br>

<p>
  <a href="dier_verwijder_verwerk.php?ID=<?php echo $ID; ?>">Ja, verwijderen</a>
  <br>
  <a href="dieren.php">Nee, terug</a>
</p>
	</body>
</html>