<?php

session_start();
	include 'connection.php';

	$key = $_GET['key'];
	$sqlQuery = "select * from product where id_p='$key'";
	$stmt = $conn->prepare($sqlQuery);
	$stmt->execute();
	$product = $stmt->fetch();
	unset($_SESSION['cart'][$key]);
	$_SESSION['case']="xoa gio hang thanh cong";
	header("location: cart.php");
?>