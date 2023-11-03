<?php 
$sql = "SELECT * FROM danhmuc ";
$query_option = mysqli_query($connect,$sql);


if(isset($_POST['sbm'])){
      $name = $_POST['name_dm'];
      $dm_id = $_POST['dm_id'];
      $sql = "INSERT INTO danhmuc(dm_name) VALUES ('$name')";
      $query = mysqli_query($connect,$sql);
      header('location:index.php?act=danhsach.php');
}else{

}

?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4>Thêm Danh Mục</h4>
        </div>
        <div class="card-body">
            <form action ="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên Danh Mục</label>
                    <input type="text" name="name_dm" class="form-control" require>
                    
                </div>
              <div class="form-group">
                <label for="">Danh Mục</label>
                <select class="form-control" name="dm_id" >
                    <?php 
                    while($row = mysqli_fetch_array($query_option)){ ?>
                  <option value="<?php echo $row['dm_id']; ?>"><?php echo $row['dm_name'];?></option>
                  <?php  } ?>
                </select>
                
              </div>
              <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
              <a class="btn btn-primary" data-bs-toggle="offcanvas" href="index.php?act=danhsach.php">Danh Sách</a>

            </form>
           
        </div>
    </div>
</div>

