<?php
	session_start();
	include 'connection.php';
	if(isset($_POST['id_p'])){
		$id_p = $_POST['id_p'];

		if(isset($_SESSION['cart'])){
			$_SESSION['cart']=[];
			$_SESSION['cart'][]=[
				'id_p' => $product['id_p'],
				'name_p' => $product['name_p'],
				'image_p' => $product['image_p'],
				'price' => $product['price'],
				'sale_p' => $product['sale_p'],

				'quantity' => 1
			];
		}else{
			
			$_SESSION['cart'] = $cart;
		}}else{
		unset($cart);
	}
	?>