
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
    
</body>
</html>