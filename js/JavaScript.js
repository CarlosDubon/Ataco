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

    $('div[id="Topscroller"]').click(function(){
        var initialPosition = $('#banner-container').offset().top;
        $('html,body').animate({
            scrollTop:initialPosition
        },2000)
    });
    $('div[id="Topscroller-dark"]').click(function(){
        var initialPosition = $('#banner-container').offset().top;
        $('html,body').animate({
            scrollTop:initialPosition
        },1000)
    });

		$('.gallery-container').hover(function(){
			$('.gallery-container').css('filter','blur(6px)');
			// $('.gallery-container').css('filter','grayscale(100%)');
			$('.modal-header').css('filter','blur(6px)');
			$('.modal-body p').css('filter','blur(6px)');
			$('.modal-footer').css('filter','blur(6px)');
			$(this).attr('style','filter:none !important;');
		},function(){
			$('.gallery-container').css('filter','none');
			$('.modal-header').css('filter','none');
			$('.modal-body p').css('filter','none');
			$('.modal-footer').css('filter','none');
		});

}
