$(document).ready(main);
function main(){
    $(window).scroll(function(){
            var Position = window.scrollY;
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
}