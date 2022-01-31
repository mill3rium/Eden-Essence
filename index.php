<?php


require_once "config/connect.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EDEN ESSENCE</title>
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/fonts/icons/fontawesome-free-5.15.4-web/css/all.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300;700&display=swap" rel="stylesheet">
    <link rel="icon" href="/favicon.ico" />
    <link rel="stylesheet" href="/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
</head>

<body>
    <!-- HEADER -->
    <header class="header" >
        <div class="wrapper">
            <div class="header__wrapper">
                <div class="header__burger">
                    <div class="header__burger-menu" >
                        <span class="header__burger-menu-line-1"></span>
                        <span class="header__burger-menu-line-2"></span>
                        <span class="header__burger-menu-line-3"></span>
                    </div>
                </div>
                <div class="header__logo">
                    <a href="/">
                        <img src="/img/logo/logo-white.svg" alt="logo" class="header__logo-img" />
                    </a>
                </div>
                <div class="header__search">
                    <input type="text" class="header__search-input">
                    <button class="header__search-button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- SIDEBAR -->
    <nav id="mySidenav" class="sidenav">
        <div class="sidenav__close-btn">
            <span class="sidenav__close-btn-line-1"></span>
            <span class="sidenav__close-btn-line-2"></span>
            <span class="sidenav__close-btn-line-3"></span>
        </div>
        <ul class="sidenav__menu">
            <li class="sidenav__menu-item">
                <a href="../pages/catalog.php" class="sidenav__menu-link">Все</a>
            </li>
            <li class="sidenav__menu-item">
                <a href="#0" class="sidenav__menu-link">Новинки</a>
            </li>
            <li class="sidenav__menu-item">
                <a href="#0" class="sidenav__menu-link">Популярно</a>
            </li>
            <li class="sidenav__menu-item">
                <a href="#0" class="sidenav__menu-link">Для вас</a>
            </li>
            <li class="sidenav__menu-item">
                <a href="#0" class="sidenav__menu-link">Для мужчин</a>
            </li>
            <li class="sidenav__menu-item">
                <a href="#0" class="sidenav__menu-link">Для женщин</a>
            </li>
            <li class="sidenav__menu-item">
                <a href="#0" class="sidenav__menu-link">Наборы</a>
            </li>
            <li class="sidenav__menu-item">
                <a href="#0" class="sidenav__menu-link">Эксклюзивы</a>
            </li>
        </ul>
        <div class="sidenav__icons-block">
            <div class="sidenav__icons">
                <i class="fas fa-shopping-bag"></i>
                <p>0</p>
            </div>
            <div class="sidenav__icons">
                <i class="fas fa-star"></i>
                <p>1</p>
            </div>
        </div>
        <div class="sidenav__buttons">
            <a href="#0" class="sidenav__buttons-btn sidenav__login-button" rel="login">
                Войти
            </a>
            <a href="#0" class="sidenav__buttons-btn sidenav__register-button" rel="register">
                Регистрация
            </a>
        </div>
    </nav>
    <!-- MAIN -->
    <main class="main" id="top">
        <!-- INTRO -->
        <section class="section__intro">
            <video src="/intro2.mp4" autoplay loop muted class="intro-video" id="intro-video">
                <source src="/intro2.mp4" type="video/mp4">
                </source>
            </video>
            <div class="intro__text">
                <img src="/img/logo/logo-white.svg" alt="intro-logo" width="200px" height="200px">
                <h1>eden</h1>
                <h2>essence</h2>
            </div>
            <div class="scrollto">
              <a href="#start" onclick="slowScroll('#start')">
                <i class="fas fa-chevron-down"></i>
              </a>
            </div>
        </section>
        <div class="wrapper" id="start">
            <!-- FOR-YOU -->
            <section class="section__for-you">
                <div class="for-you__title main__title">
                    Для вас
                </div>
                <div class="owl-carousel owl-theme for-you__slider" id="slider">

                    <?php 

                    $products = mysqli_query($connect, "SELECT * FROM `products`");
                    $products = mysqli_fetch_all($products);
                    $i = 1;
                    foreach ($products as $product) {
                        if($i > 7){
                            $i = 0;
                        }
                        else{

                        ?>

                        <div class="for-you__slider-item item">
                            <img src="/img/pics/<?= $i?>.png" alt="pic" class="for-you__slider-img">
                            <div class="for-you__slider-title">
                                <?= $product[1] ?>
                            </div>
                        </div>


                        <?php
                    }
                        $i++;
                    }

                     ?>

                </div>
            </section>
            <!-- CATEGORY -->
            <section class="section__category">
                <div class="category__title main__title">
                    Категории
                </div>
                <div class="category__flex-container">
                    <div class="category__flex-elem">
                        <img src="/img/pics/4.png" alt="category" class="category__flex-elem-img">
                        <p class="category__flex-elem-title">Для женщин</p>
                        <button class="category__flex-elem-button">
                            Подробнее
                        </button>
                    </div>
                    <div class="category__flex-elem">
                        <img src="/img/pics/5.png" alt="category" class="category__flex-elem-img">
                        <p class="category__flex-elem-title">Для мужчин</p>
                        <button class="category__flex-elem-button">
                            Подробнее
                        </button>
                    </div>
                    <div class="category__flex-elem">
                        <img src="/img/pics/2.png" alt="category" class="category__flex-elem-img">
                        <p class="category__flex-elem-title">Наборы</p>
                        <button class="category__flex-elem-button">
                            Подробнее
                        </button>
                    </div>
                </div>
            </section>
            <!-- POPULAR -->
            <section class="section__popular">
              <div class="popular__cards-block">
                  <img src="/img/pics/POSTERS/1.jpg" alt="poster" class="popular__card-info-img">
                  <div class="popular__card-info">
                    <h2 class="popular__card-info-title">
                      Versace Eros
                    </h2>
                    <p class="popular__card-info-desc">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae nostrum porro distinctio dolore similique neque cum debitis a libero.
                    </p>
                    <button class="popular__card-info-button">
                      Подробнее
                    </button>
                  </div>
                  <div class="popular__card-info">
                    <h2 class="popular__card-info-title">
                      Chanel
                    </h2>
                    <p class="popular__card-info-desc">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae nostrum porro distinctio dolore similique neque cum debitis a libero.
                    </p>
                    <button class="popular__card-info-button">
                      Подробнее
                    </button>
                  </div>
                  <img src="/img/pics/POSTERS/2.jpg" alt="poster" class="popular__card-info-img">
                  <img src="/img/pics/POSTERS/3.jpg" alt="poster" class="popular__card-info-img">
                  <div class="popular__card-info">
                    <h2 class="popular__card-info-title">
                      Lacoste L'homme
                    </h2>
                    <p class="popular__card-info-desc">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae nostrum porro distinctio dolore similique neque cum debitis a libero.
                    </p>
                    <button class="popular__card-info-button">
                      Подробнее
                    </button>
                  </div>
                </div>
              </div>
            </section>
        </div>
        <footer class="footer">
            <div class="wrapper">
                <div class="footer__wrapper">
                   <div class="footer__container">
                       <h6>EDEN ENTERPRISES</h6>
                       <ul class="footer__menu">
                            <li class="footer__menu-item">
                                <a href="#0" class="footer__menu-link">
                                    Garden
                                </a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#0" class="footer__menu-link">
                                    Sense
                                </a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#0" class="footer__menu-link">
                                    Wear
                                </a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#0" class="footer__menu-link">
                                    Essence
                                </a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#0" class="footer__menu-link">
                                    Pleasure
                                </a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#0" class="footer__menu-link">
                                    Majesty
                                </a>
                            </li>
                       </ul>
                   </div>
                   <div class="footer__container">
                    <h6>Онлайн-услуги</h6>
                    <ul class="footer__menu">
                         <li class="footer__menu-item">
                             <a href="#0" class="footer__menu-link">
                                 Способы оплаты
                             </a>
                         </li>

                    </ul>
                    </div>
                    <div class="footer__container">
                        <h6>Услуги</h6>
                        <ul class="footer__menu">
                            <li class="footer__menu-item">
                                <a href="#0" class="footer__menu-link">
                                    Найти магазин
                                </a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#0" class="footer__menu-link">
                                    Устроиться на работу
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="footer__container">
                        <h6>Информация</h6>
                        <ul class="footer__menu">
                            <li class="footer__menu-item">
                                <a href="#0" class="footer__menu-link">
                                    Контакты
                                </a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#0" class="footer__menu-link">
                                    Юридическая информация
                                </a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#0" class="footer__menu-link">
                                    Политика конфиденциальности
                                </a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#0" class="footer__menu-link">
                                    Финансовые результаты
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>  
                <div class="footer__subfooter">
                    <form action="vendor/email.php" method="post" class="footer__subfooter-subscribe">
                        <input type="email" name="footer_email" class="footer__subfooter-subscribe-input" placeholder="Подписаться" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        <button type="submit" class="footer__subfooter-subscribe-btn">
                            <i class="fas fa-share"></i>
                        </button>
                    </form>
                    <div class="footer__subfooter-icons">
                        <i class="footer__subfooter-icons-icon fab fa-instagram"></i>
                        <i class="footer__subfooter-icons-icon fab fa-twitter"></i>
                        <i class="footer__subfooter-icons-icon fab fa-tiktok"></i>
                        <i class="footer__subfooter-icons-icon fab fa-facebook"></i>
                        <i class="footer__subfooter-icons-icon fab fa-youtube"></i>
                        <i class="footer__subfooter-icons-icon fab fa-vk"></i>
                    </div>
                </div>
                <div class="footer__brand">
                  <h1>eden</h1>
                  <h3>enterprises</h3>
                </div>
            </div>
        </footer>
    </main>
    <!-- FOOTER -->


    <!-- lOGIN & REGISTER POP-UPS -->
    <div class="overlay__pop-up"></div>
    <div class="login" id="login">
        <form action="" method="">
            <p>Почта</p>
            <input type="email" name="email">
            <p>Пароль</p>
            <input type="password" name="password">
            <button>Войти</button>
            <div class="login__forget-password">
              <a href="#0">Забыли пароль?</a>
            </div>
        </form>
    </div>
    <div class="register" id="register">
        <form action="vendor/create.php" method="post">
            <p>Имя</p>
            <input type="text" name="first_name" required>
            <p>Фамилия</p>
            <input type="text" name="last_name" required >
            <p>Почта</p>
            <input type="e-mail" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
            <p>Пароль</p>
            <input type="password" name="password" required >
            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>

    <!-- SCROLL TO UP -->
    <div class="scroll-to-up scrollto">
      <a href="#top">
        <i class="fas fa-chevron-up"></i>
      </a>
    </div>
    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/js/sidebar.js"></script>
    <script type="text/javascript" src="/js/header.js"></script>
    <script type="text/javascript" src="/js/login.js"></script>
    <script type="text/javascript" src="/js/scroll.js"></script>
    <script type="text/javascript" src="/js/scroll-to-up.js"></script>
</body>

</html>
