<?php
    include"connection.php";
    if(isset($_GET['maxoa'])){
        $idsp = $_GET['idsp'];
        $maxoa = $_GET['maxoa'];
        $sql = "delete from comment where id_cmt='$maxoa'";
        $kq = $conn->prepare($sql);
        if($kq->execute()){
            header("location:comment2.php?idsp=$idsp");
        }else{
            echo "Lỗi";
        }
    }
?>
