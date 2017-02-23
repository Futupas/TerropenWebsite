var IsRed = true;
var Timeout = setTimeout(SkewLogo, 10000);
function SkewLogo () {
    clearTimeout(Timeout);
    if (IsRed) {
        document.getElementById('logodiv').classList.add('name');
        document.getElementById('logodiv').classList.remove('nick');
        setTimeout(function(){ 
            document.querySelector('#logodiv > span').innerHTML = 'Павло Новак';
        }, 500);
    } else {
        document.getElementById('logodiv').classList.add('nick');
        document.getElementById('logodiv').classList.remove('name');
        setTimeout(function(){ 
            document.querySelector('#logodiv > span').innerHTML = 'TERROPEN';
        }, 500);
    }
    IsRed = !IsRed;
    Timeout = setTimeout(SkewLogo, 10000);
}
document.getElementById('logodiv').onclick = SkewLogo;


document.getElementById('prevphoto').onmouseover = function () {
    document.getElementById('cphoto').style.animation = 'rotatePrev 0.7s ease-in';
    setTimeout(function () { document.getElementById('cphoto').style.animation = 'none'; }, 700);
}
document.getElementById('nextphoto').onmouseover = function () {
    document.getElementById('cphoto').style.animation = 'rotateNext 0.7s ease-in';
    setTimeout(function () { document.getElementById('cphoto').style.animation = 'none'; }, 700);
}
