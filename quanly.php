<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin tài khoản</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.profile {
    text-align: center;
}

img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin: 0 auto;
}

h1, p {
    margin: 10px 0;
}

button {
    padding: 10px 20px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin: 10px 10px;
}

.edit-button {
    background-color: #28a745;
}

.password-button {
    background-color: #dc3545;
}

</style>
<body>
    <div class="container">
        <div class="profile">
            <img src="avatar.jpg" alt="Hình đại diện">
            <h1>Họ tên: Nguyễn Văn A</h1>
            <p>Username: nguyenvana</p>
            <p>Email: nguyenvana@example.com</p>
            <a href="tttk.html"><button class="edit-button">Thay đổi thông tin</button></a>
            <a href="dmk.html"><button class="password-button">Đổi mật khẩu</button></a>
            <a href="index.html"><button class="logout-button">Đăng xuất</button></a>
        </div>
    </div>
</body>
</html>
