
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/mystyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/detailFilm.css')}}">
    @yield('css')
<!-- {{URL::asset('')}} -->
</head>
<body>
<header>
    <div class="navbar">
        <div class="menu">
            <a href="#" class="styleA">TUYỂN DỤNG</a>
            <a href="#" class="styleA">LIÊN HỆ CGV</a>
            <a href="#" class="styleA">ĐĂNG NHẬP/ ĐĂNG KÝ</a>
            <span>
                    <ul class="language">
                        <li>
                            <button onclick="myFunction1()" class="selected vn">VN</button>
                        </li>
                        <li>
                            <button onclick="myFunction2()" class="nonSelected en">EN</button>
                        </li>
                    </ul>
                </span>

        </div>
    </div>
    <div class="header">
        <div class="content">
            <div class="symbol">
                <a href="#">
                    <img src="{{URL::asset('images/cgvlogo.png')}}" class="cgv">
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li class="phim_father">
                        <a href="#" class="a"> <b>PHIM</b> </a>
                        <div class="son phim">
                            <ul>
                                <li>
                                    <a href="/phimdangchieu">Phim Đang Chiếu <i class="	far fa-hand-point-right"></i></a>

                                </li>
                                <li>
                                    <a href="#">Phim Sắp Chiếu <i class="	far fa-hand-point-right"></i></a>
                                </li>
                            </ul>
                        </div>

                    </li>
                    <li class="rap_father">
                        <a href="#"> <b>RẠP CGV</b> </a>
                        <div class="son rap">
                            <ul>
                                <li>
                                    <a href="#">Tất Cả Các Rạp <i class="	far fa-hand-point-right"></i></a>
                                </li>
                                <li>
                                    <a href="#">Rạp Đặc Biệt <i class="	far fa-hand-point-right"></i></a>
                                </li>
                                <li>
                                    <a href="#">Rạp Sắp Mở <i class="	far fa-hand-point-right"></i></a>
                                </li>
                            </ul>
                        </div>

                    </li>
                    <li class="tv_father">
                        <a href="#"> <b>THÀNH VIÊN</b> </a>
                        <div class="son tv">
                            <!-- <div class="son"> -->
                            <ul>
                                <li>
                                    <a href="#">Tài Khoản CGV <i class="	far fa-hand-point-right"></i></a>
                                </li>
                                <li>
                                    <a href="#">Quyền Lợi <i class="	far fa-hand-point-right"></i></a>
                                </li>
                            </ul>
                            <!-- </div> -->
                        </div>


                    </li>
                    <li class="cul_father">
                        <a href="#"> <b>CULTUREPLEX</b> </a>
                        <div class="son cul">
                            <ul>
                                <li>
                                    <a href="#">Quầy Online <i class="	far fa-hand-point-right"></i></a>
                                </li>
                                <li>
                                    <a href="#">Sự Kiện & Vé Nhóm <i class="	far fa-hand-point-right"></i></a>
                                </li>
                                <li>
                                    <a href="#">E-CGV <i class="	far fa-hand-point-right"></i></a>
                                </li>
                                <li>
                                    <a href="#">CGV Restaurant <i class="	far fa-hand-point-right"></i></a>
                                </li>
                                <li>
                                    <a href="#">Thẻ Quà Tặng <i class="	far fa-hand-point-right"></i></a>
                                </li>
                            </ul>
                        </div>

                    </li>
                </ul>
            </div>
            <div class="search">
                <div class="col1">
                    <div class="new">
                        <a href="#">
                            <img src="{{URL::asset('images/tin-moi-uu-dai.gif')}}">
                        </a>
                    </div>
                    <div class="form">
                        <form action="#">
                            <i class='fas fa-search'></i>
                            <input type="text" placeholder="tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="col2">
                    <div class="buy">
                        <a href="#">
                            <img src="{{URL::asset('images/mua-ve_ngay.png')}}" class="icon_search">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<div class="main">
    @yield('content')
</div>

<!-- footer -->
<div class="footer">
    <div class="footer_brand_slide">
        <ul class="brand">
            <li>
                <a href="#"></a>
            </li>
            <li>
                <a href="#"></a>
            </li>
            <li>
                <a href="#"></a>
            </li>
            <li>
                <a href="#"></a>
            </li>
            <li>
                <a href="#"></a>
            </li>
            <li>
                <a href="#"></a>
            </li>
            <li>
                <a href="#"></a>
            </li>
        </ul>
    </div>
    <div class="footer_cgv_policy">
        <div class="content_cgv_policy">
            <div class="cgv_vietnam">
                <h3>CGV Việt Nam</h3>
                <a href="#"><p>Giới Thiệu</p></a>
                <a href="#"><p>Tiện Ích Online</p></a>
                <a href="#"><p>Thẻ Quà Tặng</p></a>
                <a href="#"><p>Tuyển Dụng</p></a>
                <a href="#"><p>Liên Hệ Quảng Cáo CGV</p></a>
            </div>
            <div class="cgv_policy">
                <h3>Điểu Khoản Sử Dụng</h3>
                <a href="#"><p>Điểu Khoản Chung</p></a>
                <a href="#"><p>Điểu Khoản Giao Dịch</p></a>
                <a href="#"><p>Chính Sách Thanh Toán</p></a>
                <a href="#"><p>Chính Sách Bảo Mật</p></a>
                <a href="#"><p>Câu Hỏi Thường Gặp</p></a>
            </div>
            <div class="cgv_follow_us">
                <h3>Kết Nối Với Chúng Tôi</h3>
                <ul>
                    <li>
                        <a class="follow_fb" href="#"></a>
                    </li>
                    <li>
                        <a class="follow_yt" href="#"></a>
                    </li>
                    <li>
                        <a class="follow_line" href="#"></a>
                    </li>
                    <li>
                        <a class="follow_insta" href="#"></a>
                    </li>
                    <li>
                        <a class="follow_zalo" href="#"></a>
                    </li>
                </ul>
                <div class="cgv_permision">
                    <a href="#">
                        <img src="images/cong-thuong.PNG" alt="">
                    </a>
                </div>
            </div>
            <div class="customer_cgv">
                <h3>Chăm Sóc Khách Hàng</h3>
                <p>Hotline: 1900 6017</p>
                <p>Giờ làm việc: 8:00 - 22:00 (Tất cả các ngày bao gồm cả Lễ Tết)</p>
                <p>Email hỗ trợ: hoidap@cgv.vn</p>
            </div>
        </div>
    </div>
    <div class="footer_cgv_address">
        <div class="cgv_address_content">
            <div class="logo_footer_cgv"></div>
            <div class="text_cgv_address">
                <h3>CÔNG TY TNHH CJ CGV VIETNAM</h3>
                <P>Giấy CNĐKDN: 0303675393, đăng kí lần đầu ngày 31/7/2008,
                    đăng kí thay đổi lần thứ 5 ngày 14/10/2015, cấp bởi sở KHDT thành phố Hồ Chí Minh.</P>
                <p>Địa chỉ: Tầng 2, Rivera Park Saigon - Số 7/28 Thành Thái, P.14, Q.10, TPHCM.</p>
                <p>Hotline: 1900 6017</p>
                <p>COPYRIGHT 2017 CJ CGV. All RIGHTS RESERVED.</p>
            </div>
        </div>
    </div>
    <!-- đoạn cuối cùng của footer -->
    <div class="bottom_footer">
    </div>
</div>
<!-- end footer -->
</body>
</html>
