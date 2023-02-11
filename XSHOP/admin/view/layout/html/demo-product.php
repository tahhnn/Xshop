<?php
include '../../../model/load1product.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style-product.css">
</head>

<body>
    <div class="container">
        <header>
            SIÊU THỊ TRỰC TUYẾN
        </header>
        <nav class="nav-navigation">
            <ul class="ul-navigation">
                <li class="li-navigation">
                    <a href="admin/index.php?act=home"> Trang chủ</a>
                </li>
                <li class="li-navigation">
                    <a href="">Giới thiệu </a>
                </li>
                <li class="li-navigation">
                    <a href=""> Liên hệ </a>
                </li>
                <li class="li-navigation">
                    <a href="">Góp ý </a>
                </li>
                <li class="li-navigation">
                    <a href="">Hỏi đáp</a>
                </li>

            </ul>
        </nav>
    <!-- thêm sản phẩm vào phần này chú ý dùng fetch trong file model/load1product.php 
        Thêm đường dẫn tới trang chủ-->
        <?php
        foreach ($data_product as $key => $value) { ?>
            <div class="div-content-left border border-2 rounded border-dark p-5 mt-2">
                <img class="img-product mb-3 border" src="../../../public/Admin/image<?=$value['img']?>" alt="">
                <div class="div-disc">

                    <h3 class="h3-name">
                        <?= $value['name'] ?>
                    </h3>
                    <ul class="ul-list-disc fs-4">
                        <li class="li-list-disc"><?= $value['id_type'] ?></li>
                        <li class="li-list-disc"><?= $value['disc'] ?></li>
                        <li class="li-list-disc"><?= $value['price'] ?></li>
                        <li class="li-list-disc"><?= $value['status'] ?></li>
                        <li class="li-list-disc"><?= $value['discount'] ?></li>
                        <li class="li-list-disc"><?= $value['view'] ?></li>

                    </ul>


                </div>
            </div>
        <?php      } ?>
        <div class="div-right-content">
            <div class="div-login">
                <header> TÀI KHOẢN </header>
                <form action="">
                    <p>Tên đăng nhập <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"> </p>
                    <p> Mật khẩu <input type="text" class="form-control" placeholder="password" aria-label="Username" aria-describedby="basic-addon1"> </p>

                    <p class="form-control"> <input class="input-checkbox" type="checkbox" name="" id="">Ghi nhớ tài khoản</p>
                    <button type="submit" class="button-login ">Đăng Nhập </button>
                    <p>
                        <a href=""> Quên mật khẩu </a>
                    </p>
                    <p> <a href=""> Đăng kí thành viên </a>
                    </p>
            </div>
            <div class="div-list">
                <header> DANH MỤC </header>
                <ul class="ul-list">
                    <li class="li-list"> <a href=""> Đồng hồ đeo tay</a></li>
                    <hr>
                    <li class="li-list"> <a href=""> Đồng hồ đeo tay</a></li>
                    <hr>
                    <li class="li-list"> <a href=""> Đồng hồ đeo tay</a></li>
                    <hr>
                    <li class="li-list"> <a href=""> Đồng hồ đeo tay</a></li>
                    <hr>
                    <li class="li-list"> <a href=""> Đồng hồ đeo tay</a></li>
                    <hr>
                </ul>
                <input type="text" class="form-control" placeholder="tìm kiếm từ khóa " aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="div-top">
                <header> Top 10 yêu thích nhất </header>
            </div>
        </div>
    </div>
    </div>
</body>

</html>