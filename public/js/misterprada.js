var orientationState = true;

function isInteger(num) {
    return (num ^ 0) === num;
}

function ifMobile() {
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
        return true;
    }

    return false;
}

function phoneResizeSetHeight() {
    const doc = document.documentElement;
    doc.style.setProperty('--app-height', `${window.innerHeight}px`);
}

const resizeFunction = () => {
    if( orientationState ) {
        phoneResizeSetHeight();
        orientationState = undefined;
    }

    if(!ifMobile()){
        phoneResizeSetHeight();
    }
};
window.addEventListener('resize', resizeFunction);
resizeFunction();

window.addEventListener('orientationchange', function (e) {
    orientationState = true;
});

document.addEventListener('touchmove', function (event) {
    if (event.scale !== 1) { event.preventDefault(); }
}, { passive: false });

document.addEventListener('dblclick', (event) => {
    event.preventDefault()
}, { passive: false });

$( document ).ready(function() {

    /** Анимация для появления главного текста **/
    var headline = document.getElementById('head_title');
    if(headline){
        //spanText(headline);
    }

    var scroll = new LocomotiveScroll({
        el: document.querySelector('[data-scroll-container]'),
        smooth: true,
        repeat: true
    });

    let deg = 0;
    let passive_mode = false;
    let offset = 0;
    let speed = 8;

    let passiveRotate = function () {
        passive_mode = true;
        deg += 0.08;
        $('.logo-text-mini').css('transform','rotate('+ deg +'deg)');
    };

    let rotateLogoText = setInterval(function(){
        passiveRotate();
    }, 10);



    let scrollPos = 0; // Начальное положение пользователя
    let time = undefined;
    let scroll_shield = undefined;
    let scroll_shield_timer = undefined;
    let menu_trigger = 0;

    scroll.on('scroll', func => {
        clearTimeout(scroll_shield_timer);
        scroll_shield_timer = setTimeout(function(){
            scroll_shield = undefined;
        }, 50);
        clearInterval(rotateLogoText);
        clearTimeout(time);

        if(passive_mode){
            passive_mode = false;
            offset = deg - (func.scroll.y / speed);
        }

        let local_deg = (func.scroll.y / speed) + offset;

        $('.logo-text-mini').css('transform','rotate('+ local_deg +'deg)');

        time = setTimeout(function(){
            deg = local_deg;
            rotateLogoText = setInterval(function(){
                passiveRotate();
            }, 10);
        }, 100);

        menu_trigger = scrollPos;

        //console.log('first: ' + func.scroll.y);
        //console.log('second: ' + scrollPos);

        //**************** анимация для меню ************************//


        if(func.scroll.y != scrollPos){
            if (func.scroll.y <= scrollPos){
                //console.log('показать');
                $('#head-menu').show();

                $('#head-menu').removeClass('animate__fadeInDown animate__fadeOut');
                $('#head-menu').addClass('animate__animated animate__fadeIn');
            } else {
                if(!isInteger(func.scroll.y)){
                    $(".lang-dropdown ul").fadeOut(); // Скрываем меню выбора языка при любом скроле
                    //console.log('Скрыть');

                    $('#head-menu').removeClass('animate__fadeInDown animate__fadeIn');
                    $('#head-menu').addClass('animate__animated animate__fadeOut');
                }else{
                    mobileMenuHide();
                }
            }
        }

        scrollPos = func.scroll.y;

        //*************** анимация для тени меню *********************//
        if ( func.scroll.y < 20) {
            $('.menu-background').fadeOut() // скрываем тень на меню
        }else{
            $('.menu-background').fadeIn(); // скрываем тень на меню
        }

    });

    /*$('#head-menu').on('animationend', () => {
        if (menu_trigger > scrollPos){
            $('#head-menu').show();
        } else {
            $('#head-menu').hide();
        }
    });*/


    scroll.on('call', func => {

        $('.menu-item').removeClass('active');
        $('.menu-' + func).addClass('active');

        if(func === 'main' || func === 'about'){
            $('.logo-hider').fadeOut() // скрываем логотип слева если на главном экране
        }else{
            $('.logo-hider').fadeIn()
        }


        /* if(func === 'ttt'){
             $('.logo-hider').fadeOut();
         }*/
        //console.log( visible(document.getElementById('ttt')) )


        //console.log(func);
    });

    // Выбор язывка
    if($('.lang-dropdown').length){
        $('.lang-dropdown span, .lang-dropdown img').on('click', function(){
            $('.lang-dropdown ul').fadeToggle();
        });
    }

    $(document).mouseup(function (e){ // событие клика по веб-документу
        var div = $(".lang-dropdown"); // тут указываем ID элемента
        if (!div.is(e.target) // если клик был не по нашему блоку
            && div.has(e.target).length === 0) { // и не по его дочерним элементам
            $(".lang-dropdown ul").fadeOut(); // скрываем его
        }
    });


    // плавный скролл ссылок
    const smoothLinks = document.querySelectorAll('a[href^="#"]');

    for (let smoothLink of smoothLinks) {
        smoothLink.addEventListener('click', function (e) {
            e.preventDefault();
            const id = smoothLink.getAttribute('href');

            if(scroll_shield != id){

                let offset = 0;

                $('.menu-item').removeClass('active');
                $(smoothLink).parent().addClass('active');

                scroll_shield = id;
                /*setTimeout(function(){
                    scroll_shield = false;
                }, 600);*/

                if(id == '#reviews'){
                    offset = -110;
                }


                scroll.scrollTo(id, offset);

                /*   scroll.scrollTo(id, 100, 1000, [0.25, 0.00, 0.35, 1.00], true, ()=>{
                       scroll_shield = false;
                   });*/
            }

        });
    };



    if($('#reviews').length){

        let default_group = 0;
        let group_count = $('#reviews .item-group').length;
        let animation_lock = false;


        $('#reviews .item-group').each(function( index ) {
            if(index !== default_group){
                $(this).hide();
            }
        });

        $('#reviews .left-link').on('click', function () {
            if(animation_lock) { return false; }
            animation_lock = true;

            $($('#reviews .item-group')[default_group]).removeClass('animate__animated animate__fadeOutRight animate__fadeOutLeft animate__fadeInLeft animate__fadeInRight');
            $($('#reviews .item-group')[default_group]).addClass('animate__animated animate__fadeOutRight');

            if( (default_group + 1) < group_count ){
                default_group++;
            }else{
                default_group = 0;
            }

            $($('#reviews .item-group')[default_group]).show();
            $($('#reviews .item-group')[default_group]).removeClass('animate__animated animate__fadeOutRight animate__fadeOutLeft animate__fadeInLeft animate__fadeInRight');
            $($('#reviews .item-group')[default_group]).addClass('animate__animated animate__fadeInLeft');

            $($('#reviews .item-group')[default_group]).on('animationend', function () {
                animation_lock = false
            });

        });

        $('#reviews .right-link').on('click', function () {
            if(animation_lock) { return false; }
            animation_lock = true;

            $($('#reviews .item-group')[default_group]).removeClass('animate__animated animate__fadeOutRight animate__fadeOutLeft animate__fadeInLeft animate__fadeInRight');
            $($('#reviews .item-group')[default_group]).addClass('animate__animated animate__fadeOutLeft');

            if( (default_group + 1) < group_count ){
                default_group++;
            }else{
                default_group = 0;
            }

            $($('#reviews .item-group')[default_group]).show();
            $($('#reviews .item-group')[default_group]).removeClass('animate__animated animate__fadeOutRight animate__fadeOutLeft animate__fadeInLeft animate__fadeInRight');
            $($('#reviews .item-group')[default_group]).addClass('animate__animated animate__fadeInRight');

            $($('#reviews .item-group')[default_group]).on('animationend', function () {
                animation_lock = false
            });

        });

    }

    function mobileMenuHide() {
        $('.menu-right').removeClass('animate__animated animate__fadeInDown animate__fadeOutUp');

        $('.menu-right').addClass('animate__animated animate__fadeOutUp');

        $('.menu-right').one('animationend', () => {
            $('.menu-right').removeAttr("style");
            $('.menu-right').removeClass('animate__animated animate__fadeInDown animate__fadeOutUp');
        });
    }

    function mobileMenuShow() {
        $('.menu-right').off('animationend');

        $('.menu-right').removeClass('animate__animated animate__fadeInDown animate__fadeOutUp');

        $('.menu-right').addClass('animate__animated animate__fadeInDown');
    }

    if($('.js-mobile-menu-btn').length){
        $('.js-mobile-menu-btn').on('click', function(){

            $('.menu-right').show();

            if( !$('.menu-right').hasClass('animate__animated animate__fadeInDown') ){
                mobileMenuShow();
            } else {
                mobileMenuHide();
            }

        });
    }

});



