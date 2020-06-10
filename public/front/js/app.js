/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/front/app.js":
/*!***********************************!*\
  !*** ./resources/js/front/app.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// @todo faire que du JS 6 et ne plus utiliser jQuery essayer de créer des composant vue.js utiliser une version lite de jquery
(function (jQuery) {
  //disableCopyAndPaste()
  backToTop();
  navbar();
  switchRadioButton();
  contactWizardStepForm();
})(jQuery);
/**
 * Init Select 2 plugins
 */


function initSelect2() {
  jQuery('select.form-control').each(function () {
    jQuery(this).select2({
      width: 'resolve' // need to override the changed default

    });
  });
}
/**
 * Disable copy and disable paste
 * to all website (front)
 */


function disableCopyAndPaste() {
  jQuery('body').bind('copy paste', function (e) {
    e.preventDefault();
    return false;
  });
}
/**
 * back to top page,
 * remove button to top page,
 * show button to scroll
 */


function backToTop() {
  var _this = this;

  jQuery(window).scroll(function () {
    // Show button after 500px
    var showAfter = 500;

    if (jQuery(_this).scrollTop() > showAfter) {
      jQuery('#back-to-top').fadeIn();
    } else {
      jQuery('#back-to-top').fadeOut();
    }
  }); //Click event to scroll to top

  jQuery('#back-to-top').click(function () {
    jQuery('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;
  });
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
      jQuery('.navigation-wrap').css('position', 'fixed');
      header.removeClass('start-style').addClass("scroll-on");
    } else {
      jQuery('.navigation-wrap').css('position', 'relative');
      header.removeClass("scroll-on").addClass('start-style');
    }
  });
}
/**
 * Custom Switch Button type Radio
 */


function switchRadioButton() {
  jQuery('#switch-radio a').on('click', function () {
    var current = jQuery(this).data('title');
    var toggle = jQuery(this).data('toggle');
    jQuery('#' + toggle).prop('value', current);
    jQuery('a[data-toggle="' + toggle + '"]').not('[data-title="' + current + '"]').removeClass('active').addClass('notActive');
    jQuery('a[data-toggle="' + toggle + '"][data-title="' + current + '"]').removeClass('notActive').addClass('active');
  });
}
/**
 * Wizard Form plugins
 * plugins jquerySmartWizard
 */


function contactWizardStepForm() {
  jQuery('#smartwizard').smartWizard({
    selected: 0,
    // Initial selected step, 0 = first step
    keyNavigation: true,
    // Enable/Disable keyboard navigation(left and right keys are used if enabled)
    autoAdjustHeight: true,
    // Automatically adjust content height
    cycleSteps: false,
    // Allows to cycle the navigation of steps
    backButtonSupport: true,
    // Enable the back button support
    useURLhash: true,
    // Enable selection of the step based on url hash
    lang: {
      // Language variables
      next: 'Suivant',
      previous: 'Précedent'
    },
    toolbarSettings: {
      toolbarPosition: 'bottom',
      // none, top, bottom, both
      toolbarButtonPosition: 'right',
      // left, right
      showNextButton: true,
      // show/hide a Next button
      showPreviousButton: true,
      // show/hide a Previous button
      toolbarExtraButtons: [jQuery('<button></button>').text('Envoyer').addClass('boxed-btn3').on('click', function () {
        alert('Finsih button click');
      })]
    },
    anchorSettings: {
      anchorClickable: false,
      // Enable/Disable anchor navigation
      enableAllAnchors: false,
      // Activates all anchors clickable all times
      markDoneStep: true,
      // add done css
      markAllPreviousStepsAsDone: true,
      // When a step selected by url hash, all previous steps are marked done
      removeDoneStepOnNavigateBack: true,
      // While navigate back done step after active step will be cleared
      enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation

    },
    contentURL: null,
    // content url, Enables Ajax content loading. can set as data data-content-url on anchor
    disabledSteps: [],
    // Array Steps disabled
    hiddenSteps: [],
    // an array of step numbers to be hidden
    errorSteps: [],
    // Highlight step with errors
    theme: 'dots',
    transitionEffect: 'fade',
    // Effect on navigation, none/slide/fade
    transitionSpeed: '400'
  }); // Custom Btn

  jQuery('button.sw-btn-next').removeClass('btn btn-secondary').addClass('boxed-btn');
  jQuery('button.sw-btn-prev').removeClass('btn btn-secondary').addClass('boxed-btn'); // init Disabled button finish

  if (jQuery('button.sw-btn-next').hasClass('disabled')) {
    jQuery('button.sw-btn-next').hide();
    jQuery('.sw-btn-group-extra').show(); // show the button extra only in the last page
  } else {
    jQuery('button.sw-btn-next').show();
    jQuery('.sw-btn-group-extra').hide();
  } // (Events) Enabled button finish to next is disabled


  jQuery("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection) {
    if (jQuery('button.sw-btn-next').hasClass('disabled')) {
      jQuery('button.sw-btn-next').hide();
      jQuery('.sw-btn-group-extra').show(); // show the button extra only in the last page
    } else {
      jQuery('button.sw-btn-next').show();
      jQuery('.sw-btn-group-extra').hide();
    }
  });
}

/***/ }),

/***/ 1:
/*!*****************************************!*\
  !*** multi ./resources/js/front/app.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /app/resources/js/front/app.js */"./resources/js/front/app.js");


/***/ })

/******/ });