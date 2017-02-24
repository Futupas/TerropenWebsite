// Device.js
// (c) 2014 Matthew Hudson

var Device = {
    find: function (needle) {
        return window.navigator.userAgent.toLowerCase().indexOf(needle) !== -1;
    },
    IsMobile: function () {
        return (!Device.find('windows') && Device.find('android') && Device.find('mobile')) || 
            (!Device.find('windows') && Device.find('iphone')) || 
            (Device.find('ipod')) || 
            (Device.find('windows') && Device.find('phone')) || 
            ((Device.find('blackberry') || Device.find('bb10') || Device.find('rim')) && !Device.find('tablet')) || 
            (((Device.find('(mobile;') || Device.find('(tablet;')) && Device.find('; rv:')) && Device.find('mobile')) || 
            (Device.find('meego'));
    }
}