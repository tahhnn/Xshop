
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

<div class="div-login my-5 w-25 mx-auto rounded-1 border-success border-5 p-3">
    <header class="w-100 bg-success"> TÀI KHOẢN </header>
    <form class="w-50 mx-auto my-5" action="XSHOP/admin/model/checkLogin.php" method="POST">
        <p>Tên đăng nhập <input type="text" class="form-control" placeholder="Username"
                aria-label="Username" aria-describedby="basic-addon1" name="name"> </p>
        <p> Mật khẩu <input type="password" class="form-control" placeholder="password"
                aria-label="" name="pwd" aria-describedby="basic-addon1"> </p>

        <button type="submit" class="button-login btn btn-danger" name="login">Đăng Ký </button>
      
</div>
</body>
</html>