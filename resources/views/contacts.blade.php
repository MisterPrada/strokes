<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strokes Design</title>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <meta name="description" content="Создание дизайна для мировой сцены тяжелой музыки. Разработка логотипов, эмблем, иллюстраций для продукции и оформление социальных сетей. Мы - визуальная поддержка мировой кор-сцены.">
    <meta name="keywords" content="Дизайн, Музыкальных, мерч, логотипы, strokes, обложка, metal">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/locomotive-scroll.min.css">
    <link rel="stylesheet" href="css/strokes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body data-scroll-container>
<header>
    <div id="head-menu" class="container-fluid fixed-top nav-header">
        <div class="row justify-content-center">
            <div class="header-left-logo">
                <a href="/#home">
                    <img src="/img/left-logo.svg" alt="Логотип">
                </a>
            </div>

            <div class="lang-dropdown ">
                <span>RUS</span>
                <img src="/img/main/lang.svg" alt="Иконка">

                <ul>
                    <li><a href="javascript: void(0);">ENG</a></li>
                </ul>
            </div>

            <div class="menu-right">
                <ul>
                    <li class="menu-item menu-about">
                        <a href="/">Главная</a>
                    </li>

                    <li class="menu-item menu-contacts active">
                        <a href="/contacts">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<main id="app">
    <section id="home" class="slide-1" data-scroll-section>
        <video src="/video/background-contacts.mp4" muted autoplay loop class="video-background"></video>
        <div class="video-grid"></div>

        <div class="left-logo-block">
            <div class="rect-top"></div>

            <div class="logo-text">
                <span>Мы создаем цифровые продукты,</span> которые преобразуются с помощью анализа данных.
            </div>
        </div>

        <div class="contacts">
            <div class="header">
                ФОРМА ОБРАТНОЙ СВЯЗИ
            </div>

            <contact-form></contact-form>
        </div>
    </section>

    <footer id="footer" class="slide-8" data-scroll-section>
        <div class="content">
            <div data-scroll
                 data-scroll-speed="2"
                 data-scroll-target="#footer" class="social">
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
                    <span>STAY FA**ING TRUE!</span>
                </div>
            </div>


        </div>
    </footer>

    <div id="modal_result" class="modal-result">
        <div class="back"></div>

        <div class="text-content">
            <h2>
                Ваша заявка отправлена!
            </h2>

            <p>
                После отправки вашей заявки мы свяжется с Вами по Вашему E-mail
                для уточнения данных и обработки вашего заказа.
            </p>
        </div>
    </div>
</main>




</body>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/locomotive-scroll.min.js"></script>
<script src="js/misterprada.js"></script>
<script src="js/app.js"></script>

</html>