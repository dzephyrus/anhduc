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
		$sqlxoa = "update slide set title='off' where id_slide ='$id'";
		$kqxoa = $conn->prepare($sqlxoa);
		
		if($kqxoa->execute()){
			header('location:slide1.php');
		}else{
			echo 'loi';
		}
		
		
	}
	
	
	
	?>
</body>
</html>