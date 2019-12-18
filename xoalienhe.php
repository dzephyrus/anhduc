<?php
	require_once "connection.php";
$id = $_GET['id'];
$sql= "delete from messinger where id_mess='$id'";

$stmt = $conn->prepare($sql);
$stmt -> execute();
header("location:lienhe.php");
?>