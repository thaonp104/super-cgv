
@extends('main2')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/MyAccount/menuMyAccount.css')}}">
    @yield('css2')
@endsection
@section('content')
    <div class="my-account">
        <div class="account-menu">
            <div class="block-title">
                <strong><span>Tài khoản CGV</span></strong>
            </div>
            <div class="block-content">
                <ul>
                    <li class="one"><a href="/myAccount">Thông tin chung</a></li>
                    <li class="two"><a href="#">Chi tiết tài khoản</a></li>
                    <li class="three"><a href="#">Thẻ thành viên</a></li>
                    <li class="four"><a href="#">Điểm thưởng</a></li>
                    <li class="five"><a href="#">Thẻ quà tặng</a></li>
                    <li class="six"><a href="#">Voucher</a></li>
                    <li class="seven"><a href="#">Coupon</a></li>
                    <li class="eight"><a href="/transactionHistory">Lịch sử giao dịch</a></li>
                </ul>
            </div>
        </div>
        @yield('right')
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
