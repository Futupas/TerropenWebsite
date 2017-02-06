var IsRed = true;
var Timeout = setTimeout(SkewLogo, 10000);
function SkewLogo () {
    clearTimeout(Timeout);
    if (IsRed) {
        logodiv1.classList.toggle('close');
        logodiv1.classList.toggle('open');
        setTimeout(function(){ logodiv2.classList.toggle('open'); logodiv2.classList.toggle('close'); }, 1000);
    } else {
        logodiv2.classList.toggle('open');
        logodiv2.classList.toggle('close');
        setTimeout(function(){ logodiv1.classList.toggle('close'); logodiv1.classList.toggle('open'); }, 1000);
    }
    IsRed = !IsRed;
    Timeout = setTimeout(SkewLogo, 10000);
}

logodiv1.onclick = SkewLogo;
logodiv2.onclick = SkewLogo;
