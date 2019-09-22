@extends('main2')
@section('content')
    <div class="contentDetail">
        <div class="breadcrumbs">
            <ul>
                <li class="home">
                    <a href="/">trang chủ</a>
                    <span>/ </span>
                </li>
                <li class="product">
                    <strong>{{ $film[0]->name }}</strong>
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
                        <img src="{{URL::asset($film[0]->image)}}" alt="aa">
                    </div>
                    <div class="product-shop">
                        <div class="product-name">
                            <span class="h1">{{ $film[0]->name }}</span>
                        </div>
                        <div class="movie-director movie-infor">
                            <label>Đạo diễn: </label>
                            <span class="std">&nbsp;{{ $film[0]->director }}</span>
                        </div>
                        <div class="movie-actress movie-infor">
                            <label>Diễn viên: </label>
                            <div class="std">&nbsp;&nbsp; Donald Glover, Chiwetel Ejiofor, Seth Rogen</div>
                        </div>
                        <div class="movie-genre movie-infor">
                            <label>Thể loại:</label>
                            <div class="std">&nbsp;&nbsp;{{ $film[0]->type }}</div>
                        </div>
                        <div class="movie-release movie-infor">
                            <label>Khởi chiếu:</label>
                            <div class="std">&nbsp;{{ date('d-m-20y',$film[0]->release_date) }}</div>
                        </div>
                        <div class="movie-actress movie-infor">
                            <label>Thời lượng:</label>
                            <div class="std">&nbsp;{{ $film[0]->leng }} phút</div>
                        </div>
                        <div class="movie-rating movie-rated-web">
                            <label>Rated:</label>
                            <div class="std">&nbsp;&nbsp;
                                @if($film[0]->rated == 'p')
                                    <strong>P - PHIM DÀNH CHO MỌI ĐỐI TƯỢNG</strong>
                                @elseif($film[0]->rated == 'c13')
                                    <strong>C13 - PHIM CẤM KHÁN GIẢ DƯỚI 13 TUỔI</strong>
                                @elseif($film[0]->rated == 'c16')
                                    <strong>C16 - PHIM CẤM KHÁN GIẢ DƯỚI 16 TUỔI</strong>
                                @elseif($film[0]->rated == 'c18')
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
                        <p> aa <br>
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
    <div class="modal fade" id="myModal" role="dialog">
        <div class="content-modal">
            <div class="date">
                <ul class="toggle-tabs">
                    <?php $i = 1 ?>
                    @foreach($list as $listCinema)
                        <li id="{{$i++}}" onclick="dayClick(this)">
                            <div class="day">
                                <span>{{$listCinema['day']}}</span>
                                <em>{{$listCinema['m']}}</em>
                                <strong>{{$listCinema['d']}}</strong>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            {{-- <div class="location" >
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
            </div> --}}
            {{-- <div class="type">
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
            </div> --}}<?php $i=1; ?>
            @foreach($list as $listCinema)
                <div class="cinemas" id="day{{ $i++ }}" >    
                    @foreach( $listCinema['cinemas'] as $cinema )
                        <div class="cinema_child">
                            <div class="site"><h3>{{ $cinema->name }}</h3></div>    
                            <ul class="products-grid-movie tab-showtime">
                                @foreach ($cinema->rooms as $room)
                                    @foreach ($room->schedules as $schedule)
                                        <li class="item">
                                            <a href="/booking/{{ $cinema->id }}/{{ $room->id }}/{{ $schedule->id }}/{{ $film[0]->id }}/{{ $cinema->name }}/{{ $room->name }}/{{ $schedule['seat_left'] }}/{{ $room->total_seat }}/{{ $schedule->start_time }}/{{ $schedule->end_time }}/{{ $schedule->date }}">
                                                <span>{{ $schedule->start_time }}</span><br>
                                                <span>{{ $schedule['seat_left'] }} ghế trống</span>
                                            </a>
                                        </li>
                                    @endforeach
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div> 
            @endforeach
        </div>
        <button type="button" id="cboxClose" data-dismiss="modal">close</button>

    </div>
    <div class="banner-bottom" id="banner-bottom">
        <div class="sticky-banner" style="display: block;">
            <div class="banner-click">
                <a href="#" target="_blank">
                    <img alt="" src="{{URL::asset('images/nha-qua-di-980x120.jpg')}}"></a>
                <button onclick="hide_banner()" class="close-bottom-banner" style="border: none">X</button>
            </div>
        </div>
    </div>
    
@endsection
