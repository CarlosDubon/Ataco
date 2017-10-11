function iniciar(){
    medio = document.getElementById('medio');
    play = document.getElementsByClassName('play-buttom')[0];
    play.addEventListener('click',reproducir,false);
}

function reproducir(){
    if(!medio.paused && !medio.ended){
        medio.pause();
        $('#medio').removeClass('play-buttom');
    }else{
        medio.play();   
    }
    
}
window.addEventListener('load',iniciar,false);