$(document).ready(function () {

    $(".serv-grid .img-responsive").on("click", function (event) {
        $(this).parent(".serv-grid").find(".grid-image-bg").css("display", "block");
        $(this).parent(".serv-grid").find(".grid-image").css("display", "block");
        $(this).parent(".serv-grid").find(".grid-close").css("display", "block");
    });

    $(".grid-close").on("click", function () {
        var parent = $(this).parent('.grid-image-bg');
        var grandParent = $(parent[0]).parent('.serv-grid');

        $(grandParent[0]).find(".grid-image-bg").css("display", "none");
        $(grandParent[0]).find(".grid-image").css("display", "none");
        $(grandParent[0]).find(".grid-close").css("display", "none");
    });


});

function openMenu(x) {
    x.classList.toggle("change");
};
window.onclick = function (event) {
    if (!event.target.matches('.icon-bars-container')) {

        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
window.onscroll = function () {
    scrollFunction();
    progressBarNav();
};

function scrollFunction() {

    if ($(window).scrollTop() > 400) {
        $('#gototop').fadeIn('slow');
    } else {
        $('#gototop').fadeOut('slow');
    }
};

function progressBarNav() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
};
jQuery(document).ready(function ($) {
    var path = window.location.href;
    $('.cont-list li a').each(function () {
        if (this.href === path) {
            $(this).addClass('active');
        }
    });
});
/*
jQuery(document).ready(function ($) {
    $('select[name ="locale"] option').hover(
        function () {
            jQuery(this).addClass('highlight-option');
        }, function () {
            jQuery(this).removeClass('highlight-option');
        }
    );
});
*/
/*
document.querySelector('html').classList.remove('no-js');
      if (!window.Cypress) {
        const scrollCounter = document.querySelector('.js-scroll-counter');
        AOS.init({
          mirror: true
        });
        document.addEventListener('aos:in', function(e) {
          console.log('in!', e.detail);
        });
        window.addEventListener('scroll', function() {
          scrollCounter.innerHTML = window.pageYOffset;
        });
      }*/