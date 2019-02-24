$(document).ready(function () {
    if (window.location.href.indexOf("order") > -1) {
        $('.services-nav ul li:first').addClass('active');
        $('.tab-content:not(:first)').hide();
    }
    $('.services-nav ul li a').click(function (event) {
        event.preventDefault();
        var content = $(this).attr('href');

        if (window.location.href.indexOf("order") > -1) {

            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');
            $(content).show();
            $(content).siblings('.tab-content').hide();
        }
        else {
            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');
            window.location = content;
        }

    });
});
$(document).ready(function () {
    $('#bar').click(function () {
        $(".left-nav").fadeToggle();
    });
});
$(document).ready(function () {
    $('#services-category').click(function () {
        $(".services-nav").fadeToggle();
    });
});
/*
var fixmeTop = $('#bar').offset().top;       // get initial position of the element

$(window).scroll(function() {                  // assign scroll event listener

    var currentScroll = $(window).scrollTop(); // get current position

    if (currentScroll >= fixmeTop) {           // apply position: fixed if you
        $('#bar').css({                      // scroll to that element or below it
            position: 'fixed',
        });
    } else {                                   // apply position: static
        $('#bar').css({                      // if you scroll above it
            position: 'static'
        });
    }

});*/