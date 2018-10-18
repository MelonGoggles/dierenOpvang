<?php
  require_once 'header.php';

  $ID             = $_POST['ID'];
  $SOORT          = $_POST['SOORT'];
  $RAS            = $_POST['RAS'];
  $KLEUR          = $_POST['KLEUR'];
  $GEBOORTE_DATUM = $_POST['GEBOORTE_DATUM'];
  $DATUM_BINNEN   = $_POST['DATUM_BINNEN'];
  $GESLACHT       = $_POST['GESLACHT'];
  $GECASTREERD    = $_POST['GECASTREERD'];
  $OVERIG_KENMERK = $_POST['OVERIG_KENMERK'];
  $MEDISCH        = $_POST['MEDISCH'];
  $GEËNT          = $_POST['GEËNT'];

  if (is_numeric($ID) &&
      strlen($ID)             > 0 &&
      strlen($SOORT)          > 0 &&
      strlen($RAS)            > 0 &&
      strlen($KLEUR)          > 0 &&
      strlen($GEBOORTE_DATUM) > 0 &&
      strlen($DATUM_BINNEN)   > 0 &&
      strlen($GESLACHT)       > 0 &&
      strlen($GECASTREERD)    > 0 &&
      strlen($GEËNT)          > 0)
      {
        $check1 = strtotime($GEBOORTE_DATUM);
        $check2 = strtotime($DATUM_BINNEN);
        if (date('Y-m-d',$check1) == $GEBOORTE_DATUM &&
    			  date('Y-m-d', $check2) == $DATUM_BINNEN)
        {
          $query = "UPDATE DIERENOPVANG_DIEREN
                    SET
                    SOORT = '$SOORT',
                    RAS = '$RAS',
                    KLEUR = '$KLEUR',
                    GEBOORTE_DATUM = '$GEBOORTE_DATUM',
                    DATUM_BINNEN = '$DATUM_BINNEN',
                    GESLACHT = '$GESLACHT',
                    GECASTREERD = '$GECASTREERD',
                    OVERIG_KENMERK = '$OVERIG_KENMERK',
                    MEDISCH = '$MEDISCH',
                    GEËNT = '$GEËNT'
                    WHERE ID = $ID";

          $result = mysqli_query($mysqli, $query);

          if ($result)
          {
            header("Location:dieren.php");
            exit;
          } else
          {
              echo 'er ging iets mis met updaten...';
          }
        }else
        {
          echo "de ingevulde data was ongeldig...";
        }
      }else
      {
        echo "Niet alle velden waren ingevuld...";
        var_dump($ID);
      }
?>
