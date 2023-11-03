    <?php 
    $id = $_GET['id'];
    $sql_update = "SELECT * FROM danhmuc where dm_id = $id";
    $query_update = mysqli_query($connect,$sql_update);
    $row_update = mysqli_fetch_assoc($query_update);

    if(isset($_POST['sbm'])){
        $name_dm = $_POST['name_dm'];
        $sql_update = "UPDATE danhmuc SET dm_name = '$name_dm' WHERE dm_id = $id ";
        $query_update = mysqli_query($connect,$sql_update);
        header('location:index.php?act=danhsach.php');
    }else{

    }
    ?>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4>Sửa Danh Mục</h4>
            </div>
            <div class="card-body">
                <form action ="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên Danh Mục</label>
                        <input type="text" name="name_dm" class="form-control" value="<?php echo $row_update['dm_name'] ?>" require>
                        
                    </div>
                <div class="form-group">
                    <label for="">Danh Mục</label>
                    <select class="form-control" name="dm_id" >
                    
                    </select>
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Sửa</button>
                <a class="btn btn-primary" data-bs-toggle="offcanvas" href="index.php?act=danhsach.php">Danh Sách</a>

                </form>
            
            </div>
        </div>
    </div>

