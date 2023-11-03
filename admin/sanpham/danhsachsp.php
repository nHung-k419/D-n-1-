<?php 
$sql = "SELECT * FROM sanpham inner join danhmuc on sanpham.sp_iddm = danhmuc.dm_id ORDER BY sp_id ASC";
$query = mysqli_query($connect,$sql);
 if (!$query) {
        echo "Error inserting data: " . mysqli_error($connect);
    };
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh Sách Sản Phẩm</h2>
        </div>
        <div class="card-body">
            <table class="table">
               <thead class="thead-dark">
               <tr>
                    <th>#</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá Sản Phẩm</th>
                    <th>Ảnh Sản Phẩm</th>
                    <th>Mô Tả</th>
                    <th>Loại Danh Mục</th>
                    <th>Sửa</th>
                    <th>Xóa</th>


                </tr>
               </thead>
               <tbody>
                <?php 
                while($row = mysqli_fetch_assoc($query)){?>
                <tr>
                    <td><?php echo $row['sp_id'] ?></td>
                    <td><?php echo $row['sp_name']; ?></td>
                    <td><?php echo $row['sp_price'] ;?></td>
                    <td>
                    <img src="img/<?php echo $row['sp_img']; ?>" alt="<?php echo $row['sp_name']; ?>" width="100" height="80" >
                    </td>
                    <td><?php echo $row['sp_mota']; ?></td>
                    <td><?php echo $row['dm_name'] ?></td>
                    <td><a href="index.php?act=suasp&id=<?php echo $row['sp_id']?>">Sửa</a></td>
                    <td><a href="index.php?act=xoasp&id=<?php echo $row['sp_id']?>">Xóa</a></td>
                   
                    

                </tr>
               <?php } ?>
               </tbody>
              
            </table>
            <a class="btn btn-primary" href="index.php?act=themsp">Thêm</a>
        </div>
    </div>
</div>