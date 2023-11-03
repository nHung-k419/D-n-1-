<?php 
$id = $_GET['id'];
$sql = "DELETE FROM sanpham where sp_id = $id";
$query = mysqli_query($connect,$sql);
header('location:index.php?act=danhsachsp');
?>