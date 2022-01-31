<?php


require_once "config/connect.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Каталог</title>
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/catalog.css"/>
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
                        <img src="/img/logo/logo-black.svg" alt="logo" class="header__logo-img" />
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
                <a href="#0" class="sidenav__menu-link">Все</a>
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
       <div class="wrapper">
           <section class="section__catalog">
                <h1>Каталог</h1>
                <div class="catalog__flex-container">
                    
                </div>
           </section>
          
       </div>
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
            <input type="text" name="last_name" required>
            <p>Почта</p>
            <input type="e-mail" name="email" required>
            <p>Пароль</p>
            <input type="password" name="password" required>
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
    <script type="text/javascript" src="/js/login.js"></script>
    <script type="text/javascript" src="/js/scroll.js"></script>
</body>

</html>
