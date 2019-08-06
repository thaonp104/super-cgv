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
                    <div class="step1-container">
                        <div class="cgv-point" onclick="cgvPoint()">Điểm CGV/ Thẻ quà tặng</div>
                        <div class="under-cgv-point">
                            <div class="diem-cgv">
                                <div class="header">
                                    <h6>Điểm CGV</h6>
                                </div>
                                <form action="">
                                    <div>Bạn có: 0 P</div>
                                    <input type="text">
                                    <div class="su-dung">Sử dụng</div>
                                    <input type="checkbox">Sử dụng hết
                                </form>
                                <div class="giamgia">Giảm giá: <b>0,00 ₫</b></div>
                            </div>
                            <div class="the-qua-tang">
                                <div class="header">
                                    <h6>Thẻ quà tặng</h6>
                                    <div class="dang-ky">Đăng ký</div>
                                </div>
                                <form action="">
                                    <div>Bạn có: 0,00 ₫</div>
                                    <input type="text">
                                    <div class="su-dung">Sử dụng</div>
                                    <input type="checkbox">Sử dụng hết
                                </form>
                                <div class="giamgia">Giảm giá: <b>0,00 ₫</b></div>
                            </div>
                        </div>
                        <div class="discount-code" onclick="discountCode()">Mã giảm giá</div>
                        <div class="under_discount-code">
                            <div class="op-col">
                                <div class="header">
                                    <h6>Phim</h6>
                                    <div class="dang-ky">Đăng ký</div>
                                </div>
                                <div class="chua-dung">
                                    <div>Chưa dùng</div>
                                    <div>[GOLDCLASS - HVP & NCT] - 40K DISCOUNT</div>
                                </div>
                                <div class="expire-date">
                                    <div>Expire date</div>
                                    05/08/2019<input type="checkbox">
                                </div>
                            </div>
                            <div class="op-col">
                                <div class="header">
                                    <h6>Bắp nước</h6>
                                    <div class="dang-ky">Đăng ký</div>
                                </div>
                                <div class="chua-dung">
                                    <div>Chưa dùng</div>
                                </div>
                                <div class="expire-date">
                                    <div>Expire date</div>
                                </div>
                            </div>
                        </div>
                        <div class="voucher" onclick="voucher()">CGV Voucher</div>
                        <div class="under-voucher">
                            <div class="op3 op-col">
                                <div class="header">
                                    <h6>Phim</h6>
                                    <div class="dang-ky">Đăng ký</div>
                                </div>
                            </div>
                            <div class="op3 op-col">
                                <div class="header">
                                    <h6>Bắp nước</h6>
                                    <div class="dang-ky">Đăng ký</div>
                                </div>
                            </div>
                        </div>
                        <div class="partner" onclick="partner()">Đối tác</div>
                        <div class="under-partner">
                            <div class="doi-tac">
                                <div class="name vpbank">VPBank 1</div>
                            </div>
                            <div class="uu-dai">
                                <div class="tieu-de">Mua 2 vé xem phim bằng thẻ VPBank chỉ trả tiền 1 vé</div>
                                <form action="">
                                    <b>Verify code</b>
                                    <input type="text" class="vpbank-code">
                                    <div class="su-dung">Sử dụng</div>
                                </form>
                                <b>Mua 2 vé xem phim bằng thẻ VPBank chỉ trả tiền 1 vé</b>
                                <p>- Khách hàng khi thỏa điều kiện sẽ được tặng 1 mã code do VPBank cung cấp cho khách hàng</p>
                                <p>- Khách hàng sử dụng mã code, mua online 2 vé xem phim 2D,  thanh toán bằng thẻ VPBank quy định của chương trình, chỉ cần trả tiền 1 vé với giá là 80.000 vnd</p>
                                <p>- Mỗi cặp vé được áp dụng cho cùng một bộ phim, một suất chiếu và cùng hạng ghế (VIP hoặc Standard), chỉ áp dụng phòng chiếu thường của CGV</p>
                                <p>Thông tin chi tiết tham khảo tại: 
                                    <a href="https://www.cgv.vn/default/newsoffer/">https://www.cgv.vn/default/newsoffer/</a>
                                </p>
                            </div>
                        </div>
                        <div class="promotion-code" onclick="promotionCode()">Mã khuyến mãi</div>
                        <div class="under-promotion-code">
                            <form action="">
                                <div><b>Nhập mã khuyến mãi</b></div>
                                <input type="text">
                                <div class="su-dung">Sử dụng</div>
                            </form>
                        </div>
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
                            <input type="radio" name="radio" onclick="atmCard()">
                            <span class="img atm-img"></span>
                            <span class="method-name">ATM card (Thẻ nội địa)</span>
                        </label>

                        <label class="method international-card">
                            <input type="radio" name="radio" onclick="internationalCard()">
                            <span class="img international-img"></span>
                            <span class="method-name">Thẻ quốc tế (Visa, Master, Amex, JCB)</span>
                        </label>

                        <label class="method momo">
                            <input type="radio" name="radio" onclick="momo()">
                            <span class="img momo-img"></span>
                            <span class="method-name">Ví MoMo 2 vé x 9k/vé KH mới & 79k/vé KH Bạc -T6,T7,CN</span>
                        </label>

                        <label class="method zalopay">
                            <input type="radio" name="radio" onclick="zaloPay()">
                            <span class="img zalopay-img"></span>
                            <span class="method-name">ZaloPay 1k/1 vé, 59k/2 vé cho KH mới & 79k/vé x2 cho KH cũ (từ T5-CN)</span>
                        </label>

                        <label class="method airpay">
                            <input type="radio" name="radio" onclick="airPay()">
                            <span class="img airpay-img"></span>
                            <span class="method-name">Ví điện tử AirPay</span>
                        </label>

                    </div>
                </div>
                <div class="iaccept">
                    <input type="checkbox" id="iaccept">
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
                    <div class="extra atm-card">
                        <div class="extra-left">ATM Card (Thẻ nội địa)</div>
                        <div class="extra-right">120.000,00 ₫</div>
                    </div>
                    <div class="extra international-card">
                            <div class="extra-left">Thẻ quốc tế (Visa, Master, Amex, JCB)</div>
                            <div class="extra-right">120.000,00 ₫</div>
                        </div>
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
                <div class="btn-payment" onclick="pay()"></div>
            </div>
            <div class="format-bg-bottom"></div>
        </div>

    </div>
    
    <script>
        // Đồng hồ đếm ngược

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
        // End of đồng hồ đếm ngược

        var disable = 0 ; 

        function cgvPoint(){
            if( disable == 0 ){
                document.getElementsByClassName('under-cgv-point')[0].style.display = "block";
                document.getElementsByClassName('under_discount-code')[0].style.display = "none";
                document.getElementsByClassName('under-voucher')[0].style.display = "none";
                document.getElementsByClassName('under-partner')[0].style.display = "none";
                document.getElementsByClassName('under-promotion-code')[0].style.display = "none";
            }
        }
        function discountCode(){
            if( disable == 0 ){
                document.getElementsByClassName('under-cgv-point')[0].style.display = "none";
                document.getElementsByClassName('under_discount-code')[0].style.display = "block";
                document.getElementsByClassName('under-voucher')[0].style.display = "none";
                document.getElementsByClassName('under-partner')[0].style.display = "none";
                document.getElementsByClassName('under-promotion-code')[0].style.display = "none";
            }
        }
        function voucher(){
            if( disable == 0 ){
                document.getElementsByClassName('under-cgv-point')[0].style.display = "none";
                document.getElementsByClassName('under_discount-code')[0].style.display = "none";
                document.getElementsByClassName('under-voucher')[0].style.display = "block";
                document.getElementsByClassName('under-partner')[0].style.display = "none";
                document.getElementsByClassName('under-promotion-code')[0].style.display = "none";
            }
        }
        function partner(){
            if( disable == 0 ){
                document.getElementsByClassName('under-cgv-point')[0].style.display = "none";
                document.getElementsByClassName('under_discount-code')[0].style.display = "none";
                document.getElementsByClassName('under-voucher')[0].style.display = "none";
                document.getElementsByClassName('under-partner')[0].style.display = "block";
                document.getElementsByClassName('under-promotion-code')[0].style.display = "none";
            }
        }
        function promotionCode(){
            if( disable == 0 ){
                document.getElementsByClassName('under-cgv-point')[0].style.display = "none";
                document.getElementsByClassName('under_discount-code')[0].style.display = "none";
                document.getElementsByClassName('under-voucher')[0].style.display = "none";
                document.getElementsByClassName('under-partner')[0].style.display = "none";
                document.getElementsByClassName('under-promotion-code')[0].style.display = "block";
            }
        }
        function atmCard(){
            document.getElementsByClassName('atm-card')[1].style.display = "block";
            document.getElementsByClassName('international-card')[1].style.display = "none";
            
            disable = 1 ;
            document.getElementsByClassName('step1-container')[0].style.opacity = "0.5";
        }
        function internationalCard(){
            document.getElementsByClassName('atm-card')[1].style.display = "none";
            document.getElementsByClassName('international-card')[1].style.display = "block";
        
            disable = 1 ;
            document.getElementsByClassName('step1-container')[0].style.opacity = "0.5";
        }
        function momo(){
            document.getElementsByClassName('atm-card')[1].style.display = "none";
            document.getElementsByClassName('international-card')[1].style.display = "none";
        
            disable = 1 ;
            document.getElementsByClassName('step1-container')[0].style.opacity = "0.5";
        }
        function zaloPay(){
            document.getElementsByClassName('atm-card')[1].style.display = "none";
            document.getElementsByClassName('international-card')[1].style.display = "none";
        
            disable = 1 ;
            document.getElementsByClassName('step1-container')[0].style.opacity = "0.5";
        }
        function airPay(){
            document.getElementsByClassName('atm-card')[1].style.display = "none";
            document.getElementsByClassName('international-card')[1].style.display = "none";
        
            disable = 1 ;
            document.getElementsByClassName('step1-container')[0].style.opacity = "0.5";
        }
        function pay(){
            if( document.getElementById('iaccept').checked ) alert('Đặt vé thành công');
            else alert('Hãy tick đồng ý với điều khoản của chúng tôi');
        }
    </script>
@endsection