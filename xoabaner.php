<?php
	require_once "connection.php";
$id = $_GET['id'];
$sql= "delete from banner where id_ban='$id'";

$stmt = $conn->prepare($sql);
$stmt -> execute();
header("location:banner.php");
?>