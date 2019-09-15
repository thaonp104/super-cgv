@extends('main2')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/Cinemas/allCinemas.css')}}">
@endsection
@section('content')
    <div class="all-cinema">
        <div class="main">
            <div class="col-main">
                <div class="showtimes-wrap">
                    <div class="showtimes-container">
                        <div class="theatre-wrap">
                            <div class="theatre-list product-view">
                                <div class="cgv-showtime-top"></div>
                                <div class="theatre-city-tabs cgv-showtime-center">
                                    <div class="content-list-cinema">
                                        <div class="title-cgv-cinema"><h1>CGV CINEMAS</h1></div>
                                        <div class="cinemas-area">
                                            <ul>
                                                <li>
                                                    <span id="cgv_city_1" class="siteactive">Hồ Chí Minh</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_3">Hà Nội</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_5">Đà Nẵng</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_7">Cần Thơ</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_9">Đồng Nai</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_11">Hải Phòng</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_13">Quảng Ninh</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_15">Bà Rịa-Vũng Tàu</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_17">Bình Định</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_19">Bình Dương</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_21">Đắk Lắk</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_23">Trà Vinh</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_25">Yên Bái</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_27">Vĩnh Long</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_29">Kiên Giang</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_31">Hậu Giang</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_33">Hà Tĩnh</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_35">Phú Yên</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_77">Khánh Hòa</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_85">Lạng Sơn</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_93">Nghệ An</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_99">Phú Thọ</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_105">Quảng Ngãi</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_111">Sơn La</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_113">Tây Ninh</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_117">Thái Nguyên</span>
                                                </li>
                                                <li>
                                                    <span id="cgv_city_123">Tiền Giang</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="cinemas-list">
                                            <ul>
                                                @foreach($cinemas as $cinema)
                                                    @if($result == $cinema->id)
                                                        <li class="cgv_city_1" style="">
                                                            <span id="cgv_site_004"
                                                                  onclick="location.href='/allCinemas/{{$cinema->id}}';"
                                                                  class="upcase"
                                                                  style="color: red;">CGV {{$cinema->name}}</span>
                                                        </li>
                                                    @else
                                                        <li class="cgv_city_1" style="">
                                                            <span id="cgv_site_004"
                                                                  onclick="location.href='/allCinemas/{{$cinema->id}}';"
                                                                  class="upcase">CGV {{$cinema->name}}</span>
                                                        </li>
                                                    @endif

                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="cgv-showtime-bottom"></div>
                            </div>
                            <div class="theater-container product-view"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($result != 'option')
        <div class="theater-container product-view">
            <div class="heater-head">
                <div class="home-title"><h3>Rạp chiếu phim</h3></div>
                <div class="page-title theater-title"><h3>CGV Crescent Mall</h3></div>
            </div>

            <div class="theater-gallery">
                <div class="intro">
                    <div class="slide">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="{{URL::asset('images/1.jpg')}}" style="width: 980px"></a>
                                </div>

                                <div class="item">
                                    <img src="{{URL::asset('images/1.jpg')}}">
                                </div>

                                <div class="item">
                                    <img src="{{URL::asset('images/2.jpg')}}">
                                </div>
                                <div class="item">
                                    <img src="{{URL::asset('images/4.jpg')}}">
                                </div>
                                <div class="item">
                                    <img src="{{URL::asset('images/5.jpg')}}">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-theater-information"></div>
                <div class="theater-infomation">
                    <div class="left-info-theater">
                        <div class="theater-left-content">
                            <div class="theater-address">Lầu 5, Crescent Mall Đại lộ Nguyễn Văn Linh, Phú Mỹ Hưng Quận 7
                                TP. Hồ Chí Minh
                            </div>
                            <div class="fax"><label>Fax : </label>
                                <div class="fax-input" style="display: inline;"> +84 4 6 275 5240</div>
                            </div>
                            <div class="hotline"><label>Hotline : </label>
                                <div class="fax-input" style="display: inline;"> 1900 6017</div>
                            </div>
                        </div>
                    </div>

                    <div class="right-info-theater">
                        <div class="theater-right-content">
                            <div class="location">
                                <a class="iframe cboxElement" title="CGV Crescent Mall"
                                   href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1960.0351426539758!2d106.71814944161731!3d10.729062445877723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a5bb83950a26d5b!2sMegastar+Crescent+Mall!5e0!3m2!1svi!2s!4v1407569121975">
                                    Xem bản đồ</a>
                            </div>
                            <div class="contact-us"><a class="cotact-us-link"
                                                       href="https://www.cgv.vn/default/contacts/">Liên hệ CGV</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-collateral toggle-content tabs tabs-format-cgv">
                <ul class="toggle-tabs">
                    <li class="current">
                        <span>Lịch chiếu</span>
                    </li>
                    <li><span style="padding: 10px 0px">|</span></li>
                    <li class="last">
                        <span>Giá vé</span>
                    </li>
                </ul>
                <dl id="collateral-tabs" class="collateral-tabs">
                    <dd class="tab-container current">
                        <div class="tab-content">
                            <div class="product-collateral tabs tabs-cgv-showtimes">
                                <ul class="toggle-tabs">
                                    @for($i=0; $i<=6; $i++)
{{--                                        @if( $i==0)--}}
                                            <li id="{{$i}}" onclick="dayClick(this)">
                                                <div class="day">
                                                    <span>{{$ms[$i]}}</span>
                                                    <em>{{$days[$i]}}</em>
                                                    <strong>{{$ds[$i]}}</strong>
                                                </div>
                                            </li>
                                    @endfor
                                </ul>
                                <dl id="collateral-tabs" class="collateral-tabs">
                                    <dd class="tab-container current">
                                        <div class="tab-content cgv-sites-schedule">

                                            <div class="film-list">
                                                <div class="film-label">
                                                    <h3>
                                                        <a href="#"
                                                           title="GÃ HỀ MA QUÁI 2">
                                                            GÃ HỀ MA QUÁI 2 <span class="movie_rating c18">
																		C18																	</span>
                                                        </a>
                                                    </h3>
                                                </div>

                                                <div class="film-left">
                                                    <div class="film-poster">
                                                        <a href="#"
                                                           title="GÃ HỀ MA QUÁI 2">
                                                            <img
                                                                src="{{URL::asset('images/240_10_27.jpg')}}"
                                                                alt="GÃ HỀ MA QUÁI 2" style="width: 176px; height: 260px">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="film-right">
                                                    <strong class="film-screen std">
                                                        2D Phụ Đề Việt </strong>

                                                    <div class="film-showtimes">
                                                        <ul class="products-grid-movie tab-showtime">
                                                            <li class="item">
                                                                <a href="https://www.cgv.vn/default/cinemas/booking/tickets/site/008/seq/3777975/dy/20190909">
																							<span>
																								<i class="hrzone3"></i>
																																																	16:00 PM																																															</span><br>

                                                                    <!-- Print seat Left -->
                                                                    <span>216 ghế trống</span>
                                                                </a>
                                                            </li>
                                                            <li class="item">
                                                                <a href="https://www.cgv.vn/default/cinemas/booking/tickets/site/008/seq/3777966/dy/20190909">
																							<span>
																								<i class="hrzone3"></i>
																																																	16:40 PM																																															</span><br>

                                                                    <!-- Print seat Left -->
                                                                    <span>214 ghế trống</span>
                                                                </a>
                                                            </li>
                                                            <li class="item">
                                                                <a href="https://www.cgv.vn/default/cinemas/booking/tickets/site/008/seq/3777961/dy/20190909">
																							<span>
																								<i class="hrzone4"></i>
																																																	17:20 PM																																															</span><br>

                                                                    <!-- Print seat Left -->
                                                                    <span>123 ghế trống</span>
                                                                </a>
                                                            </li>
                                                            <li class="item">
                                                                <a href="https://www.cgv.vn/default/cinemas/booking/tickets/site/008/seq/3777956/dy/20190909">
																							<span>
																								<i class="hrzone4"></i>
																																																	18:00 PM																																															</span><br>

                                                                    <!-- Print seat Left -->
                                                                    <span>145 ghế trống</span>
                                                                </a>
                                                            </li>
                                                            <li class="item">
                                                                <a href="https://www.cgv.vn/default/cinemas/booking/tickets/site/008/seq/3777976/dy/20190909">
																							<span>
																								<i class="hrzone4"></i>
																																																	19:20 PM																																															</span><br>

                                                                    <!-- Print seat Left -->
                                                                    <span>208 ghế trống</span>
                                                                </a>
                                                            </li>
                                                            <li class="item">
                                                                <a href="https://www.cgv.vn/default/cinemas/booking/tickets/site/008/seq/3777967/dy/20190909">
																							<span>
																								<i class="hrzone4"></i>
																																																	20:00 PM																																															</span><br>

                                                                    <!-- Print seat Left -->
                                                                    <span>212 ghế trống</span>
                                                                </a>
                                                            </li>
                                                            <li class="item">
                                                                <a href="https://www.cgv.vn/default/cinemas/booking/tickets/site/008/seq/3777962/dy/20190909">
																							<span>
																								<i class="hrzone4"></i>
																																																	20:40 PM																																															</span><br>

                                                                    <!-- Print seat Left -->
                                                                    <span>117 ghế trống</span>
                                                                </a>
                                                            </li>
                                                            <li class="item">
                                                                <a href="https://www.cgv.vn/default/cinemas/booking/tickets/site/008/seq/3777957/dy/20190909">
																							<span>
																								<i class="hrzone4"></i>
																																																	21:20 PM																																															</span><br>

                                                                    <!-- Print seat Left -->
                                                                    <span>149 ghế trống</span>
                                                                </a>
                                                            </li>
                                                            <li class="item">
                                                                <a href="https://www.cgv.vn/default/cinemas/booking/tickets/site/008/seq/3777977/dy/20190909">
																							<span>
																								<i class="hrzone6"></i>
																																																	22:40 PM																																															</span><br>

                                                                    <!-- Print seat Left -->
                                                                    <span>216 ghế trống</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <strong class="film-screen lamour">
                                                        2D Phụ Đề Việt | Rạp Lamour </strong>

                                                    <div class="film-showtimes">
                                                        <ul class="products-grid-movie tab-showtime">
                                                            <li class="item">
                                                                <a href="https://www.cgv.vn/default/cinemas/booking/tickets/site/008/seq/3777970/dy/20190909">
																							<span>
																								<i class="hrzone3"></i>
																																																	15:20 PM																																															</span><br>

                                                                    <!-- Print seat Left -->
                                                                    <span>28 ghế trống</span>
                                                                </a>
                                                            </li>
                                                            <li class="item">
                                                                <a href="https://www.cgv.vn/default/cinemas/booking/tickets/site/008/seq/3777972/dy/20190909">
																							<span>
																								<i class="hrzone5"></i>
																																																	22:00 PM																																															</span><br>

                                                                    <!-- Print seat Left -->
                                                                    <span>30 ghế trống</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <strong class="film-screen lamour">
                                                        2D Phụ Đề Hàn &amp; Việt | Rạp Lamour </strong>

                                                    <div class="film-showtimes">
                                                        <ul class="products-grid-movie tab-showtime">
                                                            <li class="item">
                                                                <a href="https://www.cgv.vn/default/cinemas/booking/tickets/site/008/seq/3777971/dy/20190909">
																							<span>
																								<i class="hrzone4"></i>
																																																	18:40 PM																																															</span><br>

                                                                    <!-- Print seat Left -->
                                                                    <span>26 ghế trống</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="film-list">
                                                <div class="film-label">
                                                    <h3>
                                                        <a href="https://www.cgv.vn/default/anh-thay-ngoi-sao.html"
                                                           title="ANH THẦY NGÔI SAO">
                                                            ANH THẦY NGÔI SAO <span class="cp">
																		P																	</span>
                                                        </a>
                                                    </h3>
                                                </div>

                                                <div class="film-left">
                                                    <div class="film-poster">
                                                        <a href="https://www.cgv.vn/default/anh-thay-ngoi-sao.html"
                                                           title="ANH THẦY NGÔI SAO">
                                                            <img
                                                                src="{{URL::asset('images/240_10_27.jpg')}}"
                                                                alt="ANH THẦY NGÔI SAO" style="width: 176px; height: 260px">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="film-right">
                                                    <strong class="film-screen std">
                                                        2D Phụ Đề Anh </strong>

                                                    <div class="film-showtimes">
                                                        <ul class="products-grid-movie tab-showtime">
                                                            <li class="item">
                                                                <a href="https://www.cgv.vn/default/cinemas/booking/tickets/site/008/seq/3777978/dy/20190909">
																							<span>
																								<i class="hrzone4"></i>
																																																	19:40 PM																																															</span><br>

                                                                    <!-- Print seat Left -->
                                                                    <span>123 ghế trống</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="film-list">
                                                <div class="film-label">
                                                    <h3>
                                                        <a href="https://www.cgv.vn/default/weathering-with-you.html"
                                                           title="ĐỨA CON CỦA THỜI TIẾT">
                                                            ĐỨA CON CỦA THỜI TIẾT <span class="c16">
																		C16																	</span>
                                                        </a>
                                                    </h3>
                                                </div>

                                                <div class="film-left">
                                                    <div class="film-poster">
                                                        <a href="https://www.cgv.vn/default/weathering-with-you.html"
                                                           title="ĐỨA CON CỦA THỜI TIẾT">
                                                            <img
                                                                src="{{URL::asset('images/240_10_27.jpg')}}"
                                                                alt="ĐỨA CON CỦA THỜI TIẾT" style="width: 176px; height: 260px">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="film-right">
                                                    <strong class="film-screen std">
                                                        2D Phụ Đề Việt </strong>

                                                    <div class="film-showtimes">
                                                        <ul class="products-grid-movie tab-showtime">
                                                            <li class="item">
                                                                <a href="https://www.cgv.vn/default/cinemas/booking/tickets/site/008/seq/3777944/dy/20190909">
																							<span>
																								<i class="hrzone3"></i>
																																																	16:40 PM																																															</span><br>

                                                                    <!-- Print seat Left -->
                                                                    <span>152 ghế trống</span>
                                                                </a>
                                                            </li>
                                                            <li class="item">
                                                                <a href="https://www.cgv.vn/default/cinemas/booking/tickets/site/008/seq/3777945/dy/20190909">
																							<span>
																								<i class="hrzone4"></i>
																																																	21:30 PM																																															</span><br>

                                                                    <!-- Print seat Left -->
                                                                    <span>152 ghế trống</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="film-list">
                                                <div class="film-label">
                                                    <h3>
                                                        <a href="https://www.cgv.vn/default/nha-trang-that-thu.html"
                                                           title="NHÀ TRẮNG THẤT THỦ: KẺ PHẢN BỘI">
                                                            NHÀ TRẮNG THẤT THỦ: KẺ PHẢN BỘI <span class="c18">
																		C18																	</span>
                                                        </a>
                                                    </h3>
                                                </div>

                                                <div class="film-left">
                                                    <div class="film-poster">
                                                        <a href="https://www.cgv.vn/default/nha-trang-that-thu.html"
                                                           title="NHÀ TRẮNG THẤT THỦ: KẺ PHẢN BỘI">
                                                            <img
                                                                src="{{URL::asset('images/240_10_27.jpg')}}"
                                                                alt="NHÀ TRẮNG THẤT THỦ: KẺ PHẢN BỘI" style="width: 176px; height: 260px">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="film-right">
                                                    <strong class="film-screen std">
                                                        2D Phụ Đề Việt </strong>

                                                    <div class="film-showtimes">
                                                        <ul class="products-grid-movie tab-showtime">
                                                            <li class="item">
                                                                <a href="https://www.cgv.vn/default/cinemas/booking/tickets/site/008/seq/3777983/dy/20190909">
																							<span>
																								<i class="hrzone3"></i>
																																																	15:00 PM																																															</span><br>

                                                                    <!-- Print seat Left -->
                                                                    <span>123 ghế trống</span>
                                                                </a>
                                                            </li>
                                                            <li class="item">
                                                                <a href="https://www.cgv.vn/default/cinemas/booking/tickets/site/008/seq/3777946/dy/20190909">
																							<span>
																								<i class="hrzone4"></i>
																																																	19:00 PM																																															</span><br>

                                                                    <!-- Print seat Left -->
                                                                    <span>152 ghế trống</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </dd>
                </dl>
            </div>
        </div>
    @endif
    <div class="banner-bottom" id="banner-bottom">
        <div class="sticky-banner" style="display: block;">
            <div class="banner-click">
                <a href="#" target="_blank">
                    <img alt="" src="{{URL::asset('images/nha-qua-di-980x120.jpg')}}"></a>
                <button onclick="hide_banner()" class="close-bottom-banner" style="border: none">X</button>
            </div>
        </div>
    </div>
    <script>
        function hide_banner() {
            document.getElementsByClassName('banner-bottom')[0].style.display = 'none';
        }
    </script>
@endsection
