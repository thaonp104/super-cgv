$(document).ready(function(){
    // Đồng hồ đếm ngược

    var m = 5; // Phút
    var s = 0; // Giây

    var timeout = null; // Timeout

    window.start = function()
    {
        if (s === -1){
            m -= 1;
            s = 59;
        }
        if (m === -1){
            clearTimeout(timeout);
            alert('Đã quá thời gian đặt');
            return false;
        }

        /* HIỂN THỊ ĐỒNG HỒ*/
        document.getElementById('m').textContent = m.toString();
        document.getElementById('s').textContent = s.toString();

        /* GIẢM PHÚT XUỐNG 1 GIÂY VÀ GỌI LẠI SAU 1 GIÂY */
        timeout = setTimeout(function(){
            s--;
            start();
        }, 1000);
    }
    // End of đồng hồ đếm ngược
    
    start();
    var disable = 0 ; 

    window.cgvPoint = function(){
        if( disable == 0 ){
            document.getElementsByClassName('under-cgv-point')[0].style.display = "block";
            document.getElementsByClassName('under_discount-code')[0].style.display = "none";
            document.getElementsByClassName('under-voucher')[0].style.display = "none";
            document.getElementsByClassName('under-partner')[0].style.display = "none";
            document.getElementsByClassName('under-promotion-code')[0].style.display = "none";
        }
    }
    window.discountCode = function(){
        if( disable == 0 ){
            document.getElementsByClassName('under-cgv-point')[0].style.display = "none";
            document.getElementsByClassName('under_discount-code')[0].style.display = "block";
            document.getElementsByClassName('under-voucher')[0].style.display = "none";
            document.getElementsByClassName('under-partner')[0].style.display = "none";
            document.getElementsByClassName('under-promotion-code')[0].style.display = "none";
        }
    }
    window.voucher = function(){
        if( disable == 0 ){
            document.getElementsByClassName('under-cgv-point')[0].style.display = "none";
            document.getElementsByClassName('under_discount-code')[0].style.display = "none";
            document.getElementsByClassName('under-voucher')[0].style.display = "block";
            document.getElementsByClassName('under-partner')[0].style.display = "none";
            document.getElementsByClassName('under-promotion-code')[0].style.display = "none";
        }
    }
    window.partner = function(){
        if( disable == 0 ){
            document.getElementsByClassName('under-cgv-point')[0].style.display = "none";
            document.getElementsByClassName('under_discount-code')[0].style.display = "none";
            document.getElementsByClassName('under-voucher')[0].style.display = "none";
            document.getElementsByClassName('under-partner')[0].style.display = "block";
            document.getElementsByClassName('under-promotion-code')[0].style.display = "none";
        }
    }
    window.promotionCode = function(){
        if( disable == 0 ){
            document.getElementsByClassName('under-cgv-point')[0].style.display = "none";
            document.getElementsByClassName('under_discount-code')[0].style.display = "none";
            document.getElementsByClassName('under-voucher')[0].style.display = "none";
            document.getElementsByClassName('under-partner')[0].style.display = "none";
            document.getElementsByClassName('under-promotion-code')[0].style.display = "block";
        }
    }
    window.atmCard = function(){
        document.getElementsByClassName('atm-card')[1].style.display = "block";
        document.getElementsByClassName('international-card')[1].style.display = "none";
        
        disable = 1 ;
        document.getElementsByClassName('step1-container')[0].style.opacity = "0.5";
    }
    window.internationalCard = function(){
        document.getElementsByClassName('atm-card')[1].style.display = "none";
        document.getElementsByClassName('international-card')[1].style.display = "block";

        disable = 1 ;
        document.getElementsByClassName('step1-container')[0].style.opacity = "0.5";
    }
    window.momo = function(){
        document.getElementsByClassName('atm-card')[1].style.display = "none";
        document.getElementsByClassName('international-card')[1].style.display = "none";

        disable = 1 ;
        document.getElementsByClassName('step1-container')[0].style.opacity = "0.5";
    }
    window.zaloPay = function(){
        document.getElementsByClassName('atm-card')[1].style.display = "none";
        document.getElementsByClassName('international-card')[1].style.display = "none";

        disable = 1 ;
        document.getElementsByClassName('step1-container')[0].style.opacity = "0.5";
    }
    window.airPay = function(){
        document.getElementsByClassName('atm-card')[1].style.display = "none";
        document.getElementsByClassName('international-card')[1].style.display = "none";

        disable = 1 ;
        document.getElementsByClassName('step1-container')[0].style.opacity = "0.5";
    }
    window.pay = function(){
        if( document.getElementById('iaccept').checked && disable == 1 ) alert('Đặt vé thành công');
        else 
            if( disable == 0 ) alert('Hãy chọn hình thúc thanh toán');
            else alert('Hãy tick đồng ý với điều khoản của chúng tôi');
    }
});

