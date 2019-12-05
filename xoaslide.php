<?php
	require_once "connection.php";
$id = $_GET['id'];
$sql= "delete from slide where id_slide='$id'";

$stmt = $conn->prepare($sql);
$stmt -> execute();
header("location:slide1.php");
?>