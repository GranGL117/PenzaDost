$(document).ready(function(){
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        prevArrow: "<button type=\"button\" class=\"slick-prev\"><img class='slider_img_btn' src='../img/left-arrow.png'></button>",
        nextArrow: "<button type=\"button\" class=\"slick-next\"><img class='slider_img_btn' src='../img/right-arrow.png'></button>",
    });
});