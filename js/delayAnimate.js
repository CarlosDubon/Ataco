$(document).ready(main);

function main(){
    $('#first').attr('style','visibility:visible').addClass('fadeInUp animated');
    
    setTimeout(function(){
        $('#second').attr('style','visibility:visible').addClass('fadeInUp animated');
    },1000);
    
    setTimeout(function(){
        $('#thirt').attr('style','visibility:visible').addClass('fadeInUp animated');
    },2000);
}