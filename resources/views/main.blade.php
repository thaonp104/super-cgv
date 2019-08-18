<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phim Đang Chiếu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('css/styleBooking.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylePhimDangChieu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylePayment.css')}}">
    
    @yield('js')
</head>
<body>
   <!-- HEADER -->
   <div class="header">
    <div class="banner">
        <a class="banner-img" href="#">
            <img src="https://advserver.cgv.vn/www/images/5464e4952af667e87acc4861db2b8e6d.png" width="980" height="80">
        </a>
        <div class="banner-info">
            <ul class="banner-info-taskbar">
                <li><a href="#">TUYỂN DỤNG</a></li>
                <li><a href="#">LIÊN HỆ CGV</a></li>
                <li><a href="#">ĐĂNG NHẬP/ĐĂNG KÝ</a></li>
                <li><a href="#">VN/EN</a></li>
            </ul>
        </div>
    </div>
    <div class="menu">
        <div class="menu-content">
            <div class="menu-logo">
                <a href="#">
                    <img src="https://www.cgv.vn/skin/frontend/cgv/default/images/cgvlogo.png" alt="">
                </a>
            </div>
            <ul class="menu-taskbar">
                <li><a href="#">PHIM</a>
                    <ul class="sub-menu">
                        <li><a href="/phimdangchieu">Phim Đang Chiếu</a></li>
                        <li><a href="#">Phim Sắp Chiếu</a></li>
                    </ul>
                </li>
                <li><a href="#">RẠP CGV</a>
                    <ul class="sub-menu">
                        <li><a href="#">Tất Cả Các Rạp</a></li>
                        <li><a href="#">Rạp Đặc Biệt</a></li>
                        <li><a href="#">Rạp Sắp Mở</a></li>
                    </ul>
                </li>
                <li><a href="#">THÀNH VIÊN</a>
                    <ul class="sub-menu">
                        <li><a href="#">Tài Khoản CGV</a></li>
                        <li><a href="#">Quyền Lợi</a></li>
                    </ul>
                </li>
                <li><a href="#">CULTUREPLEX</a>
                    <ul class="sub-menu">
                        <li><a href="#">Quầy Online</a></li>
                        <li><a href="#">Sự Kiện & Vé Nhóm</a></li>
                        <li><a href="#">E-CGV</a></li>
                        <li><a href="#">CGV Restaurant</a></li>
                        <li><a href="#">Thẻ Quà Tặng</a></li>
                    </ul>
                </li>
            </ul>
            <div class="menu-search">
                <div class="menu-TinMoiUuDai">
                    <a href="#">
                        <img alt="" src="https://www.cgv.vn/media/wysiwyg/news-offers/tin-moi-uu-dai.gif">
                    </a>
                </div>
                <div class="menu-search-form">
                    <input class="menu-search-form-type" type="search" placeholder="Tìm kiếm">
                </div>
                <div class="menu-MuaVeNgay">
                    <a href="#">
                        <img alt="" src="https://www.cgv.vn/media/wysiwyg/news-offers/mua-ve_ngay.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OF HEADER -->

    <div class="main">
        @yield('content')
    </div>

   <!-- FOOTER -->
<div class="footer">
    <div class="brand">
        <ul>
            <li><a class="brand-4dx" href="#"></a></li>
            <li><a class="brand-imax" href="#"></a></li>
            <li><a class="brand-starium" href="#"></a></li>
            <li><a class="brand-gold" href="#"></a></li>
            <li><a class="brand-lamour" href="#"></a></li>
            <li><a class="brand-dolby" href="#"></a></li>
            <li><a class="brand-premium" href="#"></a></li>
            <li><a class="brand-screenx" href="#"></a></li>
        </ul>
    </div>
    <div class="policy-container">
        <div class="policy">
            <div class="CGV-VietNam">
                <h3>CGV Việt Nam</h3>
                <ul>
                    <li><a href="#">Giới Thiệu</a></li>
                    <li><a href="#">Tiện Ích Online</a></li>
                    <li><a href="#">Thẻ Quà Tặng</a></li>
                    <li><a href="#">Tuyển dụng</a></li>
                    <li><a href="#">Liên Hệ Quảng Cáo CGV</a></li>
                </ul>
            </div>
            <div class="dieu-khoan">
                <h3>Điều khoản sử dụng</h3>
                <ul>
                    <li><a href="#">Điều Khoản Chung</a></li>
                    <li><a href="#">Điều Khoản Giao Dịch</a></li>
                    <li><a href="#">Chính sách Thanh Toán</a></li>
                    <li><a href="#">Chính Sách Bảo Mật</a></li>
                    <li><a href="#">Câu Hỏi Thường Gặp</a></li>
                </ul>
            </div>
            <div class="ket-noi">
                <h3>Kết nối với chúng tôi</h3>
                <ul>
                    <li><a class="fb" href="#"></a></li>
                    <li><a class="youtube" href="#"></a></li>
                    <li><a class="line" href="#"></a></li>
                    <li><a class="insta" href="#"></a></li>
                    <li><a class="zalo" href="#"></a></li>
                </ul>
                <a class="permit" href="#"></a>
            </div>
            <div class="cham-soc">
                <h3>Chăm sóc khách hàng</h3>
                <ul>
                    <li>Hotline: 1900 6017</li>
                    <li>Giờ làm việc: 8:00 - 22:00 (Tất cả các ngày bao gồm cả Lễ Tết)</li>
                    <li>Email hỗ trợ: hoidap@cgv.vn</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="address">
        <div class="add-brand"></div>
        <div class="add-info">
            <h5>CÔNG TY TNHH CJ CGV VIỆT NAM</h5>
            <p>Giấy CNĐKDN: 0303675393, đăng ký lần đầu ngày 31/7/2008, đăng ký thay đổi lần thứ 5 ngày 14/10/2015, cấp bởi Sở KHĐT thành phố Hồ Chí Minh.</p>
            <p>Địa Chỉ: Tầng 2, Rivera Park Saigon - Số 7/28 Thành Thái, P.14, Q.10, TPHCM.</p>
            <p>Hotline: 1900 6017</p>
            <p>COPYRIGHT 2017 CJ CGV. All RIGHTS RESERVED .</p>
        </div>
    </div>
    <div class="bottom-footer"></div>
</div>
<!-- END OF FOOTER -->
</body>
</html>
