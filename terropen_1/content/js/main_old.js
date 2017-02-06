var IsRed = true;
var Timeout = setTimeout();
function SkewLogo () {
    
}

setInterval(function(){
    if (IsRed) {
        maindiv_red.classList.toggle('close');
        setTimeout(function(){ maindiv_blue.classList.toggle('open'); }, 1000);
    } else {
        maindiv_blue.classList.toggle('open');
        setTimeout(function(){ maindiv_red.classList.toggle('close'); }, 1000);
    }
    IsRed = !IsRed;
}, 10000);

maindiv_red.onclick = function(){
    if (IsRed) {
        maindiv_red.classList.toggle('close');
        setTimeout(function(){ maindiv_blue.classList.toggle('open'); }, 1000);
    } else {
        maindiv_blue.classList.toggle('open');
        setTimeout(function(){ maindiv_red.classList.toggle('close'); }, 1000);
    }
    IsRed = !IsRed;
}
maindiv_blue.onclick = function(){
    if (IsRed) {
        maindiv_red.classList.toggle('close');
        setTimeout(function(){ maindiv_blue.classList.toggle('open'); }, 1000);
    } else {
        maindiv_blue.classList.toggle('open');
        setTimeout(function(){ maindiv_red.classList.toggle('close'); }, 1000);
    }
    IsRed = !IsRed;
}