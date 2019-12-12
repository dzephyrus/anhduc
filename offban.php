<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include('connection.php');
	if(isset($_GET['id'])){
	$id = $_GET['id']	;
		$sqlxoa = "update banner set tt='off' where id_ban ='$id'";
		$kqxoa = $conn->prepare($sqlxoa);
		
		if($kqxoa->execute()){
			header('location:banner.php');
		}else{
			echo 'loi';
		}
		
		
	}
	
	
	
	?>
</body>
</html>