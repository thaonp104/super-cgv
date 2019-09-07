@extends('MyAccount.menuMyAccount')
@section('css2')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/MyAccount/transactionHistory.css')}}">
@endsection
@section('right')
    <div class="account-infor">
        <div class="account-content">
            <div class="dashboard">
                <div class="page-title">
                    <h2>Lịch sử giao dịch</h2>
                </div>
                <div class="button_action">
                    <ul>
                        <li class="action_film item_action"><a href="#"><button>PHIM</button></a></li>
                        <li class="action_phototicket item_action"><a href="#"><button>PHOTOTICKET</button></a></li>
                        <li class="action_quay item_action"><a href="#"><button>QUẦY ONLINE</button></a></li>
                    </ul>
                </div>
                <br>
                <div class="number_shown">
                    <ul>
                        <li class="number_items">{{$bills->count()}} Sản Phẩm</li>
                        <li class="number_display">
                            <span>HIỂN THỊ: </span>
                                <select name="number" >
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="all">All</option>
                                </select>
                        </li>
                    </ul>
                </div>
                <div class="transactions">
                    @foreach($bills as $bill)
                        @foreach($tickets as $ticket)
                            @if($bill->id == $ticket->bill_id)
                                <div class="transaction">
                                    <p class="transaction_id">
                                        Mã Đặt Vé: {{$bill->id}}
                                        <span>(Trạng thái: Hoàn Tất)</span>
                                        <i class="fa fa-television"></i>
                                    </p>
                                    <div class="transaction_content">
                                        <div class="film_image">
                                            @foreach($tickets as $ticket)
                                                @if($bill->id == $ticket->bill_id)
                                                    @foreach($schedules as $schedule)
                                                        @if($schedule->id == $ticket->schedule_id)
                                                            @foreach($films as $film)
                                                                @if($film->id == $schedule->film_id)
                                                                    <img src="{{URL::asset($film->image)}}">
                                                                    @break
                                                                @endif
                                                            @endforeach
                                                            @break
                                                        @endif
                                                    @endforeach
                                                    @break
                                                @endif
                                            @endforeach

                                        </div>
                                        <div class="film_infor">
                                            <p class="film_title">
                                                @foreach($tickets as $ticket)
                                                    @if($bill->id == $ticket->bill_id)
                                                        @foreach($schedules as $schedule)
                                                            @if($schedule->id == $ticket->schedule_id)
                                                                @foreach($films as $film)
                                                                    @if($film->id == $schedule->film_id)
                                                                        <?php
                                                                        $str = $film->name;
                                                                        $str = strtoupper($str);
                                                                        echo $str;
                                                                        ?>
                                                                        @break
                                                                    @endif
                                                                @endforeach
                                                                @break
                                                            @endif
                                                        @endforeach
                                                        @break
                                                    @endif
                                                @endforeach
                                            </p>
                                            @foreach($tickets as $ticket)
                                                @if($bill->id == $ticket->bill_id)
                                                    @foreach($schedules as $schedule)
                                                        @if($schedule->id == $ticket->schedule_id)
                                                            @foreach($films as $film)
                                                                @if($film->id == $schedule->film_id)
                                                                    <p class="movie_rating {{$film->rated}}"></p>
                                                                    @break
                                                                @endif
                                                            @endforeach
                                                            @break
                                                        @endif
                                                    @endforeach
                                                    @break
                                                @endif
                                            @endforeach
                                            @foreach($tickets as $ticket)
                                                @if($bill->id == $ticket->bill_id)
                                                    @foreach($schedules as $schedule)
                                                        @if($schedule->id == $ticket->schedule_id)
                                                            @foreach($films as $film)
                                                                @if($film->id == $schedule->film_id)
                                                                    <p>{{$film->release_date}}</p>
                                                                    @break
                                                                @endif
                                                            @endforeach
                                                            @break
                                                        @endif
                                                    @endforeach
                                                    @break
                                                @endif
                                            @endforeach
                                            <p>From 22:00 PM ~ To 00:19 AM</p>
                                            @foreach($tickets as $ticket)
                                                @if($bill->id == $ticket->bill_id)
                                                    @foreach($schedules as $schedule)
                                                        @if($schedule->id == $ticket->schedule_id)
                                                            @foreach($rooms as $room)
                                                                @if($room->id == $schedule->room_id)
                                                                    @foreach($cinemas as $cinema)
                                                                        @if($cinema->id == $room->cinema_id)
                                                                            <p>{{$cinema->name}}</p>
                                                                            @break
                                                                        @endif
                                                                    @endforeach
                                                                    @break
                                                                @endif
                                                            @endforeach
                                                            @break
                                                        @endif
                                                    @endforeach
                                                    @break
                                                @endif
                                            @endforeach
                                            <p>
                                                @foreach($tickets as $ticket)
                                                    @if($bill->id == $ticket->bill_id)
                                                        @foreach($seats as $seat)
                                                            @if($seat->id == $ticket->seat_id)
                                                                {{$seat->name}}
                                                            @endif
                                                        @endforeach
                                                        @break
                                                    @endif
                                                @endforeach
                                            </p>
                                            <p class="transaction_price">
                                                <?php $price=0; ?>
                                                @foreach($tickets as $ticket)
                                                    @if($bill->id == $ticket->bill_id)
                                                        <?php  $price = $price+ $ticket->price; ?>
                                                    @endif
                                                @endforeach
                                                {{$price}}
                                            </p>
                                            <button class="transaction_detail"><a href="#">Xem</a></button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endif
                        @endforeach

                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
