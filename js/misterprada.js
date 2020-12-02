function isInteger(num) {
    return (num ^ 0) === num;
}

function spanText(text) {
    var string = text.innerText;
    var spaned = '';
    for (var i = 0; i < string.length; i++) {
        if(string.substring(i, i + 1) === ' ') spaned += string.substring(i, i + 1);
        else spaned += '<span>' + string.substring(i, i + 1) + '</span>';
    }
    text.innerHTML = spaned;
}

$( document ).ready(function() {
    /** Анимация для появления главного текста **/
    var headline = document.getElementById('head_title');
    if(headline){
        spanText(headline);
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
                $('#head-menu').removeClass('animate__fadeInDown animate__fadeOutUp');
                $('#head-menu').addClass('animate__animated animate__fadeInDown');
            } else {
                if(!isInteger(func.scroll.y)){
                    //console.log('Скрыть');
                    $('#head-menu').removeClass('animate__fadeInDown animate__fadeOutUp');
                    $('#head-menu').addClass('animate__animated animate__fadeOutUp');
                }
            }
        }

        scrollPos = func.scroll.y;

    });

    $('#head-menu').on('animationend', () => {
        if (menu_trigger > scrollPos){
                $('#head-menu').show();
        } else {
            $('#head-menu').hide();
        }
    });


    scroll.on('call', func => {
        $('.menu-item').removeClass('active');
        $('.menu-' + func).addClass('active');

        if(func === 'main'){
            $('.lang-dropdown').fadeIn();
        }else{
            $('.lang-dropdown').fadeOut()
        }

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







});


