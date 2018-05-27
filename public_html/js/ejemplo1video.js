/* 
Se manipula un vídeo
 */
var video1;

function playPause(){
    video1 = document.getElementById("medio");
    if(video1.paused){
        video1.play();
    } else{
        video1.pause();
    }
}

function hacerGrande(){
    video1 = document.getElementById("medio");
    video1.width = "400";
}

function hacerNormal(){
    video1 = document.getElementById("medio");
    video1.width = "320";
}

function hacerPequeno(){
    video1 = document.getElementById("medio");
    video1.width = "240";
}
