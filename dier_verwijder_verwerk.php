<?php
require_once 'header.php';

$ID = $_GET['ID'];

if(is_numeric($ID))
{
  $result = mysqli_query($mysqli, "DELETE FROM DIERENOPVANG_DIEREN WHERE ID = $ID");

  if ($result)
  {
    header("Location:dieren.php");
    exit;
  }else
  {
    echo "er ging wat mis tijdens het verwijderen...";
  }
}else
{
  echo "onjuist ID...";
  exit;
}
?>
