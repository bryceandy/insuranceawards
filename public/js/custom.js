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

//another scene
new ScrollMagic.Scene({
    triggerElement: '#landingMain',
    triggerHook: 'onEnter',
})
    .setTween(TweenMax.from('#landingMain p', .6, {x: 1, autoAlpha: 0.0, ease: Power0.easeIn}))
    .addTo(controller);

//another scene
new ScrollMagic.Scene({
    triggerElement: '.navigation',
    triggerHook: 'onLeave',
    duration: window.innerHeight * .3
})
    .setPin('#landingMain p' )
    .setTween(TweenMax.to('#landingMain p #theme', .1, {autoAlpha: 0.0}))
    .addTo(controller);

//another scene
new ScrollMagic.Scene({
    triggerElement: '#whatWeDo',
    triggerHook: 'onCenter',
    reverse: false
})
    .setTween(TweenMax.staggerFrom('.theProcess span', .5, {x: 10, autoAlpha: 0.0}, .5))
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: '#insurancePlayers',
    triggerHook: 'onCenter',
    reverse: false
})
    .setTween(TweenMax.from('#insurancePlayers img', .4, {y: 5, autoAlpha: 0.0}))
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
