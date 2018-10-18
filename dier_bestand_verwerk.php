<?php
require_once "session.inc.php";

if (isset($_FILES['pdf']) && $_FILES['pdf']['error']==0)
{
  if($_FILES['pdf']['type'] == "application/pdf")
     {
       $map = __DIR__ . "/dier_extra/";

       $bestand = $_POST['ID'] . '.pdf';

       move_uploaded_file($_FILES['pdf']['tmp_name'], $map . $bestand);

       header("Location:dier_bestand.php?ID=".$_POST['ID']);
     }
     else
     {
       echo "het bestand is niet van het goede type (pdf)";
     }
}
else
{
  echo "er ging wat mis bij het uploaden van het bestand";
}
?>
