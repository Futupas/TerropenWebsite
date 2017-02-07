// Device.js
// (c) 2014 Matthew Hudson
var Device = { 
    find = function (needle) { return window.navigator.userAgent.toLowerCase().indexOf(needle) !== -1; },
    IsMobile = function () { return (!Device.find('windows') && Device.find('android') && Device.find('mobile')) || (!Device.find('windows') && Device.find('iphone')) || (Device.find('ipod')) || (Device.find('windows') && Device.find('phone')) || ((Device.find('blackberry') || Device.find('bb10') || Device.find('rim')) && !Device.find('tablet')) || (((Device.find('(mobile;') || Device.find('(tablet;')) && Device.find('; rv:')) && Device.find('mobile')) || (Device.find('meego')); }
}
if (Device.IsMobile()) {
    document.getElementById('chstyle').innerHTML = 
    '#logocen{position: absolute; top: 50px; width: 100%; left: 0px; height: 100px; perspective: 1000px; } .logodiv{width: 80%; height: 500px; line-height: 500px; font-size: 100px; } div#logodiv.nick{transform: rotateY(0deg); } div#logodiv.nick > span{transform: scaleX(1); } div#logodiv.name{transform: rotateY(180deg); } div#logodiv.name > span{transform: scaleX(-1); } #content{left: 0px; top: 600px; }';
} else {
    document.getElementById('chstyle').innerHTML = 
    '#logocen{ position: absolute; top: 50px; width: 100%; left: 0px; height: 100px; perspective: 200px; } .logodiv{ width: 400px; height: 200px; line-height: 200px; font-size: 50px; } div#logodiv.nick{ transform: rotateX(0deg); } div#logodiv.nick > span{ transform: scaleY(1); } div#logodiv.name{ transform: rotateX(180deg); } div#logodiv.name > span{ transform: scaleY(-1); } #content{ bottom: 0px; right: 0px; width: 50%; top: 300px; }';
}
