var sum=0, t=0  ;

function selectedSeat(s){
    s.style.backgroundColor = "#b11500";
    s.style.color = "#fff";
    s.borderColor = "#b11500";
    sum += 85000;
    t = sum;
    t /= 1000; 
    document.getElementById('film-cost').textContent = t + ".000,00 ₫" ;
    document.getElementById('sum-cost').textContent = t + ".000,00 ₫" ;
    document.getElementById('seat-info').style.display = "block";
    document.getElementById('seat-detail').style.display = "block";
    if( document.getElementById('seat-detail').textContent == '' )
        document.getElementById('seat-detail').textContent += s.textContent;
    else document.getElementById('seat-detail').textContent += ', ' + s.textContent;
}