function stickNavBar(windowPos, navbarPos) {
    const elNav = $('#navigation');
    const marginIn = '-' + (navbarPos + 35) + 'px';
    const marginOut = '-' + (navbarPos - 109) + 'px';

    if (windowPos > navbarPos) {
        elNav.removeClass('absolute');
        elNav.addClass('fixed');
        elNav.css('margin-top', marginIn);
    } else if (windowPos < navbarPos) {
        elNav.removeClass('fixed');
        elNav.addClass('absolute');
        elNav.css('margin-top', marginOut);
    }

}

$(function() {
    $(window).scroll(() => {
        const windowPos = $(window).scrollTop();
        const navbarPos = $('#navigation-anchor').offset().top;
        stickNavBar(windowPos, navbarPos)
    });

    $('.testimonial_owlCarousel').owlCarousel({
        loop:true,
        margin:10,
        dots:false,
        nav:true,
        autoplay:false,
        autoplayTimeout:4000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
});