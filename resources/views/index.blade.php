@extends('main2')
@section('content')
    <div class="container-fluit">
        <div class="row1">
            <div class="select">
                <ul>
                    <li>
                        <a href="#"></a>
                    </li>
                    <li>
                        <a href="/phimdangchieu"></a>
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
        </div>
        <div class="intro">
            <div class="slide">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"> </li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="#"><img src="{{URL::asset('images/980_11.jpg')}}" style="width:100%;"></a>
                        </div>

                        <div class="item">
                            <a href="#"><img src="{{URL::asset('images/art-50k_happy-ending---chi-tro-ly-cua-anh_980-x-448.jpg')}}"
                                    style="width:100%;"></a>
                        </div>

                        <div class="item">
                            <a href="#"><img src="{{URL::asset('images/980-x-448_6.jpg')}}" style="width:100%;"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{URL::asset('images/980x448_55.jpg')}}" style="width:100%;"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{URL::asset('images/thu_thach_captain_marvel_980x448.jpg')}}" style="width:100%;"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{URL::asset('images/delivery-980x448.jpg')}}" style="width:100%;"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{URL::asset('images/rolling_88k.jpg')}}" style="width:100%;"></a>
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
        <div class="movie_selection">
            <div class="text">
                <div class="font_text">
                </div>
            </div>
            <div class="mother_slide">
                <div class="slide">
                    <ul>
                        @foreach($films as $p)
                            <li class="mySlides">
                                <span class="movie_rating {{$p->rated}}"></span>
                                <a href="#">
                                    <img src="{{URL::asset($p->image)}}">
                                </a>
                                <input type="hidden">
                                <div class="conect_film_back"></div>
                                <div class="conect_film">
                                    <h3>{{ $p->name }}</h3>
                                    <a href="/detailFilm/{{$p->id}}" class="button">Xem chi tiết</a>
                                    <a class="button btn_booking">
                                        <i class="fas fa-tty"></i>
                                        <span>Mua vé</span>
                                    </a>
                                </div>
                                <div class="play_button">
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <button onclick="prev()" class="selection_lui"></button>
                <button onclick="next()" class="selection_tien"></button>
            </div>
        </div>
    </div>
    <!-- banner -->
    <!-- left -->
    <div class="stick1">
        <a href="#">
            <img src="{{URL::asset('images/baner-left-vn.jpg')}}">
        </a>
    </div>
    <!-- right -->
    <div class="stick2">
        <ul>
            <li>
                <a href="#">
                    <img src="{{URL::asset('images/en-banner-right-1.png')}}">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{URL::asset('images/en-banner-right-2.png')}}">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{URL::asset('images/vn-banner-right-3.png')}}">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{URL::asset('images/vn-banner-right-4.png')}}">
                </a>
            </li>
        </ul>
    </div>
    <!-- end banner -->

    <!-- event -->

    <div class="event">
        <div class="text">
            <div class="font_text"></div>
        </div>
        <ul class="toggle_tabs">
            <li class="current">
                <a href="#">
                    <i class="	far fa-hand-point-right" style="font-size: 20px; margin-right: 5px;"></i>
                    Tin Mới & Ưu Đãi
                </a>
            </li>
            <li class="last">
                <a href="#">Thành Viên CGV</a>
            </li>
        </ul>
        <div class="mother_slide">
            <div class="slide">
                <ul>
                    <li class="mySlides">
                        <a href="#">
                            <img src="{{URL::asset('images/captainmarvel_combo_240x201.jpg')}}">
                        </a>
                    </li>
                    <li class="mySlides">
                        <a href="#">
                            <img src="{{URL::asset('images/sjora_240x201.jpg')}}">
                        </a>
                    </li>
                    <li class="mySlides">
                        <a href="#">
                            <img src="{{URL::asset('images/gudetama2_240-x-201.jpg')}}">
                        </a>
                    </li>
                    <li class="mySlides">
                        <a href="#">
                            <img src="{{URL::asset('images/waffle_240-x-201.jpg')}}">
                        </a>
                    </li>
                    <li class="mySlides">
                        <a href="#">
                            <img src="{{URL::asset('images/web_240x201_13.jpg')}}">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- khi nhấn bắt sự kiện prev2() -->
            <button onclick="prev2()" class="selection_lui2"></button>
            <!-- khi nhấn bắt sự kiện next2() -->
            <button onclick="next2()" class="selection_tien2"></button>
        </div>
    </div>

    <!-- end event -->

    <!-- home_promotion_card -->

    <div class="home_promotion_card">
        <div class="card">
            <a href="#">
                <img src="{{URL::asset('images/phototicket---496x247_1.jpg')}}" alt="">
            </a>
        </div>
    </div>

    <!-- end home_promotion_card -->

    <!-- Footer -->
{{--    @include('footer')--}}
    <!-- end Footer -->

{{--</body>--}}
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
@endsection
