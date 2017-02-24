document.getElementById('prevphoto').onclick = function () {
    Photos.goprev();
}
document.getElementById('nextphoto').onclick = function () {
    Photos.gonext();
}

var Photos = {
    ph: [
        './content/img/image_01.jpg', 
        './content/img/image_02.jpg', 
        './content/img/image_03.jpg', 
        './content/img/image_04.jpg', 
        './content/img/image_05.jpg', 
        './content/img/image_06.jpg', 
        './content/img/image_07.jpg', 
        './content/img/image_08.jpg'
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
    }
}
rotateImg(Photos.current*180, Photos.ph[Photos.current]);

function rotateImg(angle, src){
    var cp = document.getElementById('cphoto');
    cp.style.transition = 'transform 0.8s linear, background 0.8s linear';
    cp.style.background = 'url("'+src+'") center no-repeat';
    cp.style.backgroundSize = 'contain';
    cp.style.transform = 'rotateY('+angle+'deg)';
}
