$(document).ready(function(){
    $(".button-collapse").sideNav();
    edge: 'right'
});(jQuery);

$(document).ready(function(){
    $('.carousel.carousel-slider').carousel({fullWidth: true});
});
autoplay()
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 6000);
}

$(document).ready(function(){
    $('.parallax').parallax();
});

$(document).ready(function(){
    $(".dropdown-button").dropdown({ hover: false });
});