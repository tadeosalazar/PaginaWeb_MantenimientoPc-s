//animación
$(window).on('scroll', function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 50) {
        $('.main-section').addClass('hide-on-scroll');
    } else {
        $('.main-section').removeClass('hide-on-scroll');
    }
});
