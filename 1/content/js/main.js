var IsRed = true;
var Timeout = setTimeout(SkewLogo, 10000);
function SkewLogo () {
    clearTimeout(Timeout);
    if (IsRed) {
        document.getElementById('logodiv1').classList.add('close');
        document.getElementById('logodiv1').classList.remove('open');
        setTimeout(function(){ 
            document.getElementById('logodiv2').classList.add('open'); 
            document.getElementById('logodiv2').classList.remove('close'); 
        }, 1000);
    } else {
        document.getElementById('logodiv2').classList.remove('open');
        document.getElementById('logodiv2').classList.add('close');
        setTimeout(function(){ 
            document.getElementById('logodiv1').classList.remove('close'); 
            document.getElementById('logodiv1').classList.add('open'); 
        }, 1000);
    }
    IsRed = !IsRed;
    Timeout = setTimeout(SkewLogo, 10000);
}

document.getElementById('logodiv1').onclick = SkewLogo;
document.getElementById('logodiv2').onclick = SkewLogo;

function SetSizes () {
    document.getElementById('content').style.height = document.documentElement.clientHeight + 150 + 'px';
    document.getElementById('content').style.width = document.documentElement.clientWidth + 'px';
}

