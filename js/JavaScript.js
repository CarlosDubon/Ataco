$(document).ready(main);
 
var contador = 1;
var mousewheelevt = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel" //FF doesn't recognize mousewheel as of FF3.x

 
function main () {
	$('.menu_bar').click(function(){
		if (contador == 1) {
			$('.movil').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('.movil').animate({
				left: '-100%'
			});
            
		}
	});
    $('.submenu').click(function(){
        $(this).children('.children').slideToggle();
    });
    
    $(window).scroll(function(){  
        var Position = window.scrollY;
        
        /*if(Position >1){
            
            $('nav').css('position','fixed');
            $('#banner-container').slideUp('fast');
            $('nav').animate({
                top:'0'
            },150);

        }
        if(Position <1){
             $('nav').css('position','static');
            $('#banner-container').slideDown('fast');

        }*/
        if(Position > $('#banner-container').offset().top + $('#banner-container').outerHeight(true)){
            $('nav[id="banner-container"]').addClass('navbar-flat').removeClass('navbar-ext');
            
        }else{
            $('banner-cantainer').css('display','block');
            $('nav[id="banner-container"]').addClass('navbar-ext').removeClass('navbar-flat');

        }
        
          
    });

}
