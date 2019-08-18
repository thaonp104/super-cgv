$(document).ready(function({

}));

// Đồng hồ đếm ngược

var m = 5; // Phút
var s = 0; // Giây

var timeout = null; // Timeout

start();

function start()
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

var disable = 0 ; 

function cgvPoint(){
    if( disable == 0 ){
        document.getElementsByClassName('under-cgv-point')[0].style.display = "block";
        document.getElementsByClassName('under_discount-code')[0].style.display = "none";
        document.getElementsByClassName('under-voucher')[0].style.display = "none";
        document.getElementsByClassName('under-partner')[0].style.display = "none";
        document.getElementsByClassName('under-promotion-code')[0].style.display = "none";
    }
}
function discountCode(){
    if( disable == 0 ){
        document.getElementsByClassName('under-cgv-point')[0].style.display = "none";
        document.getElementsByClassName('under_discount-code')[0].style.display = "block";
        document.getElementsByClassName('under-voucher')[0].style.display = "none";
        document.getElementsByClassName('under-partner')[0].style.display = "none";
        document.getElementsByClassName('under-promotion-code')[0].style.display = "none";
    }
}
function voucher(){
    if( disable == 0 ){
        document.getElementsByClassName('under-cgv-point')[0].style.display = "none";
        document.getElementsByClassName('under_discount-code')[0].style.display = "none";
        document.getElementsByClassName('under-voucher')[0].style.display = "block";
        document.getElementsByClassName('under-partner')[0].style.display = "none";
        document.getElementsByClassName('under-promotion-code')[0].style.display = "none";
    }
}
function partner(){
    if( disable == 0 ){
        document.getElementsByClassName('under-cgv-point')[0].style.display = "none";
        document.getElementsByClassName('under_discount-code')[0].style.display = "none";
        document.getElementsByClassName('under-voucher')[0].style.display = "none";
        document.getElementsByClassName('under-partner')[0].style.display = "block";
        document.getElementsByClassName('under-promotion-code')[0].style.display = "none";
    }
}
function promotionCode(){
    if( disable == 0 ){
        document.getElementsByClassName('under-cgv-point')[0].style.display = "none";
        document.getElementsByClassName('under_discount-code')[0].style.display = "none";
        document.getElementsByClassName('under-voucher')[0].style.display = "none";
        document.getElementsByClassName('under-partner')[0].style.display = "none";
        document.getElementsByClassName('under-promotion-code')[0].style.display = "block";
    }
}
function atmCard(){
    document.getElementsByClassName('atm-card')[1].style.display = "block";
    document.getElementsByClassName('international-card')[1].style.display = "none";
    
    disable = 1 ;
    document.getElementsByClassName('step1-container')[0].style.opacity = "0.5";
}
function internationalCard(){
    document.getElementsByClassName('atm-card')[1].style.display = "none";
    document.getElementsByClassName('international-card')[1].style.display = "block";

    disable = 1 ;
    document.getElementsByClassName('step1-container')[0].style.opacity = "0.5";
}
function momo(){
    document.getElementsByClassName('atm-card')[1].style.display = "none";
    document.getElementsByClassName('international-card')[1].style.display = "none";

    disable = 1 ;
    document.getElementsByClassName('step1-container')[0].style.opacity = "0.5";
}
function zaloPay(){
    document.getElementsByClassName('atm-card')[1].style.display = "none";
    document.getElementsByClassName('international-card')[1].style.display = "none";

    disable = 1 ;
    document.getElementsByClassName('step1-container')[0].style.opacity = "0.5";
}
function airPay(){
    document.getElementsByClassName('atm-card')[1].style.display = "none";
    document.getElementsByClassName('international-card')[1].style.display = "none";

    disable = 1 ;
    document.getElementsByClassName('step1-container')[0].style.opacity = "0.5";
}
function pay(){
    if( document.getElementById('iaccept').checked ) alert('Đặt vé thành công');
    else alert('Hãy tick đồng ý với điều khoản của chúng tôi');
}