<?php 
$sql_option = "SELECT * FROM danhmuc";
$query_option = mysqli_query($connect,$sql_option);

if(isset($_POST['sbm'])){
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $images = $_FILES['product_img']['name'];
    $images_tmp = $_FILES['product_img']['tmp_name'];
    $product_mota = $_POST['product_mota'];
    $dm_id = $_POST['dm_id'];
    $sql = "INSERT INTO sanpham(sp_name,sp_price,sp_img,sp_mota,sp_iddm) VALUES('$name', $price, '$images','$product_mota', $dm_id)";
    $query = mysqli_query($connect, $sql);
    // if (!$query) {
    //     echo "Error inserting data: " . mysqli_error($connect);
    // };
    move_uploaded_file($images_tmp, 'img/'.$images);
    header('location: index.php?act=danhsachsp');

}
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Sản Phẩm</h2>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên Sản Phẩm</label>
                    <input type="text" name="product_name" class="form-control" require>
                    
                </div>
                <div class="form-group">
                    <label for="">Giá Sản Phẩm</label>
                    <input type="text" name="product_price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Ảnh Sản Phẩm</label>
                    <input type="file" name="product_img" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Mô Tả Sản Phẩm</label>
                    <input type="text" name="product_mota" class="form-control">
                </div>
              <div class="form-group">
                <label for="">Danh Mục</label>
                <select class="form-control" name="dm_id" >
                   <?php 
                   while($row_option = mysqli_fetch_assoc($query_option)){?>
                     <option value="<?php echo $row_option['dm_id']; ?>"><?php echo $row_option['dm_name'];?></option>
                  <?php } ?>
                </select>
              </div>
              <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
              <button name="sbm" class="btn btn-success" type="submit"><a href="index.php?act=danhsachsp"></a>Danh Sách</button>
            </form>
           
        </div>
    </div>
</div>