<?php 
$connect = mysqli_connect('localhost','root','','duanmot2023');
if($connect){
    mysqli_query($connect,"SET NAMES 'UTF8'");
    // echo 'kết nối thành công';
    
}else{
    echo 'ket noi that bai';
}
?>
