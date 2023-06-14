var i=0;
var images=[];
var time=2500;


images[0]='../PHOTO/tło/slider1.jpeg';
images[1]='../PHOTO/tło/slider2.jpg';
images[2]='../PHOTO/tło/slider3.png';
images[3]='../PHOTO/tło/slider4.jpg';

function changeImg(){
    document.slide.src = images[i];

    if(i<images.length - 1){
        i++;
    }else{
        i=0;
    }
    setTimeout("changeImg()",time);
}
window.onload = changeImg;
