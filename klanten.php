<?php

require_once 'header.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Klanten</title>

	<style>
		th{
			padding-right: 15px;
		}

		td{
			padding-right: 15px;
		}

		.margin{
			margin-left: 15px;
		}
	</style>

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Administratie</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link active" href="#">Klanten</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dieren.php">Dieren</a>
      </li>
    </ul>
  </div>
</nav>

    <!-- HIERONDER KOMT DE TABEL/BACKEND VOOR DE KLANTEN -->
    <div class="margin">
		<h3>Klanten overzicht</h3>

		<?php

		  $result = mysqli_query($mysqli, "SELECT * FROM DIERENOPVANG_KLANTEN ORDER BY ACHTERNAAM ASC");
		  echo "<table border='1'>";

		  echo "<tr>";

		  echo "<th>ID</th>";
		  echo "<th>Voornaam</th>";
		  echo "<th>Tussenvoegsel</th>";
		  echo "<th>Achternaam</th>";
		  echo "<th>Postcode</th>";
		  echo "<th>Huisnummer</th>";
		  echo "<th>Straat</th>";
		  echo "<th>Telefoonnummer</th>";
		  echo "<th>E-mail</th>";
		  echo "<th>Legitimatienummer</th>";
      	echo "<th></th>";
      	echo "<th></th>";
      	echo "<th></th>";

		  echo "</tr>";

		  while ($row = mysqli_fetch_array($result))
		  {
			echo "<tr>";

			echo "<td>" . $row[ID] . "</td>";
			echo "<td>" . $row[VOORNAAM] . "</td>";
			echo "<td>" . $row[TUSSENVOEGSEL] . "</td>";
			echo "<td>" . $row[ACHTERNAAM] . "</td>";
			echo "<td>" . $row[POSTCODE] . "</td>";
			echo "<td>" . $row[HUISNUMMER] . "</td>";
			echo "<td>" . $row[STRAAT] . "</td>";
			echo "<td>" . $row[TELEFOONNUMMER] . "</td>";
			echo "<td>" . $row[EMAIL] . "</td>";
			echo "<td>" . $row[LEGITIMATIENUMMER] . "</td>";
     	 	echo "<td><a href='klant_bewerk.php?ID=". $row['ID'] . "'>bewerk</a></td>";
      		echo "<td><a href='klant_verwijder.php?ID=". $row['ID'] . "'>verwijderen</a></td>";
     	 	echo "<td><a href='klant_foto.php?ID=". $row['ID'] . "'>foto</a></td>";

			echo "</tr>";
		  }

		  echo "</table>";
		?>

		<p><a href="klant_nieuw.php">klik hier</a> om een nieuwe klant in te schrijven.</p><br><br>
    <p>Je bent ingelogd als <?php echo $_SESSION['username']; ?><br>
    <a href="logout.php">Klik hier</a> om uit te loggen.</p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
