<html ng-app="myApp">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <script type="text/javascript" src="https://code.angularjs.org/1.4.9/angular.min.js"></script>
    <script type="text/javascript" src="https://code.angularjs.org/1.4.9/angular-route.min.js"></script>
    <script src="app.js"></script>

</head>

<body>

    <header>
        <div class="navbar">
            <div class="menu">
                <a href="#" class="styleA">TUYỂN DỤNG</a>
                <a href="#" class="styleA">LIÊN HỆ CGV</a>
                <a href="#/login" class="styleA">ĐĂNG NHẬP/ ĐĂNG KÝ</a>
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
                        <img src="images/cgvlogo.png" class="cgv">
                    </a>
                </div>
                <div class="menu">
                    <ul>
                        <li class="phim_father">
                            <a href="#" class="a"> <b>PHIM</b> </a>
                            <div class="son phim">
                                <ul>
                                    <li>
                                        <a href="#/now-showing">Phim Đang Chiếu <i class="	far fa-hand-point-right"></i></a>

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
                                <img src="images/tin-moi-uu-dai.gif">
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
                                <img src="images/mua-ve_ngay.png" class="icon_search">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <div ng-view></div>

</body>
<script language="javascript">
    // Lấy 2 button và thẻ div
    var button1 = document.getElementsByClassName("selected");
    var button2 = document.getElementsByClassName("nonSelected");
    // Thiết lập click cho button 1
    function myFunction1() {
        document.getElementsByClassName("selected")[0].style.background = "#e71a0f";
        document.getElementsByClassName("nonSelected")[0].style.background = "#666";
    };

    // Thiết lập click cho button 2
    function myFunction2() {
        document.getElementsByClassName("nonSelected")[0].style.background = "#e71a0f";
        document.getElementsByClassName("selected")[0].style.background = "#666";
    };
</script>
<script>
    var t = 0;
    document.getElementsByClassName("selection_lui")[0].style.display = "none";
    function next() {
        var temp = document.querySelectorAll(".movie_selection .slide ul li").length;
        console.log(temp);
        if (t >= temp - 4) {
            t = temp - 4;
        }
        else {
            document.querySelector(".movie_selection .slide ul").style.marginLeft = "-" + (t + 1) * 245 + "px";
        }
        t++;
        if (t == 0) {
            document.getElementsByClassName("selection_lui")[0].style.display = "none";
            document.getElementsByClassName("selection_tien")[0].style.display = "block";
        }
        else if (t == temp - 4) {
            document.getElementsByClassName("selection_lui")[0].style.display = "block";
            document.getElementsByClassName("selection_tien")[0].style.display = "none";
        }
        else {
            document.getElementsByClassName("selection_lui")[0].style.display = "block";
            document.getElementsByClassName("selection_tien")[0].style.display = "block";
        }
        console.log(t);
    }
    function prev() {
        var temp = document.querySelectorAll(".movie_selection .slide ul li").length;

        if (t >= 0) {
            document.querySelector(".movie_selection .slide ul").style.marginLeft = "-" + (t - 1) * 245 + "px";
        }
        t--;
        if (t < 0) {
            t = 0;
        }
        if (t == 0) {
            document.getElementsByClassName("selection_lui")[0].style.display = "none";
            document.getElementsByClassName("selection_tien")[0].style.display = "block";
        }
        else if (t == temp - 4) {
            document.getElementsByClassName("selection_lui")[0].style.display = "block";
            document.getElementsByClassName("selection_tien")[0].style.display = "none";
        }
        else {
            document.getElementsByClassName("selection_lui")[0].style.display = "block";
            document.getElementsByClassName("selection_tien")[0].style.display = "block";
        }
        console.log(t);
    }
</script>
<script>
    var t = 0;
    document.getElementsByClassName("selection_lui2")[0].style.display = "none";
    function next2() {
        var temp = document.querySelectorAll(".event .slide ul li").length;
        console.log(temp);
        if (t >= temp - 4) {
            t = temp - 4;
        }
        else {
            document.querySelector(".event .slide ul").style.marginLeft = "-" + (t + 1) * 245 + "px";
        }
        t++;
        if (t == 0) {
            document.getElementsByClassName("selection_lui2")[0].style.display = "none";
            document.getElementsByClassName("selection_tien2")[0].style.display = "block";
        }
        else if (t == temp - 4) {
            document.getElementsByClassName("selection_lui2")[0].style.display = "block";
            document.getElementsByClassName("selection_tien2")[0].style.display = "none";
        }
        else {
            document.getElementsByClassName("selection_lui2")[0].style.display = "block";
            document.getElementsByClassName("selection_tien2")[0].style.display = "block";
        }
        console.log(t);
    }
    function prev2() {
        var temp = document.querySelectorAll(".event .slide ul li").length;

        if (t >= 0) {
            document.querySelector(".event .slide ul").style.marginLeft = "-" + (t - 1) * 245 + "px";
        }
        t--;
        if (t < 0) {
            t = 0;
        }
        if (t == 0) {
            document.getElementsByClassName("selection_lui2")[0].style.display = "none";
            document.getElementsByClassName("selection_tien2")[0].style.display = "block";
        }
        else if (t == temp - 4) {
            document.getElementsByClassName("selection_lui2")[0].style.display = "block";
            document.getElementsByClassName("selection_tien2")[0].style.display = "none";
        }
        else {
            document.getElementsByClassName("selection_lui2")[0].style.display = "block";
            document.getElementsByClassName("selection_tien2")[0].style.display = "block";
        }
        console.log(t);
    }
</script>

</html>