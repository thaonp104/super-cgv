@extends('main')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/styleBooking.css')}}">
@endsection

@section('content')

    <div class="booking-online">
        <div class="booking-header"><b>BOOKING ONLINE</b></div>
        <div class="seat-header">
            <div class="cinema-info">
                <span><b>{{ $cinema_name }} | Cinema {{ $room_name }} | Số ghế (<i>{{ $seat_left }}</i>/{{ $total_seat }})</b></span>
                <div><b>{{ $date }} {{ $start_time }} ~ {{ $date }} {{ $end_time }}</b></div>
            </div>
        </div>
        <div class="booking-container">
            <div class="booking-container-header"><b>Người / Ghế</b></div>
            <div class="booking-container-detail">
                <div class="screen-img"></div>      
                
                
                <div class="seat-place">
                    <?php 
                    $k = 0 ;
                    for( $i = 1 ; $i <= 10 ; $i++ ){  
                    ?>  
                        <div class="row">
                    <?php
                        for( $j = 15 ; $j >= 1 ; $j-- ){
                            if( $map[$i][$j] == 1 ){
                                // ktra xem ghế đã có người đặt chưa
                                $kt = 0 ;
                                foreach( $seat_taken as $seat_takeni ){
                                    if( $seat[$k]->name == $seat_takeni->name ){
                                        $kt = 1 ;
                                        break;
                                    }
                                }
                                if( $kt == 1 ){
                                    ?> <div class="seat seat-chosen">{{ $seat[$k++]->id }}</div> <?php
                                }
                                if( $kt != 1 ){
                                    if( $map_type[$i][$j] == 'standard' ){
                    ?>
                                        <div class="seat seat-standard" onclick="selectedSeat(this)">{{ $seat[$k++]->id }}</div>
                    <?php 
                                    }
                                    if( $map_type[$i][$j] == 'vipprime' ){
                    ?>
                                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">{{ $seat[$k++]->id }}</div>
                    <?php 
                                    }
                                    if( $map_type[$i][$j] == 'sw' ){
                    ?>
                                        <div class="seat seat-sw" onclick="selectedSeat(this)">{{ $seat[$k++]->id }}</div>
                    <?php 
                                    }
                                }
                            }
                            if( $map[$i][$j] == 0 ){
                    ?>
                                <div class="seat seat-empty"></div>
                    <?php    
                            }
                        }
                    ?>
                        </div>
                    <?php    
                    }
                    ?>
                </div>



                <div class="seat-notice">
                    <div class="notice">
                        <div class="checked icon">Checked</div>
                        <div class="occupied icon">Đã chọn</div>
                        <div class="unavailable icon">Không thể chọn</div>                       
                    </div>
                    <div class="notice">
                        <div class="zone-standard icon">Thường</div>
                        <div class="zone-vipprime icon">VIP (Prime)</div>
                        <div class="zone-sw icon">SW</div>
                    </div>
                </div>
            </div>
            <form action="/payment" method="POST" id="booking-form">
                @csrf
                <div class="booking-info">
                    <div class="format-bg-top"></div>
                    <div class="btn-prev"></div>
                    <ul class="info">
                        @foreach( $data as $f )
                            <li class="film-info">
                            <div class="film-info-th"><img src="{{URL::asset($f->image)}}" alt=""></div>
                                <div class="film-info-td">
                                    <input type="text" class="film-name" name="film-name" id="film-name" value="{{$f -> name}}" disabled>
                                    <div class="film-format">2D</div>
                                    <input type="text" class="film-age-limit" name="film-age-limit" id="film-age-limit" value="{{$f -> rated}}" disabled>
                                </div>
                            </li>
                            <li class="when-info">
                                <div class="when-info-th">
                                    <div class="cinema">Rạp chiếu phim</div>
                                    <div class="date">Ngày</div>
                                    <div class="room">Phòng chiếu</div>
                                    <div id="seat-info">Ghế</div>
                                </div>
                                <div class="when-info-td">
                                    <input type="text" class="cinema-detail" name="cinema-detail" id="cinema-detail" value="{{ $cinema_name }}" disabled>
                                    <input type="text" class="date-detail" name="date-detail" id="date-detail" value="{{ $date }}" disabled>
                                    <input type="text" class="room-detail" name="room-detail" id="room-detail" value="Cinema {{ $room_name }}" disabled>
                                    <input type="text" id="seat-detail" name="seat-detail" disabled>
                                </div>
                            </li>
                            <li class="cost-info">
                                <div class="cost-info-th">
                                    <div class="film">Phim</div>
                                    <div class="combo">Combo</div>
                                    <div class="sum">Tổng</div>
                                </div>
                                <div class="cost-info-td">
                                    <input type="text" id="film-cost" name="filmCost" value="0,00 ₫" disabled>
                                    <input type="text" id="combo-cost" value="0,00 ₫" disabled>
                                    <input type="text" id="sum-cost" name="sumCost" value="0,00 ₫" disabled>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <button type="submit" class="btn-booking-next" name="btn-next" onclick="ableInput()">
                        <span class="btn-next"></span>
                    </button>
                    <div class="format-bg-bottom"></div>
                </div>
            </form>
        </div>
    </div>

@endsection