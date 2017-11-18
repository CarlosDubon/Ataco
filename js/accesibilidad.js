$(document).ready(main);

function main(){

    $('#Prevent').click(function(e){
      e.preventDefault();
    });

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

    //Cambio de color

    $('#Desactivar, #Protanopia, #Protanomaly, #Deuteranopia, #Deuteranomaly, #Tritanopia, #Tritanomaly, #Achromatopsia, #Achromatomaly').hover(function(){
       $(this).css('transform','scale(1.05)');
    },function(){
        $(this).css('transform','scale(1)');
    });

    $('#Desactivar').click(function(){
        ColorChange(-1);
    });

    $('#Protanopia').click(function(){
        ColorChange(0);
    });

    $('#Protanomaly').click(function(){
        ColorChange(1);
    });

    $('#Deuteranopia').click(function(){
        ColorChange(2);
    });

    $('#Deuteranomaly').click(function(){
        ColorChange(3);
    });
    $('#Tritanopia').click(function(){
        ColorChange(4);
    });

    $('#Tritanomaly').click(function(){
        ColorChange(5);
    });

    $('#Achromatopsia').click(function(){
        ColorChange(6);
    });

    $('#Achromatomaly').click(function(){
        ColorChange(7);
    });

}
