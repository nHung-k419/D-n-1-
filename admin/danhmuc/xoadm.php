<?php 
$id = $_GET['id'];
$sql_delete = "DELETE FROM danhmuc where dm_id = $id";
$query_delete = mysqli_query($connect,$sql_delete);
 header('location:index.php?act=danhsach.php');
?>