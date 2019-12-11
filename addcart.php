<?php
session_start();
$id=$_GET['id'];
include 'connection.php';
	$sql="select * from product where id_p='$id'";
if($id != ""){
	
	//Xử lý lệnh sql
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$row = $stmt -> fetch();
	
	
	if($row ==1 ){
		if(isset($_SESSION['addcart'][$id]))
		{
		 $qty = $_SESSION['addcart'][$id] +=1;
		}
		else{
			$_SESSION['addcart'][$id] = 1;
		}
		header("location:cart.php");
	}
}


exit();
?>