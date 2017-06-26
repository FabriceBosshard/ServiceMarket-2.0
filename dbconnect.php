<?php

	$host='localhost';
	$username='root';
	$pass='';
	$db='servicemarket';
	$port = 3306;

	$conn=mysqli_connect($host,$username,$pass,$db, $port);

	if(!$conn) die("Connection refused").mysql_connect_error();
 ?>
