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

var homepageUrl = document.querySelector('#app').getAttribute('data-homepage-url') + '/';
var appointementUrl = document.querySelector('#app').getAttribute('data-appointement-url');
var pricesUrl = document.querySelector('#app').getAttribute('data-prices-url');
var contactsUrl = document.querySelector('#app').getAttribute('data-contacts-url');

(function (jQuery) {
  disableCopyAndPaste();
  smoothScrollingToHash();
  backToTop();
  navbar();
  /**
   * Call animated Front website
   */

  aboutAnimate();
  serviceAnimate();
  appointementAnimate();
  pricesAnimate();
  medicalHouseAnimate();
  sectionContactAnimation();
  informationAnimate();
})(jQuery);
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
 * Smooth scrolling to page anchor on click
 */


function smoothScrollingToHash() {
  jQuery("a[href*='#']:not([href='#'])").click(function () {
    if (location.hostname == this.hostname && this.pathname.replace(/^\//, "") == location.pathname.replace(/^\//, "")) {
      var anchor = jQuery(this.hash);
      anchor = anchor.length ? anchor : jQuery("[name=" + this.hash.slice(1) + "]");

      if (anchor.length) {
        jQuery("html, body").animate({
          scrollTop: anchor.offset().top
        }, 1500);
      }
    }
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
/*********************************************************************************
 *                        ANIMATIONS                                             *
 ********************************************************************************/

/**
 * Create animation to website
 * Remove opacity and addClass
 * to animate.css plugins
 */


function aboutAnimate() {
  /**
   * section 1 (#About)
   */
  if (window.location.href !== appointementUrl && window.location.href !== pricesUrl && window.location.href !== contactsUrl) {
    jQuery(window).on('scroll', function () {
      if (jQuery('#about .page-title').css('opacity') == 1) {
        return;
      }

      if (jQuery(window).scrollTop() >= jQuery('#about').offset().top + jQuery('#about').outerHeight() - window.innerHeight - 400) {
        // remove Opacity and add class animation
        var title = jQuery('#about .page-title');
        title.css({
          opacity: 1
        });
        title.addClass('animate__animated animate__zoomIn');
        var hr = jQuery('#about .page-botm-line');
        hr.css({
          opacity: 1
        });
        hr.addClass('animate__animated animate__zoomIn');
        setInterval(function () {
          var content = jQuery('#about .page-content');
          content.css({
            opacity: 1
          });
          content.addClass('animate__animated animate__backInLeft');
        }, 100);
        setInterval(function () {
          var alert = jQuery('#about .page-alert-message');
          alert.css({
            opacity: 1
          });
          alert.addClass('animate__animated animate__backInLeft');
        }, 150);
        setInterval(function () {
          var medias = jQuery('#about .page-media');
          medias.css({
            opacity: 1
          });
          medias.addClass('animate__animated animate__backInRight');
          var btn = jQuery('#about .page-btn');
          btn.css({
            opacity: 1
          });
          btn.addClass('animate__animated animate__zoomIn');
        }, 200);
      }
    });
  }
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
  if (window.location.href !== appointementUrl && window.location.href !== pricesUrl && window.location.href !== contactsUrl) {
    jQuery(window).on('scroll', function () {
      if (jQuery('#service .page-title').css('opacity') == 1) {
        return;
      }

      if (jQuery(window).scrollTop() >= jQuery('#service').offset().top + jQuery('#service').outerHeight() - window.innerHeight - 400) {
        // remove Opacity and add class animation
        var title = jQuery('#service .page-title');
        title.css({
          opacity: 1
        });
        title.addClass('animate__animated animate__zoomIn');
        var hr = jQuery('#service .page-botm-line');
        hr.css({
          opacity: 1
        });
        hr.addClass('animate__animated animate__zoomIn');
        setInterval(function () {
          var content = jQuery('#service .page-content');
          content.css({
            opacity: 1
          });
          content.addClass('animate__animated animate__backInLeft');
        }, 100);
        setInterval(function () {
          var service = jQuery('#service .service');
          service.css({
            opacity: 1
          });
          service.addClass('animate__animated animate__backInRight');
        }, 150);
      }
    });
  }
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
  if (window.location.href !== appointementUrl && window.location.href !== pricesUrl && window.location.href !== contactsUrl) {
    jQuery(window).on('scroll', function () {
      if (jQuery('#make-appointment .page-title').css('opacity') == 1) {
        return;
      }

      if (jQuery(window).scrollTop() >= jQuery('#make-appointment').offset().top + jQuery('#make-appointment').outerHeight() - window.innerHeight - 400) {
        // remove Opacity and add class animation
        var title = jQuery('#make-appointment .page-title');
        title.css({
          opacity: 1
        });
        title.addClass('animate__animated animate__zoomIn');
        var hr = jQuery('#make-appointment .page-botm-line');
        hr.css({
          opacity: 1
        });
        hr.addClass('animate__animated animate__zoomIn');
        setInterval(function () {
          var content = jQuery('#make-appointment .page-content');
          content.css({
            opacity: 1
          });
          content.addClass('animate__animated animate__backInLeft');
        }, 100);
        setInterval(function () {
          var alert = jQuery('#make-appointment .page-alert-message');
          alert.css({
            opacity: 1
          });
          alert.addClass('animate__animated animate__backInLeft');
        }, 150);
        setInterval(function () {
          var medias = jQuery('#make-appointment .page-media');
          medias.css({
            opacity: 1
          });
          medias.addClass('animate__animated animate__backInRight');
          var btn = jQuery('#make-appointment .page-btn');
          btn.css({
            opacity: 1
          });
          btn.addClass('animate__animated animate__zoomIn');
        }, 200);
      }
    });
  }
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
  if (window.location.href === pricesUrl) {
    // remove Opacity and add class animation
    var title = jQuery('#prices .page-title');
    title.css({
      opacity: 1
    });
    var hr = jQuery('#prices .page-botm-line');
    hr.css({
      opacity: 1
    });
    var content = jQuery('#prices .page-content');
    content.css({
      opacity: 1
    });
    var table = jQuery('#prices .prices-table');
    table.css({
      opacity: 1
    });
    var btn = jQuery('#prices .page-btn');
    btn.css({
      opacity: 1
    });
  }

  if (window.location.href !== appointementUrl && window.location.href !== pricesUrl && window.location.href !== contactsUrl) {
    jQuery(window).on('scroll', function () {
      if (jQuery('#prices .page-title').css('opacity') == 1) {
        return;
      }

      if (jQuery(window).scrollTop() >= jQuery('#prices').offset().top + jQuery('#prices').outerHeight() - window.innerHeight - 400) {
        // remove Opacity and add class animation
        var _title = jQuery('#prices .page-title');

        _title.css({
          opacity: 1
        });

        _title.addClass('animate__animated animate__zoomIn');

        var _hr = jQuery('#prices .page-botm-line');

        _hr.css({
          opacity: 1
        });

        _hr.addClass('animate__animated animate__zoomIn');

        setInterval(function () {
          var content = jQuery('#prices .page-content');
          content.css({
            opacity: 1
          });
          content.addClass('animate__animated animate__backInLeft');
        }, 100);
        setInterval(function () {
          var alert = jQuery('#prices .page-alert-message');
          alert.css({
            opacity: 1
          });
          alert.addClass('animate__animated animate__backInLeft');
        }, 150);
        setInterval(function () {
          var table = jQuery('#prices .prices-table');
          table.css({
            opacity: 1
          });
          table.addClass('animate__animated animate__backInRight');
          var btn = jQuery('#prices .page-btn');
          btn.css({
            opacity: 1
          });
          btn.addClass('animate__animated animate__zoomIn');
        }, 200);
      }
    });
  }
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
  if (window.location.href !== appointementUrl && window.location.href !== pricesUrl && window.location.href !== contactsUrl) {
    jQuery(window).on('scroll', function () {
      if (jQuery('#medical-house .page-title').css('opacity') == 1) {
        return;
      }

      if (jQuery(window).scrollTop() >= jQuery('#medical-house').offset().top + jQuery('#medical-house').outerHeight() - window.innerHeight - 400) {
        // remove Opacity and add class animation
        var title = jQuery('#medical-house .page-title');
        title.css({
          opacity: 1
        });
        title.addClass('animate__animated animate__zoomIn');
        var hr = jQuery('#medical-house .page-botm-line');
        hr.css({
          opacity: 1
        });
        hr.addClass('animate__animated animate__zoomIn');
      }
    });
  }
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
  if (window.location.href !== appointementUrl && window.location.href !== pricesUrl && window.location.href !== contactsUrl) {
    jQuery(window).on('scroll', function () {
      if (jQuery('#information .page-title').css('opacity') == 1) {
        return;
      }

      if (jQuery(window).scrollTop() >= jQuery('#information').offset().top + jQuery('#information').outerHeight() - window.innerHeight - 400) {
        // remove Opacity and add class animation
        var title = jQuery('#information .page-title');
        title.css({
          opacity: 1
        });
        title.addClass('animate__animated animate__zoomIn');
        var hr = jQuery('#information .page-botm-line');
        hr.css({
          opacity: 1
        });
        hr.addClass('animate__animated animate__zoomIn');
        setInterval(function () {
          var content = jQuery('#information .information');
          content.css({
            opacity: 1
          });
          content.addClass('animate__animated animate__backInLeft');
        }, 100);
        setInterval(function () {
          var medias = jQuery('#information .page-media');
          medias.css({
            opacity: 1
          });
          medias.addClass('animate__animated animate__backInRight');
        }, 150);
      }
    });
  }
}

function sectionContactAnimation() {
  /**
   * section 7 (#transition section contact)
   */
  if (window.location.href !== appointementUrl && window.location.href !== pricesUrl && window.location.href !== contactsUrl) {
    jQuery(window).on('scroll', function () {
      if (jQuery('#section-transition-contact .boxed-btn3').css('opacity') == 1) {
        return;
      }

      if (jQuery(window).scrollTop() >= jQuery('#section-transition-contact').offset().top + jQuery('#section-transition-contact').outerHeight() - window.innerHeight - 400) {
        // remove Opacity and add class animation
        var btn = jQuery('#section-transition-contact .boxed-btn3');
        btn.css({
          opacity: 1
        });
        btn.addClass('animate__animated animate__zoomIn');
      }
    });
  }
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