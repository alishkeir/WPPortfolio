import $ from 'jquery';

//? Smooth scroll

$(document).on('click', '.nav__link, .scrollto', function (e) {
    if (
        window.location.pathname.replace(/^\//, '') ===
            this.pathname.replace(/^\//, '') &&
        window.location.hostname === this.hostname
    ) {
        e.preventDefault();
        var target = $(this.hash);
        if (target.length) {
            var scrollto = target.offset().top;
            console.log(scrollto);
            $('html, body').animate(
                {
                    scrollTop: scrollto,
                },
                30
            );
            if ($('.nav').hasClass('show')) {
                $('.nav').removeClass('show');
            }

            if ($('body').hasClass('no-scroll')) {
                $('body').removeClass('no-scroll');
            }

            if ($('html').hasClass('no-scroll')) {
                $('html').removeClass('no-scroll');
            }
        }
    }
});

//? Scroll icon opacity
$(window).on('scroll', function () {
    let opacity = Math.round(
        $(window).outerHeight() / $(window).scrollTop() - 1
    );

    if (opacity > 10) {
        opacity = 10;
    }
    opacity /= 10;
    $('#scroll-container').css({ opacity: opacity }); // use a better formula for better fading
});

//? Mobile Header Menu
$(document).on('click', '#toggle-menu,#close-menu', () => {
    $('#nav-menu').toggleClass('show');
    $('body').toggleClass('no-scroll');
    $('html').toggleClass('no-scroll');
});

$(document).on('click', (e) => {
    if (
        e.target.className !== 'nav__link' &&
        e.target.className !== 'nav__item' &&
        e.target.className !== 'nav__list' &&
        e.target.id !== 'nav-menu' &&
        e.target.id !== 'toggle-menu'
    ) {
        $('#nav-menu').removeClass('show');
        $('body').removeClass('no-scroll');
        $('html').removeClass('no-scroll');
    }
});
