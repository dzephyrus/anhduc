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
		$sqlupdate = "update order1 set status='off' where id_order ='$id'";
		$kqupdate = $conn->prepare($sqlupdate);
		
		if($kqupdate->execute()){
			header('location:order1.php');
		}else{
			echo 'loi';
		}
		
		
	}
	
	
	
	?>
</body>
</html>