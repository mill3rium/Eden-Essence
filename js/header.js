var scrolled;
window.onscroll = function() {
    scrolled = window.pageYOffset || document.documentElement.scrollTop;
    if (scrolled > 150)
    {
        $(".header").css({ "background": "white" }),
            $(".header__logo-img").attr({ "src": "../img/logo/logo-black.svg" }),
            $(".header__burger-menu-line-1").css({ "background-color": "black" }),
            $(".header__burger-menu-line-2").css({ "background-color": "black" }),
            $(".header__burger-menu-line-3").css({ "background-color": "black" }),
            $(".header__search-button").css({ "color": "black" }),
            $(".header__search-input").css({ "border-bottom": "1px solid #000", "color": "#000" })
    }
    else
    {
        $(".header").css({ "background": "transparent" }),
            $(".header__logo-img").attr({ "src": "../img/logo/logo-white.svg" }),
            $(".header__burger-menu-line-1").css({ "background-color": "white" }),
            $(".header__burger-menu-line-2").css({ "background-color": "white" }),
            $(".header__burger-menu-line-3").css({ "background-color": "white" }),
            $(".header__search-button").css({ "color": "white" }),
            $(".header__search-input").css({ "border-bottom": "1px solid #fff", "color": "#fff" }),
            $(".scroll-to-up").css({"display":"none"});

    }
    if(scrolled > 400)
    {
      $(".scroll-to-up").css({"display":"block"});
    }
}
