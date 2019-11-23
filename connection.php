<?php
	$dsn="mysql:host=localhost; dbname=duan1; charset=utf8";
	$user="root";
	$pass="";
try{
	$conn=new PDO($dsn,$user,$pass);
}
catch(PDOException $e){
	throw $e;
}
?>