$(document).ready(main);
$(document).ready(function(){
   $('.miniaruta').fadeIn(4000); 
});

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
						if(Position > $('#Box1').offset().top && Position < $('#Box2').offset().top-64){
							$('.navbar-flat').css('background','#1F4F59');
						}
						else if(Position > $('#Box2').offset().top-64 && Position < $('#Box3').offset().top-64){
							// $('.navbar-flat').css('background','#7ea00e');
							$('.navbar-flat').attr('style','background: #7ea00e!important;');
						}
						else if(Position > $('#Box3').offset().top-64 && Position < $('#Box4').offset().top-64){
							// $('.navbar-flat').css('background','#213502');
							$('.navbar-flat').attr('style','background: #213502!important;');
						}
						else if(Position >= $('#Box4').offset().top-64 ){
							// $('.navbar-flat').css('background','#ea2f21');
							$('.navbar-flat').attr('style','background: #ea2f21!important;');
						}

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
        },2000)
    });


}
