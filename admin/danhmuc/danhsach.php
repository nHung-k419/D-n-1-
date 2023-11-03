<?php 
$sql = "SELECT * FROM danhmuc";
$query = mysqli_query($connect,$sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4>Danh Sách Sản Phẩm</h4>
        </div>
        <div class="card-body">
            <table class="table">
               <thead class="thead-dark">
                

                
               <tr>
                    <th>#</th>
                    <th>Tên Danh Mục</th>
                    <th>Sửa</th>
                    <th>Xóa</th>


                </tr>
               </thead>
               <tbody>
               <?php
               
                while($row = mysqli_fetch_assoc($query)){?>
                <tr>
                    <td><?php echo $row['dm_id'] ?></td>
                    <td><?php echo $row['dm_name'] ?></td>
                    <td><a href="index.php?act=suadm&id=<?php echo $row['dm_id'];?>">Sửa</a></td>
                    <td><a href="index.php?act=xoadm&id=<?php echo $row['dm_id'];?>">Xóa</a></td>

                   
                </tr>
               <?php } ?>
               </tbody>
              
            </table>
            <a class="btn btn-primary" href="index.php?act=themdm">Quay Lại</a>
        </div> 
        </div>
</div>