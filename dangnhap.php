
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN FORM</title>
    <link rel="stylesheet" href="css/dn.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Hepta+Slab:400,600,700&display=swap" rel="stylesheet"> 
</head>
<body>
    <section class="register ">
        <!--log in section-->
        <div class="register-logIn">
            <h2 class="register-logIn__title">Log In</h2>
                <form action="index.php?act=login"  class="form" method="post">
                <input type="text" class="form__email" placeholder="username" name="user" value ="" required>
                <input type="password" class="form__password" placeholder="Mật khẩu / Password" name="pass" value ="" required>
                <input type="checkbox" class="form__rememberMe" name="Remember me" id="remember"> 
                <label for="remember" class="form__rememberMe-label">Ghi nhớ tài khoản</label>
                <a href="#" class="from__forgot">Quên mật khẩu?</a>
                <br>
                <input type="submit" class="form__submit upper" name="login" value="log in">
            </form>
        </div>
        <!--singup section-->
        <div class="register-singUp">
            <div class="content">
                <span class="register-singUp__userpls"><i class="fas fa-user-plus fa-2x"></i></span>
                <h3 class="register-singUp__title">
                    Chào bạn &#33;
                </h3>
                <p class="register-singUp__hello">
                   Nếu bạn chưa có tài khoản hãy tiến hành đăng kí tài khoản ngay
                </p>
                <button class="register-singUp__btn upper" onclick="registerPage()">
                    Đăng kí <i class="far fa-arrow-alt-circle-right"></i>
                </button>
            </div>
        </div>
    </section>
</body>
<script>
    function registerPage() {
        window.location.href = "dangky.php";
    }
    </script>
</html>