@extends('main')

@section('js')
    <script src="{{asset('js/jsBooking.js')}}"></script>
@endsection

@section('content')

    <div class="booking-online">
        <div class="booking-header"><b>BOOKING ONLINE</b></div>
        <div class="seat-header">
            <div class="cinema-info">
                <span><b>CGV Hồ Gươm Plaza | Cinema 3 | Số ghế (<i>158</i>/178)</b></span>
                <div><b>29/07/2019 16:50 ~ 29/07/2019 19:10</b></div>
            </div>
        </div>
        <div class="booking-container">
            <div class="booking-container-header"><b>Người / Ghế</b></div>
            <div class="booking-container-detail">
                <div class="screen-img"></div>      
                
                
                <div class="seat-place">
                    <div class="row">
                        <div class="seat seat-standard" onclick="selectedSeat(this)">A13</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">A12</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">A11</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">A10</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">A9</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">A8</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">A7</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">A6</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">A5</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">A4</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">A3</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">A2</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">A1</div>
                    </div>
                    <div class="row">
                        <div class="seat seat-standard" onclick="selectedSeat(this)">B13</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">B12</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">B11</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">B10</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">B9</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">B8</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">B7</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">B6</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">B5</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">B4</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">B3</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">B2</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">B1</div>
                    </div>
                    <div class="row">
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">C12</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">C11</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">C10</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">C9</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">C8</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">C7</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">C6</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">C5</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">C4</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">C3</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">C2</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">C1</div>
                    </div>
                    <div class="row">
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">D12</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">D11</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">D10</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">D9</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">D8</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">D7</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">D6</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">D5</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">D4</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">D3</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">D2</div>
                        <div class="seat seat-standard" onclick="selectedSeat(this)">D1</div>
                    </div>
                    <div class="row">
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">E13</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">E12</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">E11</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">E10</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">E9</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">E8</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">E7</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">E6</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">E5</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">E4</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">E3</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">E2</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">E1</div>
                    </div>
                    <div class="row">
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">F13</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">F12</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">F11</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">F10</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">F9</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">F8</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">F7</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">F6</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">F5</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">F4</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">F3</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">F2</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">F1</div>
                    </div>
                    <div class="row">
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">G13</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">G12</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">G11</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">G10</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">G9</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">G8</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">G7</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">G6</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">G5</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">G4</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">G3</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">G2</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">G1</div>
                    </div>
                    <div class="row">
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">H13</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">H12</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">H11</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">H10</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">H9</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">H8</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">H7</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">H6</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">H5</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">H4</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">H3</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">H2</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">H1</div>
                    </div>
                    <div class="row">
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">I13</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">I12</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">I11</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">I10</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">I9</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">I8</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">I7</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">I6</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">I5</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">I4</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">I3</div>
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">I2</div>
                        <div class="seat seat-vipprime" onclick="selectedSeat(this)">I1</div>
                    </div>
                    <div class="row">
                        <div class="seat seat-empty"></div>
                        <div class="seat seat-sw" onclick="selectedSeat(this)">J14</div>
                        <div class="seat seat-sw" onclick="selectedSeat(this)">J13</div>
                        <div class="seat seat-sw" onclick="selectedSeat(this)">J12</div>
                        <div class="seat seat-sw" onclick="selectedSeat(this)">J11</div>
                        <div class="seat seat-sw" onclick="selectedSeat(this)">J10</div>
                        <div class="seat seat-sw" onclick="selectedSeat(this)">J9</div>
                        <div class="seat seat-sw" onclick="selectedSeat(this)">J8</div>
                        <div class="seat seat-sw" onclick="selectedSeat(this)">J7</div>
                        <div class="seat seat-sw" onclick="selectedSeat(this)">J6</div>
                        <div class="seat seat-sw" onclick="selectedSeat(this)">J5</div>
                        <div class="seat seat-sw" onclick="selectedSeat(this)">J4</div>
                        <div class="seat seat-sw" onclick="selectedSeat(this)">J3</div>
                        <div class="seat seat-sw" onclick="selectedSeat(this)">J2</div>
                        <div class="seat seat-sw" onclick="selectedSeat(this)">J1</div>
                    </div>
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

            <div class="booking-info">
                <div class="format-bg-top"></div>
                <div class="btn-prev"></div>
                <ul class="info">
                    @foreach( $data as $f )
                    <li class="film-info">
                    <div class="film-info-th"><img src="{{$f -> image}}" alt=""></div>
                        <div class="film-info-td">
                        <div class="film-name">{{$f -> name}}</div>
                            <div class="film-format">2D</div>
                            <div class="film-age-limit">{{$f -> rated}}</div>
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
                            <div class="cinema-detail"><b>CGV Hồ Gươm Plaza</b></div>
                            <div class="date-detail"><b>01/08/2019</b></div>
                            <div class="room-detail"><b>Cinema 4</b></div>
                            <b><div id="seat-detail"></div></b>
                        </div>
                    </li>
                    <li class="cost-info">
                        <div class="cost-info-th">
                            <div class="film">Phim</div>
                            <div class="combo">Combo</div>
                            <div class="sum">Tổng</div>
                        </div>
                        <div class="cost-info-td">
                            <b><div id="film-cost">0,00 ₫</div></b>
                            <b><div id="combo-cost">0,00 ₫</div></b>
                            <b><div id="sum-cost">0,00 ₫</div></b>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <a class="btn-next" href="/payment"></a>
                <div class="format-bg-bottom"></div>
            </div>
        </div>
    </div>

@endsection