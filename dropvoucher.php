<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include('connection.php');
	if(isset($_GET['maxoa'])){
	$maxoa = $_GET['maxoa']	;
		$sqlxoa = "delete from voucher where id_vc ='$maxoa'";
		$kqxoa = $conn->prepare($sqlxoa);
		
		if($kqxoa->execute()){
			header('location:voucher1.php');
		}else{
			echo 'loi';
		}
		
		
	}
	
	
	
	?>
</body>
</html>