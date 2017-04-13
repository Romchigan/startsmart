jQuery(function ($) {
    var width = $('.recent-post-img').width();
    $('.recent-post-img').css('height', width*0.7);
    $( window ).resize(function() {
        var width = $('.recent-post-img').width();
        $('.recent-post-img').css('height', width*0.7);
    });
    console.log ('HIII');
});