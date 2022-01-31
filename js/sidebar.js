$(document).ready(function(){
  $(".header__burger-menu, .sidenav__close-btn, .sidenav__buttons-btn").click(function(){
    if(!$("#mySidenav").hasClass("opened"))
    {
      $("#mySidenav").css({ "left": "0" });
      $(".header__burger-menu").css({"display":"none"});
      $("#mySidenav").addClass("opened");
    }
    else
    {
      $("#mySidenav").css({ "left": "-999px" });
      $(".header__burger-menu").css({"display":"block"});
      $("#mySidenav").removeClass("opened");
    }
  });
});
