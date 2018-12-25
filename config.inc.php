
<?php
  $host = "localhost";
	$port = "5432";
	$dbname = "kemasui";
	$user = "admin";
	$password = "1234";
	$db = pg_connect( "host=$host port=$port dbname=$dbname user=$user password=$password" );

    session_start();
?>
