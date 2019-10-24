@extends('main2')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylePhimDangChieu.css')}}">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@endsection

@section('content')

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>

    <div class="header-phim-dang-chieu">
        <div><h1>Phim Đang Chiếu</h1></div>
        <div><h2>PHIM SẮP CHIẾU</h2></div>
    </div>
    <ul class="phim-dang-chieu">
        @foreach( $film as $f ) 
            @if( $f->trang_thai == '0' )
                <li>
                    <div class="banner">
                        <img src="{{$f -> image}}" alt="">
                    </div>
                    <div class="detail">
                        <div class="name"><b>{{$f -> name}}</b></div>
                        <div class="genre"><b>Thể loại: </b>{{$f -> type}}</div>
                        <div class="running-time"><b>Thời lượng: </b>{{$f -> leng }} phút</div>
                        <div class="release-date"><b>Khởi chiếu: </b>{{date('d-m-Y',$f -> release_date)}}</div>
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
                        <button type="button" class="fa-mua-ve" data-toggle="modal" data-target="#modal{{$f -> id}}">
                            <div class="mua-ve">
                                MUA VÉ
                            </div>
                        </button>
                        <?php ?>
                        <div class="modal fade" id="modal{{$f -> id}}" class="myModal" role="dialog">
                            <div class="content-modal">
                                <div class="date">
                                    <ul class="toggle-tabs">
                                        <?php $i = 1;?>
                                        @foreach($allSchedule[$f->id-1] as $listCinema)
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
                                <?php $i=1;?>
                                @foreach($allSchedule[$f->id-1] as $listCinema)
                                    <div class="cinemas" id="day{{ $i++ }}" >    
                                        @foreach( $listCinema['cinemas'] as $cinema )
                                            <div class="cinema_child">
                                                <div class="site"><h3>{{ $cinema->name }}</h3></div>    
                                                <ul class="products-grid-movie tab-showtime">
                                                    @foreach ($cinema->rooms as $room)
                                                        @foreach ($room->schedules as $schedule)
                                                            <li class="item">
                                                                <a href="/booking/{{ $cinema->id }}/{{ $room->id }}/{{ $schedule->id }}/{{ $f->id }}/{{ $cinema->name }}/{{ $room->name }}/{{ $schedule['seat_left'] }}/{{ $room->total_seat }}/{{ $schedule->start_time }}/{{ $schedule->end_time }}">
                                                                    <span>{{ date('h:m',$schedule->start_time) }}</span><br>
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
                    </div>
                </li>
            @endif
        @endforeach
    </ul>

    <div id="movies"></div>
    <button id="showMovies" onclick="getMovies()">Show</button>

    <script>
        function getMovies(){
            axios.get('https://api.themoviedb.org/3/movie/popular?api_key=771440ca8394b12ebf5b24a142892caa&language=en-US&page=1')
                .then( response => {
                    console.log(response->toArray());
                    // $('#movies').html(response->toArray());
                });
        }
    </script>
@endsection
   