<?php
  require_once 'header.php';

  $VOORNAAM          = $_POST['VOORNAAM'];
  $TUSSENVOEGSEL     = $_POST['TUSSENVOEGSEL'];
  $ACHTERNAAM        = $_POST['ACHTERNAAM'];
  $POSTCODE 		     = $_POST['POSTCODE'];
  $HUISNUMMER   	   = $_POST['HUISNUMMER'];
  $STRAAT       	   = $_POST['STRAAT'];
  $TELEFOONNUMMER    = $_POST['TELEFOONNUMMER'];
  $EMAIL 			       = $_POST['EMAIL'];
  $LEGITIMATIENUMMER = $_POST['LEGITIMATIENUMMER'];

  if (strlen($VOORNAAM)          > 0 &&
	  strlen($ACHTERNAAM)          > 0 &&
      strlen($POSTCODE)   		   > 0 &&
      strlen($HUISNUMMER)        > 0 &&
      strlen($STRAAT)      	     > 0 &&
      strlen($TELEFOONNUMMER)    > 0 &&
      strlen($EMAIL) 			       > 0 &&
      strlen($LEGITIMATIENUMMER) > 0)
      {
          $query = "INSERT INTO DIERENOPVANG_KLANTEN (
          VOORNAAM,
					TUSSENVOEGSEL,
					ACHTERNAAM,
					POSTCODE,
					HUISNUMMER,
					STRAAT,
					TELEFOONNUMMER,
					EMAIL,
					LEGITIMATIENUMMER
          )
          VALUES
          (
          '$VOORNAAM',
          '$TUSSENVOEGSEL',
          '$ACHTERNAAM',
          '$POSTCODE',
          '$HUISNUMMER',
          '$STRAAT',
          '$TELEFOONNUMMER',
          '$EMAIL',
          '$LEGITIMATIENUMMER'
          )";

          $result = mysqli_query($mysqli, $query);

	  	    if ($result)
          {
            header("Location:klanten.php");
            exit;
          } else
          {
            echo 'er ging iets mis met toevoegen...';
          }
      } else
     	{
        echo "Niet alle velden waren ingevuld...";
      }
?>
