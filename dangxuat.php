<?php session_start(); 
if (isset($_SESSION['name_u'])){
    session_destroy();
    header('location:trangchu.php');
}
?>