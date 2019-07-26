@extends('main')

@section('content')

<?php 
    $data = App\Film::all()->toArray();
    // $data = DB::table('film') -> get();

?>

    <div class="header-phim-dang-chieu">
        <div><h1>Phim Đang Chiếu</h1></div>
        <div><h2>PHIM SẮP CHIẾU</h2></div>
    </div>

    <ul class="phim-dang-chieu">
        @foreach( $data as $film )
            <li>
                <div class="banner">
                    <img src="{{$film['image']}}" alt="">
                </div>
                <div class="detail">
                    <div class="name"><b>{{$film['name']}}</b></div>
                    <div class="genre"><b>Thể loại: </b>{{$film['type']}}</div>
                    <div class="running-time"><b>Thời lượng: </b>{{$film['leng']}} phút</div>
                    <div class="release-date"><b>Khởi chiếu: </b>{{$film['release_date']}}</div>
                </div>
                <div class="button">
                    &emsp;&emsp;<span class="btn-like" onclick="like()">Like {{$film['like']}}</span>&emsp;&emsp;&emsp;
                    <span class="div-btn-buy"><div class="btn-buy" onclick="buy()">Mua vé</div></span>
                </div>
            </li>
        @endforeach
    </ul>
    

@endsection
   