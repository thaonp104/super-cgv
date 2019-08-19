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
                <a href="/login">
                    <button type="button" class="login">
                        <strong>ĐĂNG NHẬP</strong>
                    </button>
                </a>
            </li>
            <li>
                <a href="/create">
                    <button type="button" class="register">
                        <strong>ĐĂNG KÝ</strong>
                    </button>
                </a>
            </li>
        </ul>
        @yield('form')

    </div>
</div>
@endsection
