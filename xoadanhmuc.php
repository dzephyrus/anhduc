<?php
	require_once "connection.php";
$id = $_GET['id'];
$sql= "delete from category where id_cate='$id'";

$stmt = $conn->prepare($sql);
$stmt -> execute();
header("location:danhmuc1.php");
?>