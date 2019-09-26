$(document).ready(function () {
    $('.toggle-tabs li:first-child').addClass('current');
    $('#day1').addClass('show');

    window.hide_banner = function() {
        document.getElementsByClassName('banner-bottom')[0].style.display= 'none';
    }
    window.dayClick = function(d){
        $('.current').removeClass('current');
        $('#const').addClass('current');
        d.className += ' current';
        if(d.id == '1'){
            $('.show').removeClass('show');
            $('#day1').addClass('show');
        }
        if(d.id == '2'){
            $('.show').removeClass('show');
            $('#day2').addClass('show');
        }
        if(d.id == '3'){
            $('.show').removeClass('show');
            $('#day3').addClass('show');
        }
        if(d.id == '4'){
            $('.show').removeClass('show');
            $('#day4').addClass('show');
        }
        if(d.id == '5'){
            $('.show').removeClass('show');
            $('#day5').addClass('show');
        }
        if(d.id == '6'){
            $('.show').removeClass('show');
            $('#day6').addClass('show');
        }
        if(d.id == '7'){
            $('.show').removeClass('show');
            $('#day7').addClass('show');
        }
    }
});
