@extends('main')

@section('content')

<?php 
    $data = App\Film::all()->toArray();
?>

    <ul class="phim-dang-chieu">
        <?php foreach( $data as $film ){ ?>
            <li>
                <div class="banner">
                    <img src="<?php echo $film['image']; ?>" alt="">
                </div>
                <div class="detail">
                    <div class="name"><b><?php echo $film['name']; ?></b></div>
                    <div class="genre"><b>Thể loại: </b><?php echo $film['type']; ?></div>
                    <div class="running-time"><b>Thời lượng: </b><?php echo $film['leng']; ?></div>
                    <div class="release-date"><b>Khởi chiếu: </b><?php echo $film['release_date']; ?></div>
                </div>
                <div class="button">
                    &emsp;&emsp;<span class="btn-like" onclick="like()">Like</span>&emsp;&emsp;&emsp;
                    <span class="btn-buy" onclick="buy()">Mua vé</span>
                </div>
            </li>
        <?php } ?>
    </ul>
    

@endsection
   