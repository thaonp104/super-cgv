@extends('MyAccount.menuMyAccount')
@section('css2')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/MyAccount/myAccount.css')}}">
@endsection
@section('right')
<div class="account-infor">
    <div class="account-content">
        <div class="dashboard">
            <div class="page-title">
                <h2>Thông tin chung</h2>
            </div>
            <div class="format-profile-cgv">
                <div class="my-profile-cgv">
                    <div class="image-profile-cgv">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="insert-image-profile-cgv">
                                <label id="fileToUpload" for="fileToUpload">
                                    <img src="{{URL::asset('images/file_45273.jpg')}}" width="120" height="120" alt="Avatar Profile">
                                </label>
                            </div>
                            <div class="input-box">
                                <input type="file" name="avatar" title="Avatar" id="avatar" class="input-text">
                            </div>
                            <div class="button-change-image-profile">
                                <button type="button" id="btnchange">
                                    <span><span>Thay đổi</span></span>
                                </button>
                            </div>
                            <div class="button-change-image-profile">
                                <button type="submit" id="btnsubmit">
                                    <span><span>Gửi đi</span></span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="barcode-my-cgv">
                        <div class="show-barcode-my-cgv">
                            <strong>Thẻ thành viên</strong>
                        </div>
                        <div class="show-barcode-my-cgv">
                            <img src="{{URL::asset('images/image.png')}}" alt="Barcode.">
                        </div>
                    </div>
                </div>
                <div class="welcome-msg">
                    <p class="hello"><strong>Xin chào <span class="upcase">{{auth()->user()->name}}</span>,</strong></p>
                    <p>Với trang này, bạn sẽ quản lý được tất cả thông tin tài khoản của mình.</p>
                </div>
                <div class="box-account cgv-info">
                    <div class="cgv-status-member">
                        <div class="cgv-tier">
                            <label>Cấp Độ Thẻ</label>
                            <span class="member-icon"></span>
                        </div>
                        <div class="cgv-point total-spending">
                            <div class="format-acc-point">
                                <label>Tổng Chi Tiêu</label>
                                <span class="acc-show-point">
{{--					                        878.000 đ--}}
                                    <?php
                                        $price =0;
                                        foreach($bills as $bill){
                                            foreach($tickets as $ticket){
                                                if($ticket->bill_id == $bill->id){
                                                    $price += $ticket->price;
                                                }
                                            }
                                        }
                                        echo $price;
                                    ?>

                                </span>
                            </div>
                        </div>
                        <div class="cgv-point">
                            <div class="format-acc-point">
                                <label>Điểm CGV</label>
                                <span class="acc-show-point">
                                    <?php
                                        $point = $price /20000;
                                        $p = $point % ($point +1);
                                        echo $p;
                                    ?>
                                    P
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="cgv-gift-card cgv-info-detail">
                        <label>Thẻ quà tặng</label>
                        <div class="format-acc">
                            <span class="acc-show-point">
                                0 đ
                            </span>
                            <a href="#">
                                <span class="icon-acc-add">Xem</span>
                            </a>
                        </div>
                    </div>
                    <div class="cgv-voucher cgv-info-detail cgv-coupons">
                        <label>Voucher</label>
                        <div class="format-acc">
                            <span class="acc-show-point">
                                0
                            </span>
                            <a href="#">
                                <span class="icon-acc-add">Xem</span>
                            </a>
                        </div>
                    </div>
                    <div class="cgv-coupon cgv-info-detail cgv-coupons">
                        <label>Coupon</label>
                        <div class="format-acc">
                            <span class="acc-show-point">
                                9
                            </span>
                            <a href="#">
                                <span class="icon-acc-add">Xem</span>
                            </a>
                        </div>
                    </div>
                    <div class="cgv-info-member-card cgv-point-last cgv-info-detail">
                        <label>Thẻ Thành Viên</label>
                        <div class="format-acc">
                            <span class="acc-show-point">
                                3
                            </span>
                            <a href="#">
                                <span class="icon-acc-add">Xem</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-account box-info">
                    <div class="box-head">
                        <h2>Thông tin tài khoản</h2>
                    </div>
                    <div class="box">
                        <div class="box-title">
                            <h3 class="title-my-cgv">Liên hệ</h3>
                            <a href="#">Thay đổi</a>
                        </div>
                        <div class="box-content box-content-my-cgv col2-set">
                            <span>
                                Tên : {{auth()->user()->name}}
                            </span>
                            <span>Email : {{auth()->user()->email}}</span>
                            <span>Tên đăng nhập : {{auth()->user()->email}}</span>
                            <span>Điện thoại : {{auth()->user()->phone}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
@endsection
