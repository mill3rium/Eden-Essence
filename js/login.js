$('.sidenav__register-button').click(function() { // Вызываем функцию по нажатию на кнопку
    var popup_id = $('#' + $(this).attr("rel")); // Связываем rel и popup_id
    $(popup_id).show(); // Открываем окно
    $('.overlay__pop-up').show(); // Открываем блок заднего фона
})
$('.sidenav__login-button').click(function() { // Вызываем функцию по нажатию на кнопку
    var popup_id = $('#' + $(this).attr("rel")); // Связываем rel и popup_id
    $(popup_id).show(); // Открываем окно
    $('.overlay__pop-up').show(); // Открываем блок заднего фона
})
$('.overlay__pop-up').click(function() { // Обрабатываем клик по заднему фону
    $('.overlay__pop-up, .login, .register').hide(); // Скрываем затемнённый задний фон и основное всплывающее окно
})
