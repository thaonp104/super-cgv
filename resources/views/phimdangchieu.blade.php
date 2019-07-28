@extends('main')

@section('content')

<!-- <?php 
  //  $data = App\Film::all()->toArray();
  //  $data = DB::table('film') -> get();

?> -->

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
                    &emsp;&emsp;<span class="btn-like" onclick="like()">Like {{$f -> like}}</span>&emsp;&emsp;&emsp;
                    <span class="div-btn-buy"><div class="btn-buy" onclick="buy()">Mua vé</span></span>
                </div>
            </li>
        @endforeach
    </ul>
    
    <script>
        
    </script>

@endsection
   