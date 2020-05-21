(function (jQuery) {
    //disableCopyAndPaste()
    backToTop()
    navbar()
    switchRadioButton()
    contactWizardStepForm()

})(jQuery)

/**
 * Init Select 2 plugins
 */
function initSelect2() {
    jQuery('select.form-control').each(function () {
        jQuery(this).select2({
            width: 'resolve' // need to override the changed default
        })
    })
}

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
 * Custom Switch Button type Radio
 */
function switchRadioButton() {
    jQuery('#switch-radio a').on('click', function () {
        let current = jQuery(this).data('title')
        let toggle = jQuery(this).data('toggle')
        jQuery('#' + toggle).prop('value', current)

        jQuery('a[data-toggle="' + toggle + '"]').not('[data-title="' + current + '"]').removeClass('active').addClass('notActive')
        jQuery('a[data-toggle="' + toggle + '"][data-title="' + current + '"]').removeClass('notActive').addClass('active')
    })
}

/**
 * Wizard Form plugins
 * plugins jquerySmartWizard
 */
function contactWizardStepForm() {
    jQuery('#smartwizard').smartWizard({
        selected: 0,  // Initial selected step, 0 = first step
        keyNavigation: true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
        autoAdjustHeight: true, // Automatically adjust content height
        cycleSteps: false, // Allows to cycle the navigation of steps
        backButtonSupport: true, // Enable the back button support
        useURLhash: true, // Enable selection of the step based on url hash
        lang: {  // Language variables
            next: 'Suivant',
            previous: 'Précedent'
        },
        toolbarSettings: {
            toolbarPosition: 'bottom', // none, top, bottom, both
            toolbarButtonPosition: 'right', // left, right
            showNextButton: true, // show/hide a Next button
            showPreviousButton: true, // show/hide a Previous button
            toolbarExtraButtons: [
                jQuery('<button></button>').text('Envoyer')
                    .addClass('boxed-btn3')
                    .on('click', function () {
                        alert('Finsih button click');
                    })
            ]
        },
        anchorSettings: {
            anchorClickable: false, // Enable/Disable anchor navigation
            enableAllAnchors: false, // Activates all anchors clickable all times
            markDoneStep: true, // add done css
            markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
            removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
            enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
        },
        contentURL: null, // content url, Enables Ajax content loading. can set as data data-content-url on anchor
        disabledSteps: [],    // Array Steps disabled
        hiddenSteps: [],    // an array of step numbers to be hidden
        errorSteps: [],    // Highlight step with errors
        theme: 'dots',
        transitionEffect: 'fade', // Effect on navigation, none/slide/fade
        transitionSpeed: '400'
    })

    // Custom Btn
    jQuery('button.sw-btn-next').removeClass('btn btn-secondary').addClass('boxed-btn')
    jQuery('button.sw-btn-prev').removeClass('btn btn-secondary').addClass('boxed-btn')

    // init Disabled button finish
    if (jQuery('button.sw-btn-next').hasClass('disabled')) {
        jQuery('button.sw-btn-next').hide()
        jQuery('.sw-btn-group-extra').show() // show the button extra only in the last page
    } else {
        jQuery('button.sw-btn-next').show()
        jQuery('.sw-btn-group-extra').hide()
    }

    // (Events) Enabled button finish to next is disabled
    jQuery("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection) {
        if (jQuery('button.sw-btn-next').hasClass('disabled')) {
            jQuery('button.sw-btn-next').hide()
            jQuery('.sw-btn-group-extra').show() // show the button extra only in the last page
        } else {
            jQuery('button.sw-btn-next').show()
            jQuery('.sw-btn-group-extra').hide()
        }
    })
}
