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

    <title>Dieren</title>
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
            <a class="nav-link" href="klanten.php">Klanten</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Dieren</a>
          </li>
        </ul>
      </div>
    </nav>


    <!-- HIERONDER KOMT DE TABEL/BACKEND VOOR DE DIEREN -->
    <div class="margin">
      <h3>Dierenoverzicht</h3>
      <?php

      $result = mysqli_query($mysqli, "SELECT * FROM DIERENOPVANG_DIEREN ORDER BY SOORT ASC");
      echo "<table border='1'>";

      echo "<tr>";

      echo "<th>ID</th>";
      echo "<th>Soort</th>";
      echo "<th>Ras</th>";
      echo "<th>Kleur</th>";
      echo "<th>Geboorte datum</th>";
      echo "<th>Datum binnen</th>";
      echo "<th>Geslacht</th>";
      echo "<th>Gecastreerd</th>";
      echo "<th>Overig kenmerk</th>";
      echo "<th>Medish</th>";
      echo "<th>Geent</th>";
      echo "<th></th>";
      echo "<th></th>";
      echo "<th></th>";
      echo "<th></th>";

      echo "</tr>";

      while ($row = mysqli_fetch_array($result))
      {
        echo "<tr>";

        echo "<td>" . $row[ID] . "</td>";
        echo "<td>" . $row[SOORT] . "</td>";
        echo "<td>" . $row[RAS] . "</td>";
        echo "<td>" . $row[KLEUR] . "</td>";
        echo "<td>" . $row[GEBOORTE_DATUM] . "</td>";
        echo "<td>" . $row[DATUM_BINNEN] . "</td>";
        echo "<td>" . $row[GESLACHT] . "</td>";
        echo "<td>" . $row[GECASTREERD] . "</td>";
        echo "<td>" . $row[OVERIG_KENMERK] . "</td>";
        echo "<td>" . $row[MEDISCH] . "</td>";
        echo "<td>" . $row[GEËNT] . "</td>";
        echo "<td><a href='dier_bewerk.php?ID=". $row['ID'] . "'>bewerk</a></td>";
        echo "<td><a href='dier_verwijder.php?ID=". $row['ID'] ."'>verwijder</a></td>";
        echo "<td><a href='dier_foto.php?ID=". $row['ID'] ."'>foto</a></td>";
        echo "<td><a href='dier_bestand.php?ID=". $row['ID'] ."'>Extra bestand</a></td>";

        echo "</tr>";
      }

      echo "</table>";
    ?>

    <p><a href="dier_nieuw.php">klik hier</a> om een nieuw dier in te schrijven.</p><br><br>
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
