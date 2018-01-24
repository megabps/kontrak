<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "pln_kontrak";

	$conn = mysqli_connect($servername, $username, $password, $db);
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>