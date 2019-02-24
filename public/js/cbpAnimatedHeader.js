/**
 * cbpAnimatedHeader.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
var cbpAnimatedHeader = (function() {

    var docElem = document.documentElement,
        header = document.querySelector( '.navbar-fixed-top' ),
        didScroll = false,
        changeHeaderOn = 10;

    function init() {
        window.addEventListener( 'scroll', function( event ) {
            if( !didScroll ) {
                didScroll = true;
                setTimeout( scrollPage, 70 );
            }
        }, false );
    }

    function scrollPage() {
        var sy = scrollY();
        if ( sy >= changeHeaderOn ) {

            classie.remove( header, 'navbar-expanded' );
            $("#left-logo").removeClass('hidden');
            $(".progress-container").removeClass('hidden');

        }
        else {

            classie.add( header, 'navbar-expanded' );
            $("#left-logo").addClass('hidden');
            $(".progress-container").addClass('hidden');

        }

        didScroll = false;
    }

    function scrollY() {
        return window.pageYOffset || docElem.scrollTop;
    }

    init();

})();
/*
$(document).ready(function(){
    $(document).click(function(event){
        var header = document.querySelector('.navbar-fixed-top');
        var clickover = $(event.target);
        var opened = $(".navbar-collapse").hasClass("navbar-collapse collapsing");
        if(opened ===true && !clickover.hasClass("navbar-toggle")){
            classie.add( this.head, 'navbar-collapse' );
        }
    });
});*/