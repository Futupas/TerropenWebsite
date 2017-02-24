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

document.getElementById('prevphoto').onclick = function () {
    Photos.goprev();
}
document.getElementById('nextphoto').onclick = function () {
    Photos.gonext();
}

var Photos = {
    ph: [
        'QR1Khs', 
        'sNHIkbI', 
        'zAMCHE', 
        'zmuTHK'
    ],
    current: 0,
    goprev: function () {
        if (Photos.current > 0) {
            Photos.current--;
            rotateImg(Photos.current*180, Photos.ph[Photos.current]);
        } else {
            Photos.current = Photos.ph.length-1;
            rotateImg(Photos.current*180, Photos.ph[Photos.current])
        }
    },
    gonext: function () {
        if (Photos.current < Photos.ph.length-1) {
            Photos.current++;
            rotateImg(Photos.current*180, Photos.ph[Photos.current]);
        } else {
            Photos.current = 0;
            rotateImg(Photos.current*180, Photos.ph[Photos.current])
        }
    },
}

function rotateImg(angle, src){
    var cp = document.getElementById('cphoto');
    cp.style.transition = 'transform 0.8s linear, background 0.8s linear';
    cp.style.background = 'url("file:///C:/Users/Alex/Pictures/Wall/Computer/'+src+'.jpg") center no-repeat';
    cp.style.backgroundSize = 'contain';
    cp.style.transform = 'rotateY('+angle+'deg)';
}
