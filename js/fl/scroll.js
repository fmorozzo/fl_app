$(document).ready(function () {

    checkBarBG();
    var menuHeight = $('.navbar').height();
    // Select all links with hashes
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            $('.navbar-nav .nav-item').removeClass('active');
            $(this).parent().addClass('active');
            // On-page links
            if (
                location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') &&
                location.hostname === this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top //- menuHeight
                    }, 500, function () {
                        //hide menu
                        $('.navbar-collapse').removeClass('show');
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }

            }
        });
    $('.navbar-toggler').click(function(){
       if(!$('.navbar-light').lengh){
           $('.navbar').addClass('bg-light navbar-light');
       }
    });


    $(window).scroll(function () {
        checkBarBG();
    });

});

function checkBarBG() {
    var offset_t = $("#expertise").offset().top - $(window).scrollTop();
    if (offset_t < 100) {
        $('.navbar').addClass('bg-light navbar-light');
    } else {
        $('.navbar').removeClass('bg-light navbar-light');
    }
    if ($(window).scrollTop() > 100) {
        $('.navbar').addClass('bg-light navbar-light');
    } else {
        $('.navbar').removeClass('bg-light navbar-light');
    }
}
