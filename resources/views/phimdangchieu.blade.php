@extends('main')

@section('content')

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>

    <div class="header-phim-dang-chieu">
        <div><h1>Phim Đang Chiếu</h1></div>
        <div><h2>PHIM SẮP CHIẾU</h2></div>
    </div>
    <ul class="phim-dang-chieu">
        @foreach( $film as $f )
            <li>
                <div class="banner">
                    <img src="{{$f -> image}}" alt="">
                </div>
                <div class="detail">
                    <div class="name"><b>{{$f -> name}}</b></div>
                    <div class="genre"><b>Thể loại: </b>{{$f -> type}}</div>
                    <div class="running-time"><b>Thời lượng: </b>{{$f -> leng }} phút</div>
                    <div class="release-date"><b>Khởi chiếu: </b>{{$f -> release_date}}</div>
                </div>
                <div class="button">
                    <div class="fb-like" 
                        data-href="https://cgv.vn" 
                        data-width="" 
                        data-layout="button_count" 
                        data-action="like" 
                        data-size="small" 
                        data-show-faces="false" 
                        data-share="false">
                    </div>
                    <div class="fa-mua-ve">
                        <div class="mua-ve">
                            MUA VÉ
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
   