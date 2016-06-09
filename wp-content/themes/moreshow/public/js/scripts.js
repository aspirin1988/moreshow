(function($) {
    "use strict";
    UIkit.on('domready.uk.dom', function() {
        //Change slideshow on focuschange of slider
        var slideshow = UIkit.slideshow('#slideshow');
        $('#slider').on('focusitem.uk.slider', function(event, index, item, slider) {
            slideshow.show($(item).data('ukSlideshowItem'));
        });
    });
}(jQuery));

//other way to reach component on init
UIkit.on('init.uk.component', function(e, name, component) {
    if (name === 'slideshow') {
        UIkit.$('#autoplay').on('change.uk.button', function(e, active) {
            component[(active ? 'start' : 'stop')]();
        });
    }
});