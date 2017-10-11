function iniciar(){
    medio = document.getElementById('medio');
    play = document.getElementsByClassName('play-buttom')[0];
    play.addEventListener('click',reproducir,false);
}

function reproducir(){
    //23066026 23096179
    if(!medio.paused && !medio.ended){
        medio.pause();
        $('i[name="pause"]').after('<i name="play" class="fa fa-play" aria-hidden="true"></i><span name="play">Reproducir</span>');
         $('i[name="pause"]').remove();
        $('span[name="pause"]').remove();
        
    }else{
        medio.play();
        $('i[name="play"]').after('<i name="pause" class="fa fa-pause" aria-hidden="true"></i><span name="pause">Pausa</span>');
         $('i[name="play"]').remove();
        $('span[name="play"]').remove();
    }
    
}
window.addEventListener('load',iniciar,false);