<?php
include 'connection.php';
if(isset($_GET['maxoa'])){
	$maxoa=$_GET['maxoa'];
	$sql = "delete from product where id_p='$maxoa'";
	$kq = $conn -> prepare($sql);
	if($kq->execute()){
		header ("location:sanpham1.php");
	}else{
		echo "loi";
	}
}
?>