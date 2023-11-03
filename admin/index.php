<?php
include "../connect/connect_db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
 <nav class="navbar-light bg-light">

<div class="navbar ">
    <h2>Trang Admin</h2>

<ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link active" href="index.php?act=themdm">Danh Mục</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php?act=themsp">Sản Phẩm</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php?act=ds_binhluan">Bình Luận</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="index.php?act=ds_khachhang">Khách Hàng</a>
     </li>
    
  </ul>
</div>
</nav>
<?php
if(isset($_GET['act'])){
    switch($_GET['act']){
      // Admin Danh Mục 
        case 'danhsach.php':
          include "danhmuc/danhsach.php";
            break;
        case 'themdm':
            include "danhmuc/themdm.php";
            break;
        case 'suadm':
            include "danhmuc/suadm.php";
            break;
        case 'xoadm':
            include "danhmuc/xoadm.php";
              break;
            
          // END Danh Mục 
        // Admin Sản Phẩm 
        case 'danhsachsp':
            include "sanpham/danhsachsp.php";
              break;
        case 'themsp':
            include "sanpham/themsp.php";
              break;
        case 'suasp':
            include "sanpham/suasp.php";
            break;
        case 'xoasp':
            include "sanpham/xoasp.php";
            break;
        default:    
        //  include "home.php";
    }
}

?>
</body>
</html>