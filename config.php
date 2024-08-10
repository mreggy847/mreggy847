<?php 
  // start database connection
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'zenithmind';

	// connect to db
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// check connection
	if (!$conn) {
		echo("connection failed: " .mysqli_connect_error());
	}else{
		echo "";
	}

 ?>