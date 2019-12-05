<?php
	require_once "connection.php";
$id = $_GET['id'];
$sql= "delete from user where id_u='$id'";

$stmt = $conn->prepare($sql);
$stmt -> execute();
header("location:account1.php");
?>