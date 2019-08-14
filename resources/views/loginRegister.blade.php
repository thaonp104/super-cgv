@extends('main2')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/loginRegister.css')}}">
    @yield('css_child')
@endsection

@section('content')
<div class="row content">
    <div class="content_width">
        <ul class="select">
            <li>
                <button type="button" class="login">
                    <strong>ĐĂNG NHẬP</strong>
                </button>
            </li>
            <li>
                <button type="button" class="register">
                    <strong>ĐĂNG KÝ</strong>
                </button>
            </li>
        </ul>
        @yield('form')

    </div>
</div>
@endsection
