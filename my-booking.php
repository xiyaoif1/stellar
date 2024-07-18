<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" media="screen"
        href="https://booking.muongthanh.com/libraries/fontawesome-free-6.1.1-web/css/all.min.css?v=1.75">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/trangchu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <title>TheMoi</title>
</head>

<body>
    <div class="container"  style="background:  #eeeeee;">
        <nav>
            <div class="menu">
                <div class="header-top">
                    <div class="left">
                        <a href="">
                            <i class='bx bx-phone'>0946910266</i>
                        </a>
                        <a href="">
                            <i class='bx bxl-facebook-circle'></i>
                        </a>
                        <a href="">
                            <i class='bx bxl-youtube'></i>
                        </a>
                    </div>
                    <div class="mid">
                        <div class="img-logo">
                            <img src="img/themoi-high-resolution-logo-transparent.png">
                        </div>
                    </div>
                    <div class="rigth">
                        <li><a href="dn.html">Đăng nhập</a></li>
                        <li>
                            <i class='bx bx-menu icon-menu' id="icon-menu"></i>
                            <ul class="submenu">
                                <li><a href="my-booking.html">My booking</a></li>
                                <li><a href="">Ưu đãi</a></li>
                                <li><a href="tintuc.html">Tin Tức</a></li>
                                <li><a href="quanly.html">Tài khoảng</a></li>
                            </ul>
                        </li>

                    </div>
                </div>
                <div class="header-bot">
                    <ul>
                        <li><a href="index.html">TRANG CHỦ</a></li>
                        <li><a href="phong.html">PHÒNG</a></li>
                        <li><a href="dich-vu.html">DỊCH VỤ</a></li>
                        <li><a href="Lien-he.html">LIÊN HỆ</a></li>
                        <li><a href="gioithieu.html">GIỚI THIỆU</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="banner-room" style="
                background-image: url(https://brghospitality.vn/rex/wp-content/uploads/sites/6/2019/09/Rex_Banner_1920X704__Phong.jpg);
                width: 100%;
                background-position: center;
                background-attachment: fixed;
                ">
                    <form action="" method="post">
                        <div class="box-search">
                            <div class="left">
                                <h1 class="name-hotel fw-bold">TheMoi Luxury</h1>
                                <div class="nd-tk">
                                    <div>
                                        Địa điểm:
                                        <select name="dia_diem">
                                            <option value="">Đà Nẵng</option>
                                            <option value="">TP. HCM</option>
                                            <option value="">Hà Nội</option>
                                        </select>
                                    </div>
                                    <div>
                                        Ngày nhận phòng: <input type="date" name="ngay_nhan">
                                    </div>
                                    <div>
                                        Ngày trả phòng: <input type="date" name="ngay_tra">
                                    </div>
                                    <div>
                                        Số người: <input type="number" name="so_nguoi">
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <input type="submit" value="Tìm phòng">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <main  style="background:  #eeeeee;">
            <div class="my-booking">
                <h2>Tất cả các Booking của bạn</h2>
                <div class="box-booking">
                    <div class="ma-phong">
                        <p>Mã số phòng</p>
                        <p>101</p>
                    </div>
                    <div class="img">
                        <img src="img/themoi-high-resolution-logo-transparent.png">
                    </div>
                    <div class="thong-tin">
                        <div class="ngay-nhan">
                            <p>Ngày nhận phòng</p>
                            <p>11-11-2023</p>
                        </div>
                        <div class="ngay-tra">
                            <p>Ngày trả phòng</p>
                            <p>12-11-2023</p>
                        </div>
                        <div class="so-nguoi">
                            <p>Số người</p>
                            <p>4</p>
                        </div>
                        <div class="danh-gia">
                            <a href="">Đánh giá</a>
                        </div>
                    </div>
                </div>
                <div class="box-booking">
                    <div class="ma-phong">
                        <p>Mã số phòng</p>
                        <p>102</p>
                    </div>
                    <div class="img">
                        <img src="img/themoi-high-resolution-logo-transparent.png">
                    </div>
                    <div class="thong-tin">
                        <div class="ngay-nhan">
                            <p>Ngày nhận phòng</p>
                            <p>11-11-2023</p>
                        </div>
                        <div class="ngay-tra">
                            <p>Ngày trả phòng</p>
                            <p>12-11-2023</p>
                        </div>
                        <div class="so-nguoi">
                            <p>Số người</p>
                            <p>4</p>
                        </div>
                        <div class="danh-gia">
                            <a href="">Đánh giá</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div>
                <p>Số ĐKKD</p>
                <p>0106011932</p>
                <p>Đăng ký lần đầu ngày 15/10/2012</p>
                <p>Đăng ký thay đổi lần thứ 15 ngày 16/8/2022.</p>
                <p><img src="https://booking.muongthanh.com/images/logo-da-thong-bao-website-voi-bo-cong-thuong.png">
                </p>
            </div>
            <div>
                <p>Nơi cấp:</p>
                <p>Sở Kế hoạch và Đầu tư Tỉnh Điện Biên</p>
                <p>Lĩnh vực kinh doanh:</p>
                <p>Khách sạn, căn hộ kinh doanh dịch vụ lưu trú ngắn ngày;
                    khu du lịch sinh thái, khu vui chơi giải trí, sân golf</p>
            </div>
            <div>
                <p>Trụ sở:</p>
                <p>Số nhà 25, Tổ dân phố 21, Phường Him Lam, Thành phố Điện Biên Phủ, Tỉnh Điện Biên, Việt Nam</p>
                <p>Email:</p>
                <p>fairytailmg1@gmail.com</p>
            </div>
        </footer>
    </div>
</body>

</html>