<?php
require_once "session.inc.php";

if (isset($_FILES['foto']) && $_FILES['foto']['error']==0)
{
  if($_FILES['foto']['type'] == "image/jpg" ||
     $_FILES['foto']['type'] == "image/jpeg" ||
     $_FILES['foto']['type'] == "image/pjpeg")
     {
       $map = __DIR__ . "/klant_uploads/";

       $bestand = $_POST['ID'] . '.jpg';

       move_uploaded_file($_FILES['foto']['tmp_name'], $map . $bestand);

       header("Location:klant_foto.php?ID=".$_POST['ID']);
     }
     else
     {
       echo "het bestand is niet van het goede type (.jpg, .jpeg, .pjpeg)";
     }
}
else
{
  echo "er ging wat mis bij het uploaden van het bestand";
}
?>
