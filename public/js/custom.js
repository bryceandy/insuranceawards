// init controller
let controller = new ScrollMagic.Controller();

// build scene
new ScrollMagic.Scene({
    triggerElement: '.navigation',
    triggerHook: 'onLeave',
    reverse: true
})
    .setPin('.navigation')
    .addTo(controller);

//jquery
$(document).ready(function () {
    //menu button navigation
    $('.menuButton').click(function () {
        $('.navigation').addClass('showMenu')
    });
    $('.fa-times').click(function () {
        $('.navigation').removeClass('showMenu')
    });

    //committee list
    $('#committee').hover(function () {
        $(this).addClass('showBlock')

    }, function () {
        $(this).removeClass('showBlock')
    }).click(function () {
        $(this).toggleClass('showBlock')
    });

    //committee list
    $('#sponsor').hover(function () {
        $(this).addClass('showBlock')

    }, function () {
        $(this).removeClass('showBlock')
    }).click(function () {
        $(this).toggleClass('showBlock')
    });
});
