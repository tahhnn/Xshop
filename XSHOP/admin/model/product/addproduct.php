
<?php
    include '../connect.php';
    $sql="SELECT * FROM type";
    $kq=$connect->query($sql);

    if (isset($_POST['btn_submit'])) {
        $name=$_POST['name'];

        $img=$_FILES['img']['name'];
        $img_tmp=$_FILES['img']['tmp_name'];
        $price=$_POST['price'];
        $disc=$_POST['disc'];
        $status=$_POST['status'];
        $discount=$_POST['discount'];
        $view=$_POST['view'];
        $id_type=$_POST['id_type'];
        $sql_add="INSERT INTO products (`name`, `img`, `price`, `disc`, `status`, `discount`, `view`, `id_type`) VALUES ('$name','$img',$price,'$disc','$status',$discount,$view,$id_type)";
        $statement = $connect->prepare($sql_add);
        $statement->execute();
        move_uploaded_file($img_tmp,'../../public/Admin/image/'.$img);
        header('location: ../../index.php?act=product');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   
        <header class="text-center bg-dark"><h2 class="text-light p-3">Admin</h2></header>
        <nav class="navbar navbar-expand-lg bg-light">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../index.php?act=list">Danh mục</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../index.php">Trang chủ</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../index.php?act=product">Sản phẩm</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../index.php?act=customer">Khách hàng</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../index.php?act=cmt">Bình luận</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../index.php?act=">Thống kê</a></li>
            </ul>
        </nav>
<h2>Thêm sản phẩm</h2>
<form method="POST" enctype="multipart/form-data">
    <div>
        <label>Name</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label>Image</label>
        <input type="file" name="img">
    </div>
    <div>
        <label>Price</label>
        <input type="text" name="price" required>
    </div>
    <div>
        <label>Disc</label>
        <input type="text" name="disc" required>
    </div>
    <div>
        <label>Status</label>
        <input type="text" name="status" required>
    </div>
    <div>
        <label>Discount</label>
        <input type="text" name="discount" required>
    </div>
    <div>
        <label>View</label>
        <input type="text" name="view" required>
    </div>
    <div>
        <label>Thể loại</label>
        <select name="id_type">
            <?php foreach ($kq as $row) {?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php } ?>
        </select>
    </div>
    <button type="submit" name="btn_submit">Thêm</button>
</form>