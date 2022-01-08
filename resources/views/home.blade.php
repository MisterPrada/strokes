<!doctype html>
<html lang="{{ $lang }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strokes Design</title>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <meta name="description" content="Создание дизайна для мировой сцены тяжелой музыки. Разработка логотипов, эмблем, иллюстраций для продукции и оформление социальных сетей. Мы - визуальная поддержка мировой кор-сцены.">
    <meta name="keywords" content="Дизайн, Музыкальных, мерч, логотипы, strokes, обложка, metal">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/locomotive-scroll.min.css">
    <link rel="stylesheet" href="css/strokes.css">
    <link rel="stylesheet" href="css/title.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body data-scroll-container>
<header>
    <div id="head-menu" class="container-fluid fixed-top nav-header unselectable animate__animated animate__fadeIn">
        <div class="row justify-content-center">
            <div class="menu-background"></div>

            <div class="mobile-menu-button">
                <button class="js-mobile-menu-btn">
                    <img src="/img/mobile-menu-button.svg" alt="{{ __('open_menu') }}">
                </button>
            </div>

            <div class="header-left-logo logo-hider">
                <a href="#home">
                    <img src="/img/left-logo.svg" alt="{{ __('logo_alt') }}">
                </a>
            </div>

            <div class="menu-right">
                <ul>
                    <li class="menu-item menu-about">
                        <a href="#about">
                            {{ __('menu_list_about_us') }}
                        </a>
                    </li>

                    <li class="menu-item menu-jobs">
                        <a href="#jobs">
                            {{ __('menu_list_jobs') }}
                        </a>
                    </li>

                    <li class="menu-item menu-reviews">
                        <a href="#reviews">
                            {{ __('menu_list_reviews') }}
                        </a>
                    </li>

                    <li class="menu-item menu-contacts">
                        <a href="#contacts">
                            {{ __('menu_list_order') }}
                        </a>
                    </li>
                </ul>
            </div>

            <div class="lang-dropdown">
                @php
                    $langAssociate = $langAssociateFilter = ['ru' => 'RUS', 'en' => 'ENG'];
                @endphp

                <span>{{ $langAssociate[$lang] }}</span>

                <img src="/img/main/lang.svg">

                <ul>
                    @php
                        unset($langAssociateFilter[$lang]);
                    @endphp

                    <li>
                        @php
                            $langKey = array_key_first($langAssociateFilter);

                            $currentLang = array_shift($langAssociateFilter)
                        @endphp

                        <a href="{{ route('locale', ['locale' => $langKey] )  }}">
                            {{ $currentLang }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<main id="app">
    <section id="home" class="slide-1 unselectable" data-scroll-section>
        <video id="main-video" class="video-background" data-src="/video/background-contacts.mp4" muted autoplay playsinline loop>
            <source data-src="/video/background-mobile.mp4" data-mw="480" type="video/mp4" >
        </video>

        <div class="video-grid"></div>

        <div class="left-logo-block custom" data-scroll-speed="0"
             data-scroll>
            <div class="rect-top"></div>

            <div class="logo-text"
                 data-scroll
                 data-scroll-call="main">
                {!! __('slide_1_left_description') !!}
            </div>
        </div>

        <div class="main-center-text">
            <img class="main-logo-img" src="/img/logo/logo.svg">
        </div>

        <div data-scroll data-scroll-call="main" class="main-bottom-border"></div>
    </section>

    <section id="about" class="slide-2" data-scroll-section>
        <!--<div class="pencil"></div>-->

        <div data-scroll data-scroll-speed="-5" data-target="#about" class="container text-content">
            <div class="row">
                <div>
                    @if($lang == 'ru')
                        <h1>О нас</h1>

                        <p>
                            Привет, нас зовут <span class="red">«STROKES»</span>. <br>
                            В настоящее время мы специализируемся<br>
                            на product-дизайне, UI/UX дизайне, motion-дизайне<br>
                            и художественном направлении в целом.
                        </p>

                        <p>
                            Проект <span class="red">«STROKES»</span> направлен на визуальную поддержку<br>
                            мировой сцены тяжелой музыки, а именно на помощь<br>
                            в продвижении путём разработки дизайна медиа-контента,<br>
                            product-дизайна и motion-дизайна для музыкальных групп.
                        </p>

                        <p >
                            Наша первостепенная задача – профессиональный<br>
                            подход к каждому проекту индивидуально.
                        </p>

                        <p>
                            В нашу команду входят Digital-дизайнеры, иллюстраторы<br>
                            и 2D художники, работающие в различных направлениях<br>
                            и стилях.
                        </p>

                        <p>
                            Каждый заказ обрабатывается индивидуально и для него<br>
                            подбирается специалист, наиболее подходящий для<br>
                            реализации Вашей задачи.
                        </p>
                    @endif

                    @if($lang == 'en')
                        <h1>About us</h1>

                        <p>
                            Hi, we are <span class="red">«STROKES»</span>.<br>
                            We currently specialize in product design, UI/UX design,<br>
                            video design, art direction etc.
                        </p>

                        <p>
                            The <span class="red">«STROKES»</span> project’s aim is to visually support<br>
                            heavy music scene worldwide, namely to help with<br>
                            promotion through media content design, product<br>
                            design, and motion design for music bands.
                        </p>

                        <p>
                            The primary goal that drives us is a professional<br>
                            individual approach to every project.
                        </p>

                        <p>
                            Our team includes Digital designers, illustrators and<br>
                            2-D artists working in different directions and styles.
                        </p>

                        <p>
                            Each order is considered individually. The most suitable<br>
                            specialist for the specifics of your order is selected<br>
                            for resolving your task.
                        </p>
                    @endif

                    <p>
                        <br data-scroll data-scroll-call="about">
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="jobs" class="slide-3" data-scroll-section>
        <div id="slide3-content" class="text-content">
            <div class="content" data-scroll-target="#jobs"
                 data-scroll
                 data-scroll-direction="horizontal"
                 data-scroll-speed="0">

                @if($lang == 'ru')
                    <h1>Обложки</h1>

                    <p>
                        Обложка альбома – это лицо музыкального релиза. Обложка должна
                        запоминаться, цеплять за живое и, не побоимся этих слов – оставить
                        след в душе! Все в точности, как с музыкой.
                    </p>

                    <p>
                        Мы готовы реализовать любую из ваших идей и предложить свою
                        помощь и экспертизу для создания будущей обложки релиза.
                    </p>

                    <p>
                        Мы разрабатываем обложки в различных стилях — начиная
                        от коллажирования, заканчивая полноценными реалистичными артами.
                    </p>

                    <p>
                        Мы верим, что обложка музыкального альбома – это визуальное
                        воплощение смыслов, заложенных вашей музыкой.
                    </p>
                @endif

                @if($lang == 'en')
                        <h1>Covers</h1>

                        <p>
                            An album cover is the face of a musical release. It have
                            to be memorable, touch a nerve and leave a mark on the
                            soul! It works the same way as music does.
                        </p>

                        <p>
                            We are ready to realize all your ideas and suggest
                            our help and expertise to create your future cover.
                        </p>

                        <p>
                            We design covers in a variety of styles - from
                            collage to full-fledged realistic arts.
                        </p>

                        <p>
                            We believe that music album cover is a visual
                            meaning behind your music.
                        </p>
                @endif

                <div data-scroll data-scroll-call="jobs" class="content-footer">
                    <a target="_blank" href="https://www.facebook.com/pg/strokescoredesign/photos/?tab=album&album_id=100991604820835&ref=page_internal">
                        <img src="/img/slide-3/facebook.svg" alt="icon">
                        {{ __('slide_3_link') }}
                    </a>
                    <a class="blur-material" target="_blank" href="https://www.facebook.com/pg/strokescoredesign/photos/?tab=album&album_id=100991604820835&ref=page_internal">
                        <img src="/img/slide-3/facebook.svg" alt="icon">
                        {{ __('slide_3_link') }}
                    </a>
                </div>
            </div>
        </div>

        <div class="left-merch">
            <div>
                <div class="cover cover-3">
                    <img src="/img/slide-3/3_bw.png" alt="">
                </div>
            </div>

            <div>
                <div class="cover cover-1">
                    <img src="/img/slide-3/6_bw.png" alt="Dead Space">
                </div>
            </div>

            <div>
                <div class="cover cover-2">
                    <img src="/img/slide-3/2_bw.png" alt="">
                </div>
            </div>
        </div>

        <div class="right-merch">
            <div>
                <div class="cover cover-4">
                    <img src="/img/slide-3/1_bw.png" alt="">
                </div>
            </div>

            <div>
                <div class="cover cover-5">
                    <img src="/img/slide-3/5_bw.png" alt="">
                </div>
            </div>

            <div>
                <div class="cover cover-6">
                    <img src="/img/slide-3/4_bw.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="jobs-2" class="slide-4" data-scroll-section>
        <div class="text-content">
            <div class="content" data-scroll-target="#jobs-2"
                 data-scroll
                 data-scroll-direction="horizontal"
                 data-scroll-speed="0">

                @if($lang == 'ru')
                    <h1>Логотипы и эмблемы</h1>

                    <p>
                        Фирменный знак - это первое впечатление о вашем музыкальном проекте.
                    </p>

                    <p>
                        В современном мире музыкальные коллективы
                        используют логотипы и эмблемы в качестве презентации своей
                        группы, будь то их размещение на афише
                        концерта или на обложке релиза.
                    </p>

                    <p>
                        В любом случае,
                        логотип является неотъемлемой визуальной частью
                        музыкального проекта.
                    </p>

                    <p>
                        Мы предлагаем разработку текстовых, символических либо
                        комбинированных логотипов и эмблем в различных стилях:
                        #Metal #Hardcore #Punk и многие другие.
                    </p>
                @endif

                @if($lang == 'en')
                        <h1>Logos and Emblems</h1>

                        <p>
                            A trademark is the first impression of your musical project.
                        </p>

                        <p>
                            In today's world, musical ensembles use logos and emblems
                            as a presentation of their projects, placing them on the poster
                            of a concert or on the cover of a release.
                        </p>

                        <p>
                            Anyway, the logo is an integral visual part of a musical project.
                        </p>

                        <p>
                            We offer the design of text, symbolic or combined logos and
                            emblems in various styles: #Metal #Hardcore #Punk
                            and many more.
                        </p>
                @endif

                <div class="content-footer">
                    <a target="_blank" href="https://www.facebook.com/pg/strokescoredesign/photos/?tab=album&album_id=100989934821002&ref=page_internal">
                        <img src="/img/slide-3/facebook.svg" alt="icon">
                        {{ __('slide_4_link') }}
                    </a>

                    <a class="blur-material" target="_blank" href="https://www.facebook.com/pg/strokescoredesign/photos/?tab=album&album_id=100989934821002&ref=page_internal">
                        <img src="/img/slide-3/facebook.svg" alt="icon">
                        {{ __('slide_4_link') }}
                    </a>
                </div>
            </div>

            <div class="streetwear">
                <div class="cover">
                    <img src="/img/slide-4/streetwear_bw.png" alt="streetwear">
                </div>
            </div>

            <div class="sadday">
                <div class="cover">
                    <img src="/img/slide-4/sadday_bw.png" alt="sadday">
                </div>
            </div>

            <div class="carabus">
                <div class="cover">
                    <img src="/img/slide-4/carabus_bw.png" alt="carabus">
                </div>
            </div>
        </div>

        <div>
            <div class="cover massive">
                <img src="/img/slide-4/massive_bw.png" alt="massive">
            </div>
        </div>

        <div>
            <div class="cover minores">
                <img src="/img/slide-4/minores_bw.png" alt="minores">
            </div>
        </div>

        <div>
            <div class="cover neobhodimost">
                <img src="/img/slide-4/neobhodimost_bw.png" alt="neobhodimost">
            </div>
        </div>
    </section>

    <section id="jobs-3" class="slide-5" data-scroll-section>
        <div class="text-content">
            <div class="content" data-scroll-target="#jobs-3"
                 data-scroll
                 data-scroll-direction="horizontal"
                 data-scroll-speed="0"
                 >

                @if($lang == 'ru')
                    <h1>Мерч</h1>

                    <p>
                        На сегодняшний день большинство музыкальных групп могут расти
                        и продвигаться лишь при поддержке фанатов, которые приобретают
                        мерч музыкальных коллективов.
                    </p>

                    <p>
                        Не важно, футболка ли это, толстовка, бандана, снепбек или CD-продукция.
                        Главное - то, как выглядит мерч, насколько он качественен.
                    </p>

                    <p>
                        Действительно классный продукт хочется купить и таким образом поддержать
                        любимый музыкальный коллектив.
                    </p>

                    <p>
                        Мы готовы разработать иллюстрацию или дизайн для вашего
                        мерча, который поможет вам расти дальше и
                        продвигать свою музыкальную группу.
                    </p>
                @endif

                @if($lang == 'en')
                    <h1>Merch</h1>

                    <p>
                        Nowadays, most musical bands can only grow and promote
                        themselves with the support of fans, who purchase band merch.
                    </p>

                    <p>
                        It doesn't matter if it's a T-shirt, sweatshirt, bandana, snapback or
                        CD products. What matters is how the merch looks and the level of its
                        quality.
                    </p>

                    <p>
                        Really cool product sells easily and thus supports the band.
                    </p>

                    <p>
                        We are ready to develop an illustration or design for your
                        merchandise that will help you to grow and promote
                        your musical band.
                    </p>
                @endif

                <div class="content-footer">
                    <a target="_blank" href="https://www.facebook.com/pg/strokescoredesign/photos/?tab=album&album_id=100993951487267&ref=page_internal">
                        <img src="/img/slide-3/facebook.svg" alt="icon">
                        {{ __('slide_5_link') }}
                    </a>

                    <a class="blur-material" target="_blank" href="https://www.facebook.com/pg/strokescoredesign/photos/?tab=album&album_id=100993951487267&ref=page_internal">
                        <img src="/img/slide-3/facebook.svg" alt="icon">
                        {{ __('slide_5_link') }}
                    </a>
                </div>
            </div>
        </div>

        <div>
            <div class="cover merch-left-top">
                <img src="/img/slide-5/merch-left-top_bw.png" alt="merch">
            </div>
        </div>

        <div>
            <div class="cover merch-left">
                <img src="/img/slide-5/merch-left_bw.png" alt="merch">
            </div>
        </div>

        <div>
            <div class="cover merch-right-top">
                <img src="/img/slide-5/merch-right-top_bw.png" alt="merch">
            </div>
        </div>

        <div>
            <div class="cover merch-right">
                <img src="/img/slide-5/merch-right_bw.png" alt="merch">
            </div>
        </div>
    </section>

    <section id="reviews" class="slide-7" data-scroll-section>
        <div class="content">
            <div id="reviews-desktop" class="reviews reviews-desktop" data-scroll data-scroll-call="reviews">
                <div class="item-group">
                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/hatred-city.svg" alt="hatred-city">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">Hatred City</span>
                                <span class="grey">| {{ __('slide_reviews_title_1') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    Начали работать с самого создания группы, до сих пор обращаемся.<br>
                                    Приводим сюда все свои новые проекты. Заверяем, тут все<br>
                                    качественно, быстро и технично, рекомендем!
                                @endif

                                @if($lang == 'en')
                                    We started working with the very creation of the group, and we still do.<br>
                                    We bring all our new projects here. We recommend these guys as their<br>
                                    work is always done with high quality, quickly and skillfully.
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/cold-blooded-murder.svg" alt="cold-blooded-murder">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">Cold Blooded Murder</span>
                                <span class="grey">| {{ __('slide_reviews_title_1') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    Взрывной результат, работа выполнена качественно и в кротчайшие<br>
                                    сроки. Стоит отметит профессиональный подход и ответственность.<br>
                                    Обязательно будем обращаться еще!
                                @endif

                                @if($lang == 'en')
                                    The explosive result, the work is done qualitatively and in the shortest<br>
                                    time. It is worth noting the professional approach and responsibility.<br>
                                    We will definitely come again!
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/pro-heroes.svg" alt="pro-heroes">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">PRO Heroes</span>
                                <span class="grey">| {{ __('slide_reviews_title_2') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    Выше всех похвал! С первого подхода попали в яблочко<br>
                                    с редизайном бренда студии звукозаписи ProHeroes!<br>
                                    Конечно же обращусь и в следующий раз!
                                @endif

                                @if($lang == 'en')
                                    You are beyond praise! They hit the bull's-eye from the first approach<br>
                                    with the redesign of the ProHeroes recording studio brand!<br>
                                    I'll certainly do it next time too!
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/hungry-pigeon.svg" alt="hungry-pigeon">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">HUNGRY PIGEON</span>
                                <span class="grey">| {{ __('slide_reviews_title_1') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    Весь процесс работы очень понравился. STROKES крайне<br>
                                    внимательны и аккуратны. Все сделано на высшем уровне и в<br>
                                    кратчайшие сроки!
                                @endif

                                @if($lang == 'en')
                                    I enjoyed the whole process very much. STROKES are extremely<br>
                                    attentive and accurate. Everything was done to the highest<br>
                                    standard and in the shortest time!
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/deathsquad.svg" alt="deathsquad">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">DEATHSQUAD</span>
                                <span class="grey">| {{ __('slide_reviews_title_1') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    Обратились за дизайном, профессионально нас оформил и очень<br>
                                    быстро. За два дня получили шикарный дизайн, респект.<br>
                                    Всем рекомендуем!
                                @endif

                                @if($lang == 'en')
                                    We applied for the design. They professionally arranged us and<br>
                                    did their job very quickly. In two days we got an awesome design,<br>
                                    THX. We recommend it to everyone!
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/doctordanver.svg" alt="doctordanver">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">Doctordanver</span>
                                <span class="grey">| {{ __('slide_reviews_title_1') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    Всем советую! Очень быстро нашли общий язык и на выходе<br>
                                    получил отличную обложку и лирик видео. Работа под ключ,<br>
                                    внимание к деталям, качество и сроки.
                                @endif

                                @if($lang == 'en')
                                    I recommend it to everyone! Very quickly found a common language<br>
                                    and as the result I got a great cover and lyric video. Worked on a turnkey<br>
                                    basis, they pay attention to detail and quality, meet deadlines.
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-group">
                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/brightdelight.svg" alt="brightdelight">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">BrightDelight</span>
                                <span class="grey">| {{ __('slide_reviews_title_1') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    Получили бомбическую обложку для своей банды!<br>
                                    Оперативно, Мегакачественно, Огненный Прайс.<br>
                                    Непросто рекомендую, только со STROKES и надо работать!
                                @endif

                                @if($lang == 'en')
                                    Got a bombastic cover for my gang! Prompt, Mega Quality, Fiery Price.<br>
                                    Not easy to recommend, STROKES is the only one to work with!
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/vector-of-underground.svg" alt="vector-of-underground">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">Vector Of Underground</span>
                                <span class="grey">| {{ __('slide_reviews_title_1') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    Заказ кавера для трека прошёл в комфортном режиме, сделано<br>
                                    оперативно.<br>
                                    Вопросов нет!
                                @endif

                                @if($lang == 'en')
                                    Ordering a cover for the track went comfortably, done promptly.<br>
                                    No questions asked!
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/deceiving-lights.svg" alt="deceiving-lights">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">Deceiving Lights</span>
                                <span class="grey">| {{ __('slide_reviews_title_1') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    Очень качественная проделанная работа, с множеством<br>
                                    различных вариантов. Человек на 100500% втягивается в процесс,<br>
                                    что очень порадовало.
                                @endif

                                @if($lang == 'en')
                                    Very high-quality work done, with many<br>
                                    different options. The person is 100500% into the process, which is very satisfying.
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/last-trial.svg" alt="last trial">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">LAST TRIAL</span>
                                <span class="grey">| {{ __('slide_reviews_title_1') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    Огромный респект STROKES! Идеи схватывают налету и привносят<br>
                                    новые мысли в уже имеющиеся заготовки. И всё это при<br>
                                    прекрасном соотношении цены и качества. Спасибо огромное!
                                @endif

                                @if($lang == 'en')
                                    Huge respect for STROKES! Ideas are grasped on the fly and bring<br>
                                    new thoughts into the already existing blanks. And all this at<br>
                                    great value for money. Thank you so much!
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/massive-overdancity.svg" alt="massive-overdancity">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">Massive Overdancity</span>
                                <span class="grey">| {{ __('slide_reviews_title_1') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    Благодарим за отлично проделанную работу. Особенно за решение<br>
                                    спорных моментов, которые в итоге вышли очень хорошими.<br>
                                    В будущем надеемся на продолжительное сотрудничество!
                                @endif

                                @if($lang == 'en')
                                    Thank you for a job well done. Especially for solving<br>
                                    the controversial points, which turned out very well in the end.<br>
                                    We look forward to continued cooperation in the future!
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/fooling-the-crowd.svg" alt="Fooling the Crowd">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">Fooling the Crowd</span>
                                <span class="grey">| {{ __('slide_reviews_title_1') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    Максимально довольны обложкой. Оперативно, качественно<br>
                                    и даже пару бонусов сверху накинули. Просто супер, лучшие!<br>
                                    Всем советуем!
                                @endif

                                @if($lang == 'en')
                                    Maximum satisfaction with the cover. Prompt, high quality and<br>
                                    even a couple of bonuses on top. Just super, the best!<br>
                                    Everyone is highly recommended!
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-group">
                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/beatdown-heroes.svg" alt="BEATDOWN HEROES">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">BEATDOWN HEROES</span>
                                <span class="grey">| {{ __('slide_reviews_title_1') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    Сотрудничаем уже очень долго, при каждом обращении получаем<br>
                                    ожидаемо-офигительный результат. Очень профессиональный<br>
                                    подход и исполнение в срок, услуги стоят своего. Всем советуем!
                                @endif

                                @if($lang == 'en')
                                    We have been working together for a very long time, each time we<br>
                                    get a great result. Very professional approach and performance<br>
                                    on time, the service is worth it. We recommend it to everybody!
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/among-your-gods.svg" alt="AMONG YOUR GODS">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">AMONG YOUR GODS</span>
                                <span class="grey">| {{ __('slide_reviews_title_1') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    Заказали лирик видео на новый трек. Работа была<br>
                                    выполнена быстро, качественно и за разумные деньги!<br>
                                    Очень приятно было иметь дело. Огромное спасибо за терпение!
                                @endif

                                @if($lang == 'en')
                                    Ordered a lyric video for a new track. The work was<br>
                                    fast, high quality, and reasonably priced!<br>
                                    It was a pleasure doing business. Thank you very much for your patience!
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/incomer.svg" alt="deceiving-lights">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">Incomer</span>
                                <span class="grey">| {{ __('slide_reviews_title_1') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    Выражаем огромную благодарность STROKES за дизайн логотипа<br>
                                    и эмблемы группы. Работа выполнена быстро, качественно, ценник<br>
                                    гуманный. Не мучайте себя в фотошопах, закажите работу у профи!
                                @endif

                                @if($lang == 'en')
                                    We express our gratitude to STROKES for the design. The work was<br>
                                    done quickly, high quality, the price tag is humane. Do not torture<br>
                                    yourself in photoshop, order the work of a pro!
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/STTD-Logo.svg" alt="SILENCE TENDS TO DESTROY">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">STTD</span>
                                <span class="grey">| {{ __('slide_reviews_title_1') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    STROKES всегда делают работу лучше, чем мы изначально<br>
                                    задумываем. Очень рад, что есть такие люди, которые<br>
                                    дорабатывают ваши идеи и воплощают идеально. 12 пушек из 10!
                                @endif

                                @if($lang == 'en')
                                    STROKES always does a better job than we originally<br>
                                    intended. I'm very glad there are people like that<br>
                                    who refine your ideas and do them perfectly. 12 guns out of 10!
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/Kirill-Karklin.svg" alt="Kirill Karklin">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">Kirill Karklin</span>
                                <span class="grey">| {{ __('slide_reviews_title_3') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    Зная себя, вообще не думал, что у кого-то получится придумать<br>
                                    логотип подходящий для моей музыкальной деятельности.<br>
                                    В итоге - результат превзошёл ожидания и я намерен вернуться!
                                @endif

                                @if($lang == 'en')
                                    Knowing myself, I didn't think anyone could come up with a logo<br>
                                    suitable for my musical activities. In the end - the result exceeded<br>
                                    expectations and I intend to come back!
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo">
                            <img src="/img/slide-7/Voidout.svg" alt="Voidout">
                        </div>
                        <div class="text-content">
                            <div class="head">
                                <span class="red">Voidout</span>
                                <span class="grey">| {{ __('slide_reviews_title_1') }}</span>
                            </div>
                            <div class="text">
                                @if($lang == 'ru')
                                    Отличная работа! Легко взаимодействовать и вносить правки,<br>
                                    понимаем друг друга с полуслова. Обязательно обратимся<br>
                                    за обложками. Большая благодарность от всего коллектива!
                                @endif

                                @if($lang == 'en')
                                    Great job! Easy to communicate and make edits,<br>
                                    we understand each other at a glance. We'll be sure to apply<br>
                                    for the covers. Big thanks from the whole team!
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <span class="left-link">
                    <svg width="14" height="25" viewBox="0 0 14 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.277534 12.8462L11.5428 24.0803C11.9119 24.4481 12.5094 24.4475 12.8779 24.0784C13.2461 23.7093 13.2452 23.1114 12.876 22.7433L2.28131 12.1778L12.8764 1.6124C13.2455 1.24422 13.2464 0.646692 12.8783 0.277552C12.6936 0.0925064 12.4516 -1.71661e-05 12.2096 -1.71661e-05C11.9682 -1.71661e-05 11.7272 0.0918884 11.5428 0.275648L0.277534 11.5094C0.0997658 11.6863 1.14441e-05 11.927 1.14441e-05 12.1778C1.14441e-05 12.4286 0.100052 12.669 0.277534 12.8462Z" fill="#343434"/>
                    </svg>
                </span>

                <span class="right-link">
                    <svg width="14" height="25" viewBox="0 0 14 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.7225 12.8462L2.45722 24.0803C2.08813 24.4481 1.49056 24.4475 1.12208 24.0784C0.753896 23.7093 0.754847 23.1114 1.12399 22.7433L11.7187 12.1778L1.12361 1.6124C0.754514 1.24422 0.753563 0.646692 1.1217 0.277552C1.30642 0.0925064 1.5484 -1.71661e-05 1.79039 -1.71661e-05C2.03176 -1.71661e-05 2.27279 0.0918884 2.45717 0.275648L13.7225 11.5094C13.9002 11.6863 14 11.927 14 12.1778C14 12.4286 13.8999 12.669 13.7225 12.8462Z" fill="#343434"/>
                    </svg>
                </span>
            </div>
        </div>
    </section>

    <section id="contacts" class="slide-contact-us" data-scroll-section>
        <div class="contacts" data-scroll data-scroll-call="contacts">
            <div class="header">
                {{ __('slide_contact_title') }}
            </div>

            <contact-form></contact-form>
        </div>
    </section>

    <footer id="footer" class="slide-8" data-scroll-section>
        <div id="footer-line-top"></div>

        <div class="content">
            <div class="social">
                <div class="link">
                    <a href="https://vk.com/strokesdesign" target="_blank">
                        <img src="/img/slide-8/vk.svg" alt="vk">
                    </a>
                </div>

                <div class="link">
                    <a href="https://www.instagram.com/strokesdesign" target="_blank">
                        <img src="/img/slide-8/instagram.svg" alt="instagram">
                    </a>
                </div>

                <div class="link">
                    <a href="https://www.facebook.com/strokescoredesign" target="_blank">
                        <img src="/img/slide-8/facebook.svg" alt="facebook">
                    </a>
                </div>

                <div class="link telegram">
                    <a href="https://t.me/strokesdesign" target="_blank">
                        <img src="/img/slide-8/telegram.svg" alt="telegram">
                    </a>
                </div>
            </div>

            <div>
                <div data-scroll
                     data-scroll-speed="1"
                     data-scroll-target="#footer"  class="center-text">
                    <span>STAY TRUE</span>
                </div>

                <div data-scroll
                     data-scroll-speed="1"
                     data-scroll-target="#footer" class="right-text">
                    <span>STAY FU**ING TRUE!</span>
                </div>
            </div>


        </div>
    </footer>
</main>

<div id="modal_result" class="modal-result">
    <div class="back"></div>

    <div class="text-content">
        <h2>
            {{ __('slide_contact_modal_success_title') }}
        </h2>

        <p>
            {{ __('slide_contact_modal_success_description') }}
        </p>
    </div>
</div>

<div class="logo-right-bottom">
    <a href="/contacts">
        <img src="/img/logo/logo.svg" class="logo-mini">
        <img src="/img/logo/{{ 'text_' . $lang }}.svg" class="logo-text-mini">
    </a>
</div>


</body>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="js/swipe.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/locomotive-scroll.min.js"></script>
<script src="/lang-{{ $lang ?? '' }}"></script>
<script src="js/misterprada.js"></script>
<script src="js/app.js"></script>

</html>
