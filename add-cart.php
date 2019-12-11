<?php
	session_start();
	include 'connection.php';

	$id_p = $_GET['id_p'];
	$sqlQuery = "select * from product where id_p='$id_p'";
	$stmt = $conn->prepare($sqlQuery);
	$stmt->execute();
	$product = $stmt->fetch();

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
	$cart = $_SESSION['CART'];
	$existed = -1;
	foreach ($cart as $index => $item) {
		if($item['id_p'] == $product['id_p']){
			$existed = $index;
			break;
		}
	}
	if($existed == -1){
		$cart[] = [
			'id_p' => $product['id_p'],
		'name_p' => $product['name_p'],
		'image_p' => $product['image_p'],
		'price' => $product['price'],
		'sale_p' => $product['sale_p'],
		'sl_p' => $product['sl_p'],
		'quantity' => 1
		];
	}else{
		$cart[$existed]['quantity']+=1;
	}
	$_SESSION['CART'] = $cart;
		
}
?> echo '<script> alert('Thêm vao giỏ hàng thành công');location.href='cart.php'</script>';<?php

?>