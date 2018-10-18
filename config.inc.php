<?php
//database logingegevens
$db_hostname = 'localhost';
$db_username = '82129_BACK2';
$db_password = 'Waterpistool25';
$db_database = '82129_BEROEPS';

//maak verbinding met de db
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

//meldign als er niet verbonden kan worden
if (!mysqli)
{
	echo "FOUT: geenconnectie. <br>";
	echo "Errno ", mysqli_connect_errno() , "<br/>";
	echo "Error ", mysqli_connect_error() , "<br/>";
}
?>