@extends('loginRegister')
@section('css_child')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/create.css')}}">
@endsection
@section('form')
    <form action="/saveAccount" method="POST">
        @csrf
        <div class="obligatory">
            <div class="obligatory_left">
                <div class="name item_form">
                    <label class="item">Tên<span class="star">*</span></label>
                    <br>
                    <input type="text" name="first" class="first" placeholder="Tên" required>
                    <input type="text" name="last-name" class="last-name" placeholder="Họ" required >
                </div>
                <div class="birth item_form">
                    <label class="item">Ngày sinh<span class="star">*</span></label>
                    <br>
                    <select name="date" class="date" required>
                        <option value=null>Ngày</option>
                        @for($i= 1; $i<=31; $i++)
                            <option value=$i>{{$i}}</option>
                        @endfor
                    </select>
                    <select name="month" class="month" required>
                        <option value=null>Tháng</option>
                        @for($i= 1; $i<=12; $i++)
                            <option value=$i>{{$i}}</option>
                        @endfor
                    </select>
                    <select name="year" class="year" required>
                        <option value=null>Năm</option>
                        @for($i= 2007; $i>=1959; $i--)
                            <option value=$i>{{$i}}</option>
                        @endfor
                    </select>
                </div>
                <div class="email item_form">
                    <label class="item">Địa chỉ email (Tên đăng nhập)<span class="star">*</span></label>
                    <br>
                    <input type="text" name="email" class="email" required>
                </div>
                <div class="password item_form">
                    <label class="item">Mật khẩu<span class="star">*</span></label>
                    <br>
                    <input type="password" name="password" class="password" required>
                </div>
                <div class="district item_form">
                    <label class="item">Tỉnh/Tp<span class="star">*</span></label>
                    <br>
                    <select class="district" name="district" required>
                        <option value="">Vui lòng chọn...</option>
                        <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                        <option value="Cần Thơ">Cần Thơ</option>
                        <option value="Đồng Nai">Đồng Nai</option>
                        <option value="Hải Phòng">Hải Phòng</option>
                        <option value="Quảng Ninh">Quảng Ninh</option>
                        <option value="Bà Rịa-Vũng Tàu">Bà Rịa-Vũng Tàu</option>
                        <option value="Bình Định">Bình Định</option>
                        <option value="Bình Dương">Bình Dương</option>
                        <option value="Đắk Lắk">Đắk Lắk</option>
                        <option value="Trà Vinh">Trà Vinh</option>
                        <option value="Yên Bái">Yên Bái</option>
                        <option value="Vĩnh Long">Vĩnh Long</option>
                        <option value="Kiên Giang">Kiên Giang</option>
                        <option value="Hậu Giang">Hậu Giang</option>
                        <option value="Hà Tĩnh">Hà Tĩnh</option>
                        <option value="Phú Yên">Phú Yên</option>
                        <option value="Bình Phước">Bình Phước</option>
                        <option value="Bình Thuận">Bình Thuận</option>
                        <option value="Cà Mau">Cà Mau</option>
                        <option value="65" selected="">Khác... </option>
                    </select>
                </div>
                <div class="address item_form">
                    <label class="item">Địa chỉ<span class="star">*</span></label>
                    <br>
                    <input type="text" name="address" class="address" value="N/A" required>
                </div>
            </div>
            <div class="obligatory_right item_form">
                <div class="sex">
                    <label class="item">Giới tính<span class="star">*</span></label>
                    <br>
                    <input type="radio" value="man" class="man" name="sex" checked> Nam
                    <input type="radio" value="woman" class="woman" name="sex"> Nữ
                </div>
                <div class="phone item_form">
                    <label class="item phone-title">Số điện thoại di động<span class="star">*</span></label>
                    <br>
                    <input type="text" name="phone" class="phone" required>
                </div>
                <div class="username item_form">
                    <label class="item">Tên Đăng Nhập (Bạn có thể đăng nhập bằng tên này)<span class="star">*</span></label>
                    <br>
                    <input type="text" name="username" class="username" placeholder="Use letter & number, min. 6 characters" required>
                </div>
                <div class="re-password item_form">
                    <label class="item">Nhập lại mật khẩu<span class="star">*</span></label>
                    <br>
                    <input type="password" name="re-password" class="re-password" required>
                </div>
                <div class="commune item_form">
                    <label class="item">Quận/Huyện<span class="star">*</span></label>
                    <br>
                    <select name="commune" class="commune" required>
                        <option  value="">Vui lòng chọn...</option>
                        <option  value="Huyện Bác Ái">Huyện Bác Ái</option>
                        <option  value="Huyện Ninh Hải">Huyện Ninh Hải</option>
                        <option  value="Huyện Ninh Phước">Huyện Ninh Phước</option>
                        <option  value="Huyện Ninh Sơn">Huyện Ninh Sơn</option>
                        <option  value="Huyện Thuận Bắc">Huyện Thuận Bắc</option>
                        <option  value="Huyện Thuận Nam">Huyện Thuận Nam</option>
                        <option  value="Thành Phố Phan Rang-Tháp Chàm">Thành Phố Phan Rang-Tháp Chàm</option>
                    </select>
                </div>
                <div class="re-text item_form">
                    <label class="item">Vui lòng nhập kí tự bên dưới<span class="star">*</span></label>
                    <br>
                    <input type="text" name="re-text" class="re-text" required>
                    <div class="captcha-image">
                        <img class="captcha-reload" src="https://www.cgv.vn/skin/frontend/base/default/images/reload.png" >
                        <img class="captcha-img" src="{{URL::asset('images/capcha.png')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="optional">
            <h3 class="optional-title">Thông tin tùy chọn</h3>
            <div class="optional_left">
                <div class="people-id item_form">
                    <label class="item">CMND hoặc hộ chiếu<span class="star">*</span></label>
                    <br>
                    <input type="text" name="people-id" class="people-id">
                </div>
                <div class="favorite-theater item_form">
                    <label class="item title-favorite-theater">Rạp yêu thích<span class="star">*</span></label>
                    <br>
                    <select class="favorite-theater theater-1" name="favorite-theater" >
                        <option value="">Vui lòng chọn...</option>
                        @foreach($cinemas as $cinema)
                            <option value="{{$cinema->id}}">{{$cinema->name}}</option>
                        @endforeach
                    </select>
                    <select class="favorite-theater" name="favorite-theater" >
                        <option value="">Vui lòng chọn...</option>
                        @foreach($cinemas as $cinema)
                            <option value="{{$cinema->id}}">{{$cinema->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="optional_right">
                <div class="favorite-kind item_form">
                    <label class="item title-favorite-kind">Thể loại phim yêu thích<span class="star">*</span></label>
                    <br>
                    <select class="favorite-kind theater-1" name="favorite-kind" >
                        <option value="">Vui lòng chọn...</option>
                        <option value="06">ACTION</option>
                        <option value="15">ADVENTURE</option>
                        <option value="17">ANIMATION</option>
                        <option value="05">COMEDY</option>
                        <option value="03">CRIME</option>
                        <option value="07">DRAMA</option>
                        <option value="14">FAMILY</option>
                        <option value="13">FANTASY</option>
                        <option value="12">HISTORY</option>
                        <option value="16">HORROR </option>
                        <option value="09">MUSIC</option>
                        <option value="02">MYSTERY</option>
                        <option value="99">Others</option>
                        <option value="04">ROMANCE</option>
                        <option value="10">SCIFI</option>
                        <option value="01">SPORT</option>
                        <option value="11">SPY</option>
                        <option value="08">THRILLER </option>
                    </select>
                    <select class="favorite-kind" name="favorite-kind" >
                        <option value="">Vui lòng chọn...</option>
                        <option value="06">ACTION</option>
                        <option value="15">ADVENTURE</option>
                        <option value="17">ANIMATION</option>
                        <option value="05">COMEDY</option>
                        <option value="03">CRIME</option>
                        <option value="07">DRAMA</option>
                        <option value="14">FAMILY</option>
                        <option value="13">FANTASY</option>
                        <option value="12">HISTORY</option>
                        <option value="16">HORROR </option>
                        <option value="09">MUSIC</option>
                        <option value="02">MYSTERY</option>
                        <option value="99">Others</option>
                        <option value="04">ROMANCE</option>
                        <option value="10">SCIFI</option>
                        <option value="01">SPORT</option>
                        <option value="11">SPY</option>
                        <option value="08">THRILLER </option>
                    </select>
                </div>
            </div>
            <div class="agree-terms">
                <input type="checkbox" class="terms" name="terms" value="agree" style="height: 10px" checked>
                <span class="agree">
                Tôi đã đọc, hiểu và đồng ý với các
                <a href="#">điều khoản</a>
            </span>
            </div>
        </div>
        <div class="sub">
            <div class="buttons-set login-button-submit">
                <button type="submit" class="button" title="Đăng nhập" name="send" id="send2"><span><span><strong>Đăng Ký</strong></span></span></button>
            </div>
        </div>
    </form>
    <div class="banner-bottom" id="banner-bottom">
        <div class="sticky-banner" style="display: block;">
            <div class="banner-click">
                <a href="#" target="_blank">
                    <img alt="" src="{{URL::asset('images/nha-qua-di-980x120.jpg')}}"></a>
                <button onclick="hide_banner()" class="close-bottom-banner" style="border: none">X</button>
            </div>
        </div>
    </div>
    <script>
        function hide_banner() {
            document.getElementsByClassName('banner-bottom')[0].style.display= 'none';
        }
    </script>
@endsection
