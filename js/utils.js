// スムーススクロール
$(function() {
$('a[href^="#"]').click(function(){
    var speed = 500;
    var adjust = 50;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - adjust;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
    });

// show dropdown on hover
$('.ui.dropdown').dropdown({
    on: 'hover'
});

$('.card').popup({
    inline: true,
    position: 'bottom center'
});

$('.dimmable.image').dimmer({
    on: 'hover'
});
});