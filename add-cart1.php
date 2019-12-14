<?php
	session_start();
	include 'connection.php';
if(isset($_GET['id_p'])){
	$id_p = $_GET['id_p'];
	$sqlQuery = "select * from product where id_p='$id_p'";
	$stmt = $conn->prepare($sqlQuery);
	$stmt->execute();
	$product = $stmt->fetch();

	if(!isset($_SESSION['cart']) || $_SESSION['cart']==null){
		$_SESSION['cart'][]=[];
		$_SESSION['cart'][]=[
			'id_p' => $product['id_p'],
			'name_p' => $product['name_p'],
			'image_p' => $product['image_p'],
			'price' => $product['price'],
			'sale_p' => $product['sale_p'],
			'quantity' => 1
		];
	}else{
		$cart = $_SESSION['cart'];
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
			'quantity' => 1
			];
		}else{
			$cart[$existed]['quantity']-=1;
		}
		$_SESSION['cart'] = $cart;

}}else{
	echo "ko co";
}
	?> echo '<script> location.href='cart.php'</script>';<?php
?>