@extends('loginRegister')
@section('css_child')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/login.css')}}">
@endsection
@section('form')
    <div class="content_login">
        <p class="note">Vui lòng nhập tên người dùng (email) và mật khẩu của bạn...</p>
        <form action="#" method="POST">
            <div  class="form_login">
                <div class="input-box">
                    <input type="text" autocapitalize="off" autocorrect="off"
                           spellcheck="false" name="login[username]" value="" id="email"
                           class="input-text input_email" title="Địa chỉ email">
                    <div class="fill" id="advice-required-entry-email">Phải nhập thông tin.</div>
                </div>
                <div class="input-box">
                    <input type="password" name="login[password]"
                           class="input-text input_pw"
                           id="pass" title="Mật khẩu">
                    <div class="fill" id="advice-required-entry-pass">Phải nhập thông tin.</div>
                    <div class="fill" id="advice-required-password-pass">Vui lòng nhập 6 kí tự trở lên,
                        không khoảng trắng và dấu cách dẫn .</div>
                </div>
                <label class="required">Vui lòng nhập ký tự bên dưới<p>*</p></label>
                <div class="input-box">
                    <input type="text" autocapitalize="off" autocorrect="off"
                           spellcheck="false" name="login[username]" value="" id="email"
                           class="input-text " title="Địa chỉ email">
                </div>
                <div class="captcha-img-container">
                    <div class="captcha-image" id="captcha-image-box-user_login">
                        <img id="captcha-reload" class="captcha-reload" src="https://www.cgv.vn/skin/frontend/base/default/images/reload.png" alt="Reload captcha" onclick="$('user_login').captcha.refresh(this)">
                        <img id="user_login" class="captcha-img" height="50" src="https://www.cgv.vn/media/captcha/base/406f7a5d8bcbc5d4844425c8b4f461a5.png">
                    </div>
                    <script type="text/javascript">//<![CDATA[
                        $('user_login').captcha = new Captcha('https://www.cgv.vn/default/captcha/refresh/', 'user_login');
                        //]]></script>
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
@endsection
