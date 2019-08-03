@extends('main')

@section('content')
    <div class="payment-online">
        <div class="payment-header"><b>THANH TOÁN</b></div>

        <div class="payment-container">
            <div class="col1">
                <div class="step">
                    <div class="step-header">
                        <div class="header">
                            <span>Bước 1: </span>
                            <h5>Giảm giá</h5>
                        </div>
                        {{-- <div class="datlai">Đặt lại</div> --}}
                    </div>
                    <div>
                        <div class="cgv-point">Điểm CGV/ Thẻ quà tặng</div>
                        <div class="discount-code">Mã giảm giá</div>
                        <div class="voucher">CGV Voucher</div>
                        <div class="partner">Đối tác</div>
                        <div class="promotion-code">Mã khuyến mãi</div>
                    </div>
                </div>
                <div class="step">
                    <div class="step-header">
                        <div class="header">
                            <span>Bước 2: </span>
                            <h5>Hình thức thanh toán</h5>
                        </div>
                    </div>
                    <div class="step-container">

                        <label class="method atm-card">
                            <input type="radio" name="atm-card">
                            <span class="img atm-img"></span>
                            <span class="method-name">ATM card (Thẻ nội địa)</span>
                        </label>

                        <label class="method international-card">
                            <input type="radio" name="international-card">
                            <span class="img international-img"></span>
                            <span class="method-name">Thẻ quốc tế (Visa, Master, Amex, JCB)</span>
                        </label>

                        <label class="method momo">
                            <input type="radio" name="momo">
                            <span class="img momo-img"></span>
                            <span class="method-name">Ví MoMo 2 vé x 9k/vé KH mới & 79k/vé KH Bạc -T6,T7,CN</span>
                        </label>

                        <label class="method zalopay">
                            <input type="radio" name="zalopay">
                            <span class="img zalopay-img"></span>
                            <span class="method-name">ZaloPay 1k/1 vé, 59k/2 vé cho KH mới & 79k/vé x2 cho KH cũ (từ T5-CN)</span>
                        </label>

                        <label class="method airpay">
                            <input type="radio" name="airpay">
                            <span class="img airpay-img"></span>
                            <span class="method-name">Ví điện tử AirPay</span>
                        </label>

                    </div>
                </div>
                <div class="iaccept">
                    <input type="checkbox">
                    <span class="iaccept-name">Tôi đồng ý với điều khoản sử dụng và mua vé cho người có độ tuổi phù hợp</span>
                </div>
            </div> 
            <div class="col2">
                <div class="table">
                    <div class="col2-header">Tổng cộng</div>
                    <div class="std">120.000,00 ₫</div>
                    <div class="price">120.000,00 ₫</div>
                </div>
                <div class="table">
                    <div class="col2-header">Giảm giá</div>
                    <div class="price">0,00 ₫</div>
                </div>
                <div class="table">
                    <div class="col2-header total">Tổng số tiền phải thanh toán</div>
                    <div class="price">120.000,00 ₫</div>
                </div>
                <div class="table">
                    <div class="col2-header countdown">Countdown Clock</div>
                    <div class="clock">
                        <div class="minute">
                            <div id="m" class="big-num">5</div>
                            <div class="small-word">Minutes</div>
                        </div>
                        <div class="second">
                            <div id="s" class="big-num">0</div>
                            <div class="small-word">Seconds</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="booking-info">
            <div class="format-bg-top"></div>
            <div class="booking-info-container">
                <a class="btn-prev prev" href="/booking"></a>
                <ul class="info">
                    <li class="film-info dot">
                        <div class="middle">
                            <div class="film-info-th"><img src="https://www.cgv.vn/media/catalog/product/cache/1/thumbnail/dc33889b0f8b5da88052ef70de32f1cb/s/m/smffh-localized_aw-vn-poster_6-3up_triangle_2.jpg" alt=""></div>
                            <div class="film-info-td">
                                <div class="film-name">NGƯỜI NHỆN XA NHÀ</div>
                                <div class="film-format">2D</div>
                                <div class="film-age-limit">C13</div>
                            </div>
                        </div>
                    </li>
                    <li class="when-info dot">
                        <div class="middle">
                            <div class="when-info-th">
                                <div class="cinema">Rạp chiếu phim</div>
                                <div class="date">Ngày</div>
                                <div class="room">Phòng chiếu</div>
                                <div class="seat-info">Ghế</div>
                                <div id="std">STD: </div>
                            </div>
                            <div class="when-info-td">
                                <div class="cinema-detail"><b>CGV Hồ Gươm Plaza</b></div>
                                <div class="date-detail"><b>01/08/2019</b></div>
                                <div class="room-detail"><b>Cinema 4</b></div>
                                <b><div id="seat-detail"></div></b>
                            </div>
                        </div>
                    </li>
                    <li class="cost-info dot">
                        <div class="middle">
                            <div class="cost-info-th">
                                <div class="film">Phim</div>
                                <div class="combo">Combo</div>
                                <div class="sum">Tổng</div>
                            </div>
                            <div class="cost-info-td">
                                <b><div id="film-cost">120.000,00 ₫</div></b>
                                <b><div id="combo-cost">0,00 ₫</div></b>
                                <b><div id="sum-cost">120.000,00 ₫</div></b>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="btn-payment"></div>
            </div>
            <div class="format-bg-bottom"></div>
        </div>

    </div>
    
    <script>
        var m = 5; // Phút
        var s = 0; // Giây
    
        var timeout = null; // Timeout

        start();

        function start()
        {
            if (s === -1){
                m -= 1;
                s = 59;
            }
            if (m === -1){
                clearTimeout(timeout);
                alert('Đã quá thời gian đặt');
                return false;
            }

            /* HIỂN THỊ ĐỒNG HỒ*/
            document.getElementById('m').textContent = m.toString();
            document.getElementById('s').textContent = s.toString();
        
            /* GIẢM PHÚT XUỐNG 1 GIÂY VÀ GỌI LẠI SAU 1 GIÂY */
            timeout = setTimeout(function(){
                s--;
                start();
            }, 1000);
        }
    </script>
@endsection