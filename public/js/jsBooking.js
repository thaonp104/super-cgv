$(document).ready(function () {
    var seatClass = document.getElementsByClassName("seat");

    var seat = [], d = [] ;         //mảng seat lưu mã các ghế dưới dạng string
                    //mảng d để đánh dấu người dùng tick chọn ghế đó lần thứ mấy

    for( var i = 0 ; i < seatClass.length ; i++ ){
        if( seatClass[i].textContent != "" ){
            seat.push(seatClass[i].textContent);
            d.push(0);
        }
    }

    // console.log(seat);

    var sum=0, t=0 ;

    window.selectedSeat = function(s){           // khi người dùng tick chọn 1 ghế
        var maGhe = s.textContent;

        for( var i = 0 ; i < seat.length ; i++ ){
            if( seat[i] == maGhe ){
                if( s.className == "seat seat-sw"){
                // chọn ghế đôi (hàng cuối cùng)   
                    if(parseInt(maGhe[maGhe.length-1])%2 == 0){                 // nếu ghế đã chọn có mã chẵn
                        for( var j = 0 ; j < seatClass.length ; j++ ){
                            if( seatClass[j].textContent == seat[i+1] ){        // đã tìm đc ghế theo đôi với ghế đã chọn
                                if( d[i] == 0 ){                               // nếu ghế chưa chọn lần nào
                                    d[i]++ ;
                                    d[i+1]++ ;

                                    s.style.backgroundColor = "#b11500";
                                    s.style.color = "#fff";
                                    s.style.borderColor = "#b11500";

                                    seatClass[j].style.backgroundColor = "#b11500";
                                    seatClass[j].style.color = "#fff";
                                    seatClass[j].style.borderColor = "#b11500";

                                    sum += 280000 ;
                                }   
                                else{                                             // nếu ghế đã chọn rồi xong lại bấm lại
                                    d[i]-- ;
                                    d[i+1] -- ;

                                    s.style.backgroundColor = "#FF62B0";
                                    s.style.color = "#fff";
                                    s.style.borderColor = "#FF62B0";
                            
                                    seatClass[j].style.backgroundColor = "#FF62B0";
                                    seatClass[j].style.color = "#fff";
                                    seatClass[j].style.borderColor = "#FF62B0";
                                    
                                    sum -= 280000 ;
                                }
                            }
                        }
                    }
                    else{
                        for( var j = 0 ; j < seatClass.length ; j++ ){
                            if( seatClass[j].textContent == seat[i-1] ){        // đã tìm đc ghế theo đôi với ghế đã chọn
                                if( d[i] == 0 ){                               // nếu ghế chưa chọn lần nào
                                    d[i]++ ;
                                    d[i-1]++ ;

                                    s.style.backgroundColor = "#b11500";
                                    s.style.color = "#fff";
                                    s.style.borderColor = "#b11500";

                                    seatClass[j].style.backgroundColor = "#b11500";
                                    seatClass[j].style.color = "#fff";
                                    seatClass[j].style.borderColor = "#b11500";

                                    sum += 280000 ;
                                }   
                                else{                                             // nếu ghế đã chọn rồi xong lại bấm lại
                                    d[i]-- ;
                                    d[i-1] -- ;

                                    s.style.backgroundColor = "#FF62B0";
                                    s.style.color = "#fff";
                                    s.style.borderColor = "#FF62B0";
                            
                                    seatClass[j].style.backgroundColor = "#FF62B0";
                                    seatClass[j].style.color = "#fff";
                                    seatClass[j].style.borderColor = "#FF62B0";
                                    
                                    sum -= 280000 ;
                                }
                            }
                        }
                    }
                }
                // end of chọn ghế đôi                    
                else{
                    // chọn ghế thường hoặc ghế vip
                    if( d[i] == 0 ){
                        d[i]++ ;

                        if( s.className == "seat seat-standard" ) sum += 85000;
                        if( s.className == "seat seat-vipprime" ) sum += 120000;

                        s.style.backgroundColor = "#b11500";
                        s.style.color = "#fff";
                        s.style.borderColor = "#b11500";
                    }
                    else{
                        d[i]-- ;
                        if( s.className == "seat seat-standard" ){
                            sum -= 85000;
                            s.style.backgroundColor = "#fff";
                            s.style.borderColor = "#01c73c";
                        }
                        if( s.className == "seat seat-vipprime" ){
                            sum -= 120000;
                            s.style.backgroundColor = "#fff";
                            s.style.borderColor = "#f71708";
                        }
                        if( s.className == "seat seat-sw" ){
                            sum -= 280000;
                            s.style.backgroundColor = "#FF62B0";
                        }
                        
                        s.style.color = "#222222";
                    }
                    // end of chọn ghế thường hoặc ghế vip
                }
            }
        }

        t = sum;
        t /= 1000; 

        if( t == 0 ){
            document.getElementById('film-cost').textContent = t + ",00 ₫" ;
            document.getElementById('sum-cost').textContent = t + ",00 ₫" ;
        }
        else{
            document.getElementById('film-cost').textContent = t + ".000,00 ₫" ;
            document.getElementById('sum-cost').textContent = t + ".000,00 ₫" ;
            document.getElementById('seat-info').style.display = "block";
            document.getElementById('seat-detail').style.display = "block";
            // if( document.getElementById('seat-detail').textContent == '' )
            //     document.getElementById('seat-detail').textContent += s.textContent;
            // else document.getElementById('seat-detail').textContent += ', ' + s.textContent;
        }

        var k = 0 ;
        document.getElementById('seat-detail').textContent = "" ;

        for( var i = 0 ; i < seat.length ; i++ )
            if( d[i] == 1 ){
                document.getElementById('seat-detail').textContent += seat[i] ;
                k = i ;
                break ;
            }

        for( var i = k+1 ; i < seat.length ; i++ )
            if( d[i] == 1 )
                document.getElementById('seat-detail').textContent += ', ' + seat[i] ;
    }
});
