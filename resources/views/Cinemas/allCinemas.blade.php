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
                <ul class="toggle-tab">
                    <li class="current" id="const" style="cursor: pointer">
                        <span>Lịch chiếu</span>
                    </li>
                    <li><span style="padding: 10px 0px">|</span></li>
                    <li class="last" style="cursor: pointer;">
                        <span>Giá vé</span>
                    </li>
                </ul>
                <dl id="collateral-tabs" class="collateral-tabs">
                    <dd class="tab-container current">
                        <div class="tab-content">
                            <div class="product-collateral tabs tabs-cgv-showtimes">
                                <ul class="toggle-tabs">
                                    @for($i=1; $i<=7; $i++)
                                        <li id="{{$i}}" onclick="dayClick(this)">
                                            <div class="day">
                                                <span>{{$ms[$i-1]}}</span>
                                                <em>{{$days[$i-1]}}</em>
                                                <strong>{{$ds[$i-1]}}</strong>
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                                <dl id="collateral-tabs" class="collateral-tabs">
                                    <dd class="tab-container current">
                                        <div class="tab-content cgv-sites-schedule">
                                        <?php $i=1; ?>
                                            @foreach( $arr_date as $films )
                                                <div class="cinemas" id="day{{ $i++ }}" style="display: none">
                                                    @foreach($films as $film)
                                                        <div class="cinema_child" style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid black">
                                                            <div class="film-label">
                                                                <h3>
                                                                    <a href="#"
                                                                       title="{{$film->name}}" class="upcase">
                                                                        {{$film->name}}
                                                                        <span class="movie_rating {{$film->rated}}">
                                                                            C18
                                                                        </span>
                                                                    </a>
                                                                </h3>
                                                            </div>

                                                            <div class="film-left">
                                                                <div class="film-poster">
                                                                    <a href="#"
                                                                       title="{{$film->name}}">
                                                                        <img
                                                                            src="{{URL::asset($film->image)}}"
                                                                            alt="{{$film->name}}" style="width: 176px; height: 260px">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="film-right">
                                                                <strong class="film-screen std">
                                                                    2D Phụ Đề Việt </strong>

                                                                <div class="film-showtimes">
                                                                    <ul class="products-grid-movie tab-showtime">
                                                                        @foreach($film->schedules as $schedule)
                                                                            <li class="item">
                                                                                <a href="#">
                                                                                    <span>
                                                                                        <i class="hrzone3"></i>
                                                                                         {{$schedule->start_time}}
                                                                                    </span><br>
                                                                                    <span>216 ghế trống</span>
                                                                                </a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endforeach
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
