<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/detailFilm.css')}}">
{{--    <title>Document</title>--}}
</head>
<body>
    @include('header')
    <div class="contentDetail">
        <div class="breadcrumbs">
            <ul>
                <li class="home">
                    <a href="/">trang chủ</a>
                    <span>/ </span>
                </li>
                <li class="product">
                    <strong>{{$film->name}}</strong>
                </li>
            </ul>
        </div>
        <div class="mainDetail">
            <div class="col-main">
                <div class="product-essential">
                    <div class="page-title product-view">
                        <span class="h1">Nội Dung Phim</span>
                    </div>
                    <div class="product-img">
                        <img src="{{URL::asset($film->image)}}" alt="{{$film->name}}">
                    </div>
                    <div class="product-shop">
                        <div class="product-name">
                            <span class="h1"> {{$film->name}}</span>
                        </div>
                        <div class="movie-director movie-infor">
                            <label>Đạo diễn: </label>
                            <span class="std">&nbsp; {{$film->director}}</span>
                        </div>
                        <div class="movie-actress movie-infor">
                            <label>Diễn viên: </label>
                            <div class="std">&nbsp;&nbsp; Donald Glover, Chiwetel Ejiofor, Seth Rogen</div>
                        </div>
                        <div class="movie-genre movie-infor">
                            <label>Thể loại:</label>
                            <div class="std">&nbsp;&nbsp; {{$film->type}}</div>
                        </div>
                        <div class="movie-release movie-infor">
                            <label>Khởi chiếu:</label>
                            <div class="std">&nbsp; {{$film->release_date}}</div>
                        </div>
                        <div class="movie-actress movie-infor">
                            <label>Thời lượng:</label>
                            <div class="std">&nbsp; {{$film->leng}}</div>
                        </div>
                        <div class="movie-rating movie-rated-web">
                            <label>Rated:</label>
                            <div class="std">&nbsp;&nbsp;
                                @if($film->rated == 'p')
                                    <strong>P - PHIM DÀNH CHO MỌI ĐỐI TƯỢNG</strong>
                                @elseif($film->rated == 'c13')
                                    <strong>C13 - PHIM CẤM KHÁN GIẢ DƯỚI 13 TUỔI</strong>
                                @elseif($film->rated == 'c16')
                                    <strong>C16 - PHIM CẤM KHÁN GIẢ DƯỚI 16 TUỔI</strong>
                                @elseif($film->rated == 'c18')
                                    <strong>C18 - PHIM CẤM KHÁN GIẢ DƯỚI 18 TUỔI</strong>
                                @endif
                            </div>
                        </div>

                        <div class="movie-technology-icons">
                            <span class="movie-rating-detail rate_cp">p</span>
                            <a href="#" class="movie-detail-icon-type" title="3D">
                                <span class="movie-detail-type-3d">3D</span>
                            </a>
                            <a href="#" class="movie-detail-icon-type" title="4DX">
                                <span class="movie-detail-type-4dx">4DX</span>
                            </a>
                            <a href="#" class="movie-detail-icon-type" title="IMAX">
                                <span class="movie-detail-type-imax">IMAX</span>
                            </a>
                            <a href="#" class="movie-detail-icon-type" title="Starium">
                                <span class="movie-detail-type-starium">Starium</span>
                            </a>
                        </div>
                        <div class="movie-detail-fb-booking">
                            <div class="add-to-cart-wrapper">
                                <div class="fb-like fb_iframe_widget" data-href="https://www.cgv.vn/default/lion-king.html"
                                     data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"
                                     fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=92&amp;href=https%3A%2F%2Fwww.cgv.vn%2Fdefault%2Flion-king.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true">
                                    <span style="vertical-align: bottom; width: 75px; height: 20px;">
                                        <iframe name="f2e3be48c4aea98" width="1000px" height="1000px"
                                                title="fb:like Facebook Social Plugin" frameborder="0"
                                                allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                allow="encrypted-media"
                                                src="https://www.facebook.com/v2.0/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df2138cf90f3a54c%26domain%3Dwww.cgv.vn%26origin%3Dhttps%253A%252F%252Fwww.cgv.vn%252Ff348c104b0fe134%26relation%3Dparent.parent&amp;container_width=92&amp;href=https%3A%2F%2Fwww.cgv.vn%2Fdefault%2Flion-king.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true"
                                                style="border: none; visibility: visible; width: 68px; height: 20px;" class="">

                                        </iframe>
                                    </span>
                                </div>
                                <button type="button" title="Mua vé" class="button btn-booking" data-toggle="modal" data-target="#myModal">
                                <span>
                                    <span>Mua vé</span>
                                </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="clearer"></div>
                </div>
                <div class="desc">
                    <ul class="toggle_tabs">
                        <li class="current">
                            <a href="#">
                                <i class="	far fa-hand-point-right" style="font-size: 20px; margin-right: 5px;"></i>
                                Chi tiết
                            </a>
                        </li>
                        <li class="last">
                            <a href="#">Trailer</a>
                        </li>
                    </ul>
                    <div class="descrip">
                        <p> {{$film -> desc}} <br>
                            Ở mấy bài trước, chúng ta đã tìm hiểu về VM, về web app, về Database.
                            Chừng đó là cũng tạm đủ để làm một ứng dụng hoàn chỉnh rồi.
                            Thế nhưng, để cho đủ bộ, trong bài này mình sẽ giới thiệu về những
                            service của Azure cho phép chúng ta lưu trữ file luôn.
                            Vì phạm vi bài báo có hạn, không thể đăng dài quá nên một số nội
                            dung đã được chỉnh sửa, lượt bớt. Vì vậy, mình đăng bài full lại
                            lên blog để chia sẻ cho anh nhen!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')

    <div class="modal fade" id="myModal" role="dialog">
        <div class="content-modal">
            <div class="date">
                <ul class="toggle-tabs">
                    <li class="current">
                        <div class="day" onclick="">
                            <span>08</span>
                            <em>Fri</em>
                            <strong>02</strong>
                        </div>
                    </li>
                    <li>
                        <div class="day" onclick="">
                            <span>08</span>
                            <em>Sat</em>
                            <strong>03</strong>
                        </div>
                    </li>
                    <li>
                        <div class="day" onclick="">
                            <span>08</span>
                            <em>Sun</em>
                            <strong>04</strong>
                        </div>
                    </li>
                    <li>
                        <div class="day" onclick="">
                            <span>08</span>
                            <em>Mon</em>
                            <strong>05</strong>
                        </div>
                    </li>
                    <li>
                        <div class="day" onclick="">
                            <span>08</span>
                            <em>Tue</em>
                            <strong>06</strong>
                        </div>
                    </li>
                    <li>
                        <div class="day" onclick="">
                            <span>08</span>
                            <em>Wed</em>
                            <strong>07</strong>
                        </div>
                    </li>
                    <li>
                        <div class="day" onclick="">
                            <span>08</span>
                            <em>Thu</em>
                            <strong>08</strong>
                        </div>
                    </li>
                    <li>
                        <div class="day" onclick="">
                            <span>08</span>
                            <em>Fri</em>
                            <strong>09</strong>
                        </div>
                    </li>
                    <li>
                        <div class="day" onclick="">
                            <span>08</span>
                            <em>Sat</em>
                            <strong>10</strong>
                        </div>
                    </li>
                    <li>
                        <div class="day" onclick="">
                            <span>08</span>
                            <em>Sun</em>
                            <strong>11</strong>
                        </div>
                    </li>
                    <li>
                        <div class="day" onclick="">
                            <span>08</span>
                            <em>Mon</em>
                            <strong>12</strong>
                        </div>
                    </li>
                    <li>
                        <div class="day" onclick="">
                            <span>08</span>
                            <em>Tue</em>
                            <strong>13</strong>
                        </div>
                    </li>
                    <li>
                        <div class="day" onclick="">
                            <span>08</span>
                            <em>Wed</em>
                            <strong>14</strong>
                        </div>
                    </li>
                    <li class="last">
                        <div class="day" onclick="">
                            <span>08</span>
                            <em>Thu</em>
                            <strong>15</strong>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="location" >
                <ul class="toggle-tabs">
                    <li class="current">
                        <span>Hồ Chí Minh</span>
                    </li>
                    <li>
                        <span>Hà Nội</span>
                    </li>
                    <li>
                        <span>Đà Nẵng</span>
                    </li>
                    <li>
                        <span>Cần Thơ</span>
                    </li>
                    <li>
                        <span>Đồng Nai</span>
                    </li>
                    <li>
                        <span>Hải Phòng</span>
                    </li>
                    <li>
                        <span>Quảng Ninh</span>
                    </li>
                    <li>
                        <span>Bà Rịa-Vũng Tàu</span>
                    </li>
                    <li>
                        <span>Bình Định</span>
                    </li>
                    <li>
                        <span>Bình Dương</span>
                    </li>
                    <li>
                        <span>Đắk Lắk</span>
                    </li>
                    <li>
                        <span>Vĩnh Long</span>
                    </li>
                    <li>
                        <span>Kiên Giang</span>
                    </li>
                    <li>
                        <span>Hà Tĩnh</span>
                    </li>
                    <li>
                        <span>Phú Yên</span>
                    </li>
                    <li>
                        <span>Khánh Hòa</span>
                    </li>
                    <li>
                        <span>Lạng Sơn</span>
                    </li>
                    <li>
                        <span>Phú Thọ</span>
                    </li>
                    <li>
                        <span>Quảng Ngãi</span>
                    </li>
                    <li>
                        <span>Thái Nguyên</span>
                    </li>
                    <li class="last">
                        <span>Tiền Giang</span>
                    </li>
                </ul>
            </div>
            <div class="type">
                <ul class="toggle-tabs">
                    <li class="current">
                        <span>2D Phụ Đề Việt</span>
                    </li>
                    <li>
                        <span>2D Phụ Đề Hàn &amp; Việt</span>
                    </li>
                    <li>
                        <span>3D Phụ Đề Việt</span>
                    </li>
                    <li>
                        <span>IMAX3D Phụ Đề Việt</span>
                    </li>
                    <li class="last">
                        <span>4DX3D Phụ Đề Việt</span>
                    </li>
                </ul>
            </div>
            <div class="cinemas" >
                @for($i=0; $i<=5; $i++)
                    <div class="cinema_child">
                        <div class="site"><h3>CGV Hùng Vương Plaza</h3></div>

                        <div class="cinema 2d"><h4>Rạp 2D</h4></div>

                        <ul class="products-grid-movie tab-showtime">
                            <li class="item">
                                <a href="#">
                                    <span>12:20 PM</span><br>
                                    <span>114 ghế trống</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span>13:40 PM</span><br>
                                    <span>212 ghế trống</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span>15:10 PM</span><br>
                                    <span>111 ghế trống</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span>16:10 PM</span><br>
                                    <span>80 ghế trống</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span>18:00 PM</span><br>
                                    <span>101 ghế trống</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span>20:50 PM</span><br>
                                    <span>114 ghế trống</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span>22:10 PM</span><br>
                                    <span>245 ghế trống</span>
                                </a>
                            </li>
                        </ul>
                        <div class="cinema goldclass"><h4>Rạp GOLD CLASS</h4></div>

                        <ul class="products-grid-movie tab-showtime">
                            <li class="item">
                                <a href="#">
                                    <span>12:50 PM</span><br>
                                    <span>42 ghế trống</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span>15:40 PM</span><br>
                                    <span>40 ghế trống</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span>21:20 PM</span><br>
                                    <span>31 ghế trống</span>
                                </a>
                            </li>
                        </ul>
                        <div class="cinema dolbyatmos"><h4>Rạp Dolby Atmos</h4></div>

                        <ul class="products-grid-movie tab-showtime">
                            <li class="item">
                                <a href="#">
                                    <span>11:50 AM</span><br>
                                    <span>248 ghế trống</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span>14:40 PM</span><br>
                                    <span>242 ghế trống</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span>17:30 PM</span><br>
                                    <span>237 ghế trống</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span>20:20 PM</span><br>
                                    <span>207 ghế trống</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                @endfor
            </div>
        </div>
        <button type="button" id="cboxClose" data-dismiss="modal">close</button>

    </div>
    <div class="banner-bottom">
        <div class="sticky-banner" style="display: block;">
            <div class="banner-click">
                <a href="#" target="_blank">
                    <img alt="" src="{{URL::asset('images/nha-qua-di-980x120.jpg')}}"></a>
                <span class="close-bottom-banner">X</span>
            </div>
        </div>
    </div>
</body>
</html>
