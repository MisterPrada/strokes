<!doctype html>
<html lang="en">
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
                    <img src="/img/mobile-menu-button.svg" alt="Открыть меню">
                </button>
            </div>

            <div class="header-left-logo logo-hider">
                <a href="#home">
                    <img src="/img/left-logo.svg" alt="Логотип">
                </a>
            </div>

            <div class="menu-right">
                <ul>
                    <li class="menu-item menu-about">
                        <a href="#about">О нас</a>
                    </li>

                    <li class="menu-item menu-jobs">
                        <a href="#jobs">Работы</a>
                    </li>

                    <li class="menu-item menu-reviews">
                        <a href="#reviews">Отзывы</a>
                    </li>

                    <li class="menu-item menu-contacts">
                        <a href="/contacts">Заказать</a>
                    </li>
                </ul>
            </div>

            <div class="lang-dropdown">
                <span>RUS</span>
                <img src="/img/main/lang.svg" alt="Иконка">

                <ul>
                    <li><a href="javascript: void(0);">ENG</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<main>
    <section id="home" class="slide-1 unselectable" data-scroll-section>
        <video src="/video/background-contacts.mp4" muted autoplay playsinline loop class="video-background"></video>
        <div class="video-grid"></div>

        <div class="left-logo-block custom">
            <div class="rect-top"></div>

            <div class="logo-text" data-scroll data-scroll-call="main">
                <span>Мы создаем цифровые продукты,</span> которые преобразуются с помощью анализа данных.
            </div>
        </div>

        <div class="main-center-text">
            <img class="main-logo-img" src="/img/logo/logo.svg">
        </div>

        <div data-scroll data-scroll-call="main" class="main-bottom-border"></div>
    </section>

</main>

<div class="logo-right-bottom">
    <a href="/contacts">
        <img src="/img/logo/logo.svg" class="logo-mini">
        <img src="/img/logo/text.svg" class="logo-text-mini">
    </a>
</div>


</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/locomotive-scroll.min.js"></script>
<script src="js/misterprada.js"></script>
<script src="js/app.js"></script>

</html>