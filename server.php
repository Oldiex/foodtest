<?php
$host= 'localhost';
$db= 'fos_db';
$user= 'root';
$pass= '';
$charset='utf8';
$induction = mysqli_connect($host,$user,$pass,$db);
if ($induction == false){
	echo "lox";
}
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt =[
	PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,];
	$pdo= new PDO($dsn, $user, $pass, $opt);
	?>