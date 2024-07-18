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
    <div class="container">
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
                        <?php
                        if(isset($_SESSION['username']) && ($_SESSION['username']!="")){ 
                    echo '<li><a href="index.php?act=dangky">Đăng ký</a></li>'; 
                       }else{
                        ?>
                        <li><a href="dangnhap.php">Đăng nhập</a></li>
                        <?php }?>
                        <li>
                            <i class='bx bx-menu icon-menu' id="icon-menu"></i>
                            <ul class="submenu">
                                <li><a href="my-booking.php">My booking</a></li>
                                <li><a href="ud.php">Ưu đãi</a></li>
                                <li><a href="tintuc.php">Tin Tức</a></li>
                                <li><a href="quanly.php">Tài khoảng</a></li>
                            </ul>
                        </li>

                    </div>
                </div>  
                <div class="header-bot">
                    <ul>
                        <li><a href="index.php">TRANG CHỦ</a></li>
                        <li><a href="phong.php">PHÒNG</a></li>
                        <li><a href="dich-vu.php">DỊCH VỤ</a></li>
                        <li><a href="Lien-he.php">LIÊN HỆ</a></li>
                        <li><a href="gioithieu.php">GIỚI THIỆU</a></li>
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
                    <form action="phong.html?act=kqtk" method="post">
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
        <main>
            <div class="hang-phong-db">
                <div>
                    <p>Hạng phòng&nbsp;</p>
                    <p>đặc biệt</p>
                </div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="ctphong.html">
                                <img src="https://booking.muongthanh.com/images/offer/2023/10/large/z4788339470559_7c7cac84c5dd13322244fc56e21a8d47_1698404607.jpg"
                                    alt="">
                                <h4>[WINTER PROMOTION | LÝ SƠN] - Nghỉ dưỡng 2N1Đ + Đón từ cảng Lý Sơn về Khách Sạn</h4>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://booking.muongthanh.com/images/offer/2023/10/large/z4788339470559_7c7cac84c5dd13322244fc56e21a8d47_1698404607.jpg"
                                    alt="">
                                <h4>[WINTER PROMOTION | LÝ SƠN] - Nghỉ dưỡng 2N1Đ + Đón từ cảng Lý Sơn về Khách Sạn</h4>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://booking.muongthanh.com/images/offer/2023/10/large/z4788339470559_7c7cac84c5dd13322244fc56e21a8d47_1698404607.jpg"
                                    alt="">
                                <h4>[WINTER PROMOTION | LÝ SƠN] - Nghỉ dưỡng 2N1Đ + Đón từ cảng Lý Sơn về Khách Sạn</h4>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://booking.muongthanh.com/images/offer/2023/10/large/z4788339470559_7c7cac84c5dd13322244fc56e21a8d47_1698404607.jpg"
                                    alt="">
                                <h4>[WINTER PROMOTION | LÝ SƠN] - Nghỉ dưỡng 2N1Đ + Đón từ cảng Lý Sơn về Khách Sạn</h4>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div><a href="phong.html">Xem thêm</a></div>
            </div>

            <div class="uu-dai">
                <div>
                    <p>Ưu đãi&nbsp;</p>
                    <p>dành cho bạn</p>
                </div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://booking.muongthanh.com/images/offer/2023/10/large/z4788339470559_7c7cac84c5dd13322244fc56e21a8d47_1698404607.jpg"
                                    alt="">
                                <h4>[WINTER PROMOTION | LÝ SƠN] - Nghỉ dưỡng 2N1Đ + Đón từ cảng Lý Sơn về Khách Sạn</h4>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://booking.muongthanh.com/images/offer/2023/10/large/z4788339470559_7c7cac84c5dd13322244fc56e21a8d47_1698404607.jpg"
                                    alt="">
                                <h4>[WINTER PROMOTION | LÝ SƠN] - Nghỉ dưỡng 2N1Đ + Đón từ cảng Lý Sơn về Khách Sạn</h4>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://booking.muongthanh.com/images/offer/2023/10/large/z4788339470559_7c7cac84c5dd13322244fc56e21a8d47_1698404607.jpg"
                                    alt="">
                                <h4>[WINTER PROMOTION | LÝ SƠN] - Nghỉ dưỡng 2N1Đ + Đón từ cảng Lý Sơn về Khách Sạn</h4>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://booking.muongthanh.com/images/offer/2023/10/large/z4788339470559_7c7cac84c5dd13322244fc56e21a8d47_1698404607.jpg"
                                    alt="">
                                <h4>[WINTER PROMOTION | LÝ SƠN] - Nghỉ dưỡng 2N1Đ + Đón từ cảng Lý Sơn về Khách Sạn</h4>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div>
                    <a href="ud.html">Xem thêm</a>
                </div>
            </div>

            <div class="tin-tuc">
                <div>
                    <p>Tin tức&nbsp;</p>
                    <p>nổi bật</p>
                </div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://booking.muongthanh.com/images/offer/2023/10/large/z4788339470559_7c7cac84c5dd13322244fc56e21a8d47_1698404607.jpg"
                                    alt="">
                                <h4>[WINTER PROMOTION | LÝ SƠN] - Nghỉ dưỡng 2N1Đ + Đón từ cảng Lý Sơn về Khách Sạn</h4>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://booking.muongthanh.com/images/offer/2023/10/large/z4788339470559_7c7cac84c5dd13322244fc56e21a8d47_1698404607.jpg"
                                    alt="">
                                <h4>[WINTER PROMOTION | LÝ SƠN] - Nghỉ dưỡng 2N1Đ + Đón từ cảng Lý Sơn về Khách Sạn</h4>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://booking.muongthanh.com/images/offer/2023/10/large/z4788339470559_7c7cac84c5dd13322244fc56e21a8d47_1698404607.jpg"
                                    alt="">
                                <h4>[WINTER PROMOTION | LÝ SƠN] - Nghỉ dưỡng 2N1Đ + Đón từ cảng Lý Sơn về Khách Sạn</h4>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://booking.muongthanh.com/images/offer/2023/10/large/z4788339470559_7c7cac84c5dd13322244fc56e21a8d47_1698404607.jpg"
                                    alt="">
                                <h4>[WINTER PROMOTION | LÝ SƠN] - Nghỉ dưỡng 2N1Đ + Đón từ cảng Lý Sơn về Khách Sạn</h4>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div>
                    <a href="tintuc.html">Xem thêm</a>
                </div>
            </div>

            <div class="ve-toi">
                <div class="trai">
                    <img src="https://booking.muongthanh.com/images//complex/original/ban-do-04-luxury_1696492153.png" alt="">
                </div>
                <div class="phai">
                    <div class="so-luong-ks">
                        <div class="ks">
                            <p>60</p>
                            <p>Khách sạn</p>
                        </div>
                        <div class="tinh">
                            <p>3</p>
                            <p>Tỉnh thành</p>
                        </div>
                    </div>
                    <div class="mo-ta">
                        Tập đoàn khách sạn TheMoi được công nhận là 
                        "Chuỗi Khách sạn tư nhân lớn nhất Đông Dương" với 
                        60 khách sạn cao cấp đạt chuẩn quốc tế trải dài trên 
                        33 tỉnh thành tại Việt Nam. Hệ thống 
                        TheMoi hướng đến việc phục vụ đa dạng nhu cầu của mọi du khách trong nước và quốc tế.
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
                <p><img src="https://booking.muongthanh.com/images/logo-da-thong-bao-website-voi-bo-cong-thuong.png"></p>
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
<script>
    var swiper = new Swiper('.swiper', {
        slidesPerView: 3,
        direction: getDirection(),
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        on: {
            resize: function () {
                swiper.changeDirection(getDirection());
            },
        },
    });

    function getDirection() {
        var windowWidth = window.innerWidth;
        var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

        return direction;
    }
</script>

</html>