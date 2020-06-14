// @todo faire que du JS 6 et ne plus utiliser jQuery essayer de créer des composant vue.js utiliser une version lite de jquery

(function (jQuery) {
    //disableCopyAndPaste()
    backToTop()
    navbar()
})(jQuery)

/**
 * Disable copy and disable paste
 * to all website (front)
 */
function disableCopyAndPaste() {
    jQuery('body').bind('copy paste', (e) => {
        e.preventDefault()
        return false
    });
}

/**
 * back to top page,
 * remove button to top page,
 * show button to scroll
 */
function backToTop() {
    jQuery(window).scroll(() => {
        // Show button after 500px
        let showAfter = 500;
        if (jQuery(this).scrollTop() > showAfter) {
            jQuery('#back-to-top').fadeIn()
        } else {
            jQuery('#back-to-top').fadeOut()
        }
    })

    //Click event to scroll to top
    jQuery('#back-to-top').click(() => {
        jQuery('html, body').animate({scrollTop: 0}, 800)
        return false
    })
}

/**
 * Nav bar
 */
function navbar() {
    // TOP Menu Sticky
    var header = jQuery(".start-style");
    jQuery(window).scroll(function () {
        var scroll = jQuery(window).scrollTop();

        if (scroll >= 10) {
            jQuery('.navigation-wrap').css('position', 'fixed')
            header.removeClass('start-style').addClass("scroll-on");
        } else {
            jQuery('.navigation-wrap').css('position', 'relative')
            header.removeClass("scroll-on").addClass('start-style');
        }
    })
}
