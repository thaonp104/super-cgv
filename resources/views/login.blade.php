@extends('loginRegister')
@section('css_child')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/login.css')}}">
@endsection
@section('form')
    <div class="content_login">
        <p class="note">Vui lòng nhập tên người dùng (email) và mật khẩu của bạn...</p>
        <form action="/login_result" method="POST">
            @csrf
            <div  class="form_login">
                <div class="input-box">
                    <input type="text" autocapitalize="off" autocorrect="off"
                           spellcheck="false" name="email" value="" id="email"
                           class="input-text input_email" title="Địa chỉ email" required>
                    <div class="fill" id="advice-required-entry-email">Phải nhập thông tin.</div>
                </div>
                <div class="input-box">
                    <input type="password" name="password"
                           class="input-text input_pw"
                           id="pass" title="Mật khẩu" required>
                    <div class="fill" id="advice-required-entry-pass">Phải nhập thông tin.</div>
                    <div class="fill" id="advice-required-password-pass">Vui lòng nhập 6 kí tự trở lên,
                        không khoảng trắng và dấu cách dẫn .</div>
                </div>
                <label class="required">Vui lòng nhập ký tự bên dưới<p>*</p></label>
                <div class="input-box">
                    <input type="text" name="re-text" value="" id="email"
                           class="input-text " required>
                </div>
                <div class="captcha-img-container">
                    <div class="captcha-image" id="captcha-image-box-user_login">
                        <img class="captcha-reload" src="https://www.cgv.vn/skin/frontend/base/default/images/reload.png">
                        <img class="captcha-img" height="50" src="{{URL::asset('images/capcha.png')}}">
                    </div>
                </div>
                <br> <br>
                <a class="login-forgot-pass" href="#">Tìm lại Tài khoản hoặc số Online ID</a>
                <br>
                <a class="login-forgot-pass" href="#">Tìm lại mật khẩu</a>
            </div>
            <div class="buttons-set login-button-submit">
                <button type="submit" class="button" title="Đăng nhập" name="send" id="send2"><span><span>Đăng nhập</span></span></button>
            </div>
        </form>

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
    <script>
        function hide_banner() {
            document.getElementsByClassName('banner-bottom')[0].style.display= 'none';
        }
    </script>
@endsection
