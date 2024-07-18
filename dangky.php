<?php
session_start();

include '../DA1/dao/connectDb.php';
include 'dao/tai-khoan.php';

if (isset($_POST['submit'])) {
  $name = $_POST['hoten'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $user = $_POST['username'];

  $registrationStatus = them_dk($user, $pass, $email, $name);

  if ($registrationStatus === true) {
    $_SESSION['registrationSuccess'] = true;
    header('location: dangnhap.php');
  } else {
    $_SESSION['registrationError'] = true;
    header('location: dangky.php');
  }
}

$error = '';

if (isset($_SESSION['registrationError'])) {
  $error = 'Lỗi đăng ký. Vui lòng thử lại!';
  unset($_SESSION['registrationError']);
}

?>
<html>
<head>
  <title>ĐĂNG KÍ FORM</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="css/dk.css">
  <style>
    .error-msg {
      margin: 10px 0;
      display: block;
      background: crimson;
      color: white;
      border-radius: 5px;
      font-size: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="title">Đăng kí</div>
    <form action="" method="post">

      <div class="account-details">
        <div class="form-group">
          <label class="form-title" for="email">Email</label>
          <input type="email" name="email" placeholder="Nhập email của bạn" required>
        </div>
        <div class="form-group">
          <label class="form-title" for="password">Mật khẩu</label>
          <input type="password" name="password" placeholder="Nhập mật khẩu / password của bạn " required>
        </div>
        <div class="form-group">
          <label class="form-title" for="">Nhập lại mật khẩu</label>
          <input type="password" name="password" placeholder="Nhập lại mật khẩu / password của bạn " required>
        </div>
      </div>
      <div class="user-details">
        <div class="form-group">
          <label class="form-title" for="hoten">Họ và tên</label>
          <input type="text" name="hoten" placeholder="Nhập tên" required>
        </div>
        <div class="form-group">
          <label class="form-title" for="user">Tên tài khoản</label>
          <input type="text" name="username" placeholder="Nhập tên tài khoản" required>
        </div>
      </div>
      <div class="button">
        <input type="submit" name="submit" value="Đăng kí ngay">
        <h2><?php echo $error; ?></h2>
      </div>
    </form>
  </div>
</body>

</html>