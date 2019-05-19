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
