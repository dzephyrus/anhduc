<?php
	include "connection.php";
	$id = $_GET['id'];
	$sql= "delete from order1 where id_order='$id'";

	$stmt = $conn->prepare($sql);
	$stmt -> execute();
	header("location:lichsumuahang.php");
?>