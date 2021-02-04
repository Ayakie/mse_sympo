$(function() {
    // タイトルアニメーション
    // 右からの遷移の場合、親要素のwidthが崩れる
    var showTime = function() {
        $('#event-time').transition('fly right');
    };
    $('#page-title').transition({
        animation: 'fly right',
        duration: 800,
        onComplete: showTime
    });


    $('.card').popup({
        inline: true,
        position: 'bottom center'
    });
});