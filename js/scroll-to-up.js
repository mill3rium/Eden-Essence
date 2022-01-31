var scrolled1;
window.onscroll = function() {
    scrolled1 = window.pageYOffset || document.documentElement.scrollTop;
    if (scrolled1 > 250)
    {
        $(".scroll-to-up").css({"display":"block"})
    }
    else
    {
        $(".scroll-to-up").css({"display":"none"})
    }
}