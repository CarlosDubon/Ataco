$(document).ready(main);

function main(){
    
    $('#small').hover(function(){
       $(this).css('transform','scale(0.8)'); 
    },function(){
        $(this).css('transform','scale(1)');
    });
    
    $('#big').hover(function(){
       $(this).css('transform','scale(1.4)'); 
    },function(){
        $(this).css('transform','scale(1)');
    });
    
    $('#small').click(function(){
       $('body').css('font-size','12px'); 
    });
    
    $('#normal').click(function(){
       $('body').css('font-size','16px'); 
    });
    
    $('#big').click(function(){
       $('body').css('font-size','20px'); 
    });
    
    
}