<?php

require_once 'config.inc.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (strlen($username) > 0 && strlen($password) > 0)
{
	$query = "SELECT * FROM DIERENOPVANG_USERS
			  WHERE USERNAME = '$username'
			  AND PASSWORD = '$password'";

	$result = mysqli_query($mysqli, $query);

	if (mysqli_num_rows($result) == 1)
	{
		session_start();

		$_SESSION['username'] = $username;

		header("Location:dieren.php");
	} else
	{
		header("Location:index.php");
		exit;
	}
} else
{
	echo "Niet alle velden zijn ingevuld";
	exit;
}

?>
