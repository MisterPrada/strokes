$( document ).ready(function() {
    var scroll = new LocomotiveScroll({
        el: document.querySelector('[data-scroll-container]'),
        smooth: true
    });

    let deg = 0;
    let passive_mode = false;
    let offset = 0;
    let speed = 8;

    let passiveRotate = function () {
        passive_mode = true;
        deg += 0.08;
        $('.logo-text-mini').css('transform','rotate('+ deg +'deg)');
    }

    let rotateLogoText = setInterval(function(){
        passiveRotate();
    }, 10);




    let time = undefined;
    scroll.on('scroll', func => {
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

    });



    // Выбор язывка
    if($('.lang-dropdown').length){
        $('.lang-dropdown span, .lang-dropdown img').on('click', function(){
            $('.lang-dropdown ul').fadeToggle();
        });
    }

});

