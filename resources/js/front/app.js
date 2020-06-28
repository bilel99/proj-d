// @todo faire que du JS 6 et ne plus utiliser jQuery essayer de créer des composant vue.js utiliser une version lite de jquery

(function (jQuery) {
    //disableCopyAndPaste()
    backToTop()
    navbar()

    /**
     * Call animated Front website
     */
    /*aboutAnimate()
    serviceAnimate()
    appointementAnimate()
    pricesAnimate()
    medicalHouseAnimate()
    sectionContactAnimation()
    informationAnimate()*/
    detailPageAppointement()
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

/**
 * Create animation to website
 * Remove opacity and addClass
 * to animate.css plugins
 */
function aboutAnimate() {
    /**
     * section 1 (#About)
     */
    jQuery(window).on('scroll', function () {
        if (jQuery(window).scrollTop() >= jQuery('#about').offset().top + jQuery('#about').outerHeight() - window.innerHeight) {
            console.log('You reached the end of the DIV about')

            // remove Opacity and add class animation
            let title = jQuery('#about .page-title')
            title.css({opacity: 1})
            title.addClass('animate__animated animate__zoomIn')

            let hr = jQuery('#about .page-botm-line')
            hr.css({opacity: 1})
            hr.addClass('animate__animated animate__zoomIn')

            setInterval(() => {
                let content = jQuery('#about .page-content')
                content.css({opacity: 1})
                content.addClass('animate__animated animate__backInLeft')
            }, 150)

            setInterval(() => {
                let alert = jQuery('#about .page-alert-message')
                alert.css({opacity: 1})
                alert.addClass('animate__animated animate__backInLeft')
            }, 250)

            setInterval(() => {
                let medias = jQuery('#about .page-media')
                medias.css({opacity: 1})
                medias.addClass('animate__animated animate__backInRight')

                let btn = jQuery('#about .page-btn')
                btn.css({opacity: 1})
                btn.addClass('animate__animated animate__zoomIn')
            }, 350)
        }
    });
}

/**
 * Create animation to website
 * Remove opacity and addClass
 * to animate.css plugins
 */
function serviceAnimate() {
    /**
     * section 2 (#service)
     */
    jQuery(window).on('scroll', function () {
        if (jQuery(window).scrollTop() >= jQuery('#service').offset().top + jQuery('#service').outerHeight() - window.innerHeight) {
            console.log('You reached the end of the DIV service')

            // remove Opacity and add class animation
            let title = jQuery('#service .page-title')
            title.css({opacity: 1})
            title.addClass('animate__animated animate__zoomIn')

            let hr = jQuery('#service .page-botm-line')
            hr.css({opacity: 1})
            hr.addClass('animate__animated animate__zoomIn')

            setInterval(() => {
                let content = jQuery('#service .page-content')
                content.css({opacity: 1})
                content.addClass('animate__animated animate__backInLeft')
            }, 150)

            setInterval(() => {
                let service = jQuery('#service .service')
                service.css({opacity: 1})
                service.addClass('animate__animated animate__backInRight')
            }, 250)
        }
    });
}

/**
 * Create animation to website
 * Remove opacity and addClass
 * to animate.css plugins
 */
function appointementAnimate() {
    /**
     * section 3 (#make-appointment)
     */
    jQuery(window).on('scroll', function () {
        if (jQuery(window).scrollTop() >= jQuery('#make-appointment').offset().top + jQuery('#make-appointment').outerHeight() - window.innerHeight) {
            console.log('You reached the end of the DIV make-appointment')

            // remove Opacity and add class animation
            let title = jQuery('#make-appointment .page-title')
            title.css({opacity: 1})
            title.addClass('animate__animated animate__zoomIn')

            let hr = jQuery('#make-appointment .page-botm-line')
            hr.css({opacity: 1})
            hr.addClass('animate__animated animate__zoomIn')

            setInterval(() => {
                let content = jQuery('#make-appointment .page-content')
                content.css({opacity: 1})
                content.addClass('animate__animated animate__backInLeft')
            }, 150)

            setInterval(() => {
                let alert = jQuery('#make-appointment .page-alert-message')
                alert.css({opacity: 1})
                alert.addClass('animate__animated animate__backInLeft')
            }, 250)

            setInterval(() => {
                let medias = jQuery('#make-appointment .page-media')
                medias.css({opacity: 1})
                medias.addClass('animate__animated animate__backInRight')

                let btn = jQuery('#make-appointment .page-btn')
                btn.css({opacity: 1})
                btn.addClass('animate__animated animate__zoomIn')
            }, 350)
        }
    });
}

/**
 * Create animation to website
 * Remove opacity and addClass
 * to animate.css plugins
 */
function pricesAnimate() {
    /**
     * section 4 (#prices)
     */
    jQuery(window).on('scroll', function () {
        if (jQuery(window).scrollTop() >= jQuery('#prices').offset().top + jQuery('#prices').outerHeight() - window.innerHeight) {
            console.log('You reached the end of the DIV prices')

            // remove Opacity and add class animation
            let title = jQuery('#prices .page-title')
            title.css({opacity: 1})
            title.addClass('animate__animated animate__zoomIn')

            let hr = jQuery('#prices .page-botm-line')
            hr.css({opacity: 1})
            hr.addClass('animate__animated animate__zoomIn')

            setInterval(() => {
                let content = jQuery('#prices .page-content')
                content.css({opacity: 1})
                content.addClass('animate__animated animate__backInLeft')
            }, 150)

            setInterval(() => {
                let alert = jQuery('#prices .page-alert-message')
                alert.css({opacity: 1})
                alert.addClass('animate__animated animate__backInLeft')
            }, 250)

            setInterval(() => {
                let table = jQuery('#prices .prices-table')
                table.css({opacity: 1})
                table.addClass('animate__animated animate__backInRight')

                let btn = jQuery('#prices .page-btn')
                btn.css({opacity: 1})
                btn.addClass('animate__animated animate__zoomIn')
            }, 350)
        }
    });
}

/**
 * Create animation to website
 * Remove opacity and addClass
 * to animate.css plugins
 */
function medicalHouseAnimate() {
    /**
     * section 5 (#medical-house)
     */
    jQuery(window).on('scroll', function () {
        if (jQuery(window).scrollTop() >= jQuery('#medical-house').offset().top + jQuery('#medical-house').outerHeight() - window.innerHeight) {
            console.log('You reached the end of the DIV prices')

            // remove Opacity and add class animation
            let title = jQuery('#medical-house .page-title')
            title.css({opacity: 1})
            title.addClass('animate__animated animate__zoomIn')

            let hr = jQuery('#medical-house .page-botm-line')
            hr.css({opacity: 1})
            hr.addClass('animate__animated animate__zoomIn')

            setInterval(() => {
                let medicalHouse = jQuery('#medical-house .medical-house')
                medicalHouse.css({opacity: 1})
                medicalHouse.addClass('animate__animated animate__zoomIn')
            }, 250)
        }
    });
}

/**
 * Create animation to website
 * Remove opacity and addClass
 * to animate.css plugins
 */
function informationAnimate() {
    /**
     * section 6 (#information)
     */
    jQuery(window).on('scroll', function () {
        if (jQuery(window).scrollTop() >= jQuery('#information').offset().top + jQuery('#information').outerHeight() - window.innerHeight) {
            console.log('You reached the end of the DIV prices')

            // remove Opacity and add class animation
            let title = jQuery('#information .page-title')
            title.css({opacity: 1})
            title.addClass('animate__animated animate__zoomIn')

            let hr = jQuery('#information .page-botm-line')
            hr.css({opacity: 1})
            hr.addClass('animate__animated animate__zoomIn')

            setInterval(() => {
                let content = jQuery('#information .information')
                content.css({opacity: 1})
                content.addClass('animate__animated animate__backInLeft')
            }, 150)

            setInterval(() => {
                let medias = jQuery('#information .page-media')
                medias.css({opacity: 1})
                medias.addClass('animate__animated animate__backInRight')
            }, 350)
        }
    });
}

function sectionContactAnimation() {
    /**
     * section 7 (#transition section contact)
     */
    jQuery(window).on('scroll', function () {
        if (jQuery(window).scrollTop() >= jQuery('#section-transition-contact').offset().top + jQuery('#section-transition-contact').outerHeight() - window.innerHeight) {
            // remove Opacity and add class animation
            let btn = jQuery('#section-transition-contact .boxed-btn3')
            btn.css({opacity: 1})
            btn.addClass('animate__animated animate__zoomIn')
        }
    });
}

/**
 * Create animation to website
 * Remove opacity and addClass
 * to animate.css plugins
 */
function detailPageAppointement() {
    /**
     * appointement (#detail-page)
     */
    jQuery(window).on('scroll', function () {
        if (jQuery(window).scrollTop() >= jQuery('#detail-page').offset().top + jQuery('#detail-page').outerHeight() - window.innerHeight) {
            console.log('You reached the end of the DIV detail-page')

            // remove Opacity and add class animation
            let btnBack = jQuery('#detail-page .back-page')
            btnBack.css({opacity: 1})
            btnBack.addClass('animate__animated animate__zoomIn')

            setInterval(() => {
                let section1 = jQuery('#detail-page .appointement-section-1')
                section1.css({opacity: 1})
                section1.addClass('animate__animated animate__backInLeft')
            }, 250)

            setInterval(() => {
                let section1 = jQuery('#detail-page .appointement-section-2')
                section1.css({opacity: 1})
                section1.addClass('animate__animated animate__backInRight')
            }, 350)

            setInterval(() => {
                let section1 = jQuery('#detail-page .appointement-section-3')
                section1.css({opacity: 1})
                section1.addClass('animate__animated animate__slideInUp')
            }, 450)
        }
    });
}
