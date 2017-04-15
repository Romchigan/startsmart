jQuery(function ($) {
    var width = $('.recent-post-img').width();
    $('.recent-post-img').css('height', width*0.7);
    $( window ).resize(function() {
        var width = $('.recent-post-img').width();
        $('.recent-post-img').css('height', width*0.7);
    });
    console.log ('HIII');

});

offset = 0;
$('#primary-menu li a[href^="#"]').click(function(event) {

    // Prevent from default action to intitiate
    event.preventDefault();

    //remove active from all anchor and add it to the clicked anchor
    $('#primary-menu li a[href^="#"]').removeClass("active");
    $(this).addClass('active');

    // The id of the section we want to go to
    var anchorId = $(this).attr('href');

    // Our scroll target : the top position of the section that has the id referenced by our href
    var target = $(anchorId).offset().top - 50;
    console.log(target);

    $('html, body').stop().animate({ scrollTop: target }, 600, function () {
        window.location.hash = anchorId;
    });

    return false;
});

//check the pages when scroll event occurs
$(window).scroll(function(){
    // Get the current vertical position of the scroll bar
    position = $(this).scrollTop();
    $('#primary-menu li a[href^="#"]').each(function(){
        var anchorId = $(this).attr('href');
        var target = $(anchorId).offset().top - 100;
        // check if the document has crossed the page
        console.log(position,target);
        if(position>=target){
            //remove active from all anchor and add it to the clicked anchor
            $('#primary-menu li a[href^="#"]').removeClass("active");
            $(this).addClass('active');
        }
    })
});
$('.navbar-collapse ul li a').on('click', function () {
    $('.navbar-collapse').removeClass('show');
});


$(function(){
    //set our scroll state after dom ready
    $(window).scroll();
});
