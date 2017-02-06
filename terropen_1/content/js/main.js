var IsRed = true;
var Timeout = setTimeout(SkewLogo, 10000);
function SkewLogo () {
    clearTimeout(Timeout);
    if (IsRed) {
        maindiv_red.classList.toggle('close');
        setTimeout(function(){ maindiv_blue.classList.toggle('open'); }, 1000);
    } else {
        maindiv_blue.classList.toggle('open');
        setTimeout(function(){ maindiv_red.classList.toggle('close'); }, 1000);
    }
    IsRed = !IsRed;
    Timeout = setTimeout(SkewLogo, 10000);
}

maindiv_red.onclick = SkewLogo;
maindiv_blue.onclick = SkewLogo;
