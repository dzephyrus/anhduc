<?php
	session_start();
	include 'connection.php';

	$id_p = $_GET['id_p'];
	$sqlQuery = "select * from product where id_p='$id_p'";
	$stmt = $conn->prepare($sqlQuery);
	$stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(!isset($_SESSION['CART']) || $_SESSION['CART']==null){
	$_SESSION['CART']=[];
	$_SESSION['CART'][]=[
		'id_p' => $product['id_p'],
		'name_p' => $product['name_p'],
		'image_p' => $product['image_p'],
		'price' => $product['price'],
		'sale_p' => $product['sale_p'],
		'sl_p' => $product['sl_p'],
		'quantity' => 1
	];
}else{
	$_SESSION['CART']['quantity']+=1;
		
}
?> echo '<script> alert('Thêm vao giỏ hàng thành công');location.href='cart.php'</script>';<?php

?>