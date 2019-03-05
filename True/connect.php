<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$dbm = "sikad";

   /*define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'sikad');*/
   $db = mysqli_connect($host,$user,$password,$dbm);
?>