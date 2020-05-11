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

/***/ "./node_modules/smartwizard/dist/js/jquery.smartWizard.min.js":
/*!********************************************************************!*\
  !*** ./node_modules/smartwizard/dist/js/jquery.smartWizard.min.js ***!
  \********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*!
 * SmartWizard v4.4.1
 * The awesome jQuery step wizard plugin with Bootstrap support
 * http://www.techlaboratory.net/smartwizard
 *
 * Created by Dipu Raj
 * http://dipuraj.me
 *
 * Licensed under the terms of the MIT License
 * https://github.com/techlab/SmartWizard/blob/master/LICENSE
 */
!function(h,i,t){"use strict";var e={selected:0,keyNavigation:!0,autoAdjustHeight:!0,cycleSteps:!1,backButtonSupport:!0,useURLhash:!0,showStepURLhash:!0,lang:{next:"Next",previous:"Previous"},toolbarSettings:{toolbarPosition:"bottom",toolbarButtonPosition:"end",showNextButton:!0,showPreviousButton:!0,toolbarExtraButtons:[]},anchorSettings:{anchorClickable:!0,enableAllAnchors:!1,markDoneStep:!0,markAllPreviousStepsAsDone:!0,removeDoneStepOnNavigateBack:!1,enableAnchorOnDoneStep:!0},contentURL:null,contentCache:!0,ajaxSettings:{},disabledSteps:[],errorSteps:[],hiddenSteps:[],theme:"default",transitionEffect:"none",transitionSpeed:"400"};function n(t,s){this.options=h.extend(!0,{},e,s),this.main=h(t),this.nav=this.main.children("ul"),this.steps=h("li > a",this.nav),this.container=this.main.children("div"),this.pages=this.container.children("div"),this.current_index=null,this.options.toolbarSettings.toolbarButtonPosition="right"===this.options.toolbarSettings.toolbarButtonPosition?"end":this.options.toolbarSettings.toolbarButtonPosition,this.options.toolbarSettings.toolbarButtonPosition="left"===this.options.toolbarSettings.toolbarButtonPosition?"start":this.options.toolbarSettings.toolbarButtonPosition,this.options.theme=null===this.options.theme||""===this.options.theme?"default":this.options.theme,this.init()}h.extend(n.prototype,{init:function(){this._setElements(),this._setToolbar(),this._setEvents();var t=this.options.selected;if(this.options.useURLhash){var s=i.location.hash;if(s&&0<s.length){var e=h("a[href*='"+s+"']",this.nav);if(0<e.length){var n=this.steps.index(e);t=0<=n?n:t}}}0<t&&this.options.anchorSettings.markDoneStep&&this.options.anchorSettings.markAllPreviousStepsAsDone&&this.steps.eq(t).parent("li").prevAll().addClass("done"),this._showStep(t)},_setElements:function(){this.main.addClass("sw-main sw-theme-"+this.options.theme),this.nav.addClass("nav nav-tabs step-anchor").children("li").addClass("nav-item").children("a").addClass("nav-link"),!1!==this.options.anchorSettings.enableAllAnchors&&!1!==this.options.anchorSettings.anchorClickable&&this.steps.parent("li").addClass("clickable"),this.container.addClass("sw-container tab-content"),this.pages.addClass("tab-pane step-content");var e=this;return this.options.disabledSteps&&0<this.options.disabledSteps.length&&h.each(this.options.disabledSteps,function(t,s){e.steps.eq(s).parent("li").addClass("disabled")}),this.options.errorSteps&&0<this.options.errorSteps.length&&h.each(this.options.errorSteps,function(t,s){e.steps.eq(s).parent("li").addClass("danger")}),this.options.hiddenSteps&&0<this.options.hiddenSteps.length&&h.each(this.options.hiddenSteps,function(t,s){e.steps.eq(s).parent("li").addClass("hidden")}),!0},_setToolbar:function(){if("none"===this.options.toolbarSettings.toolbarPosition)return!0;var t,s,e=!1!==this.options.toolbarSettings.showNextButton?h("<button></button>").text(this.options.lang.next).addClass("btn btn-secondary sw-btn-next").attr("type","button"):null,n=!1!==this.options.toolbarSettings.showPreviousButton?h("<button></button>").text(this.options.lang.previous).addClass("btn btn-secondary sw-btn-prev").attr("type","button"):null,i=h("<div></div>").addClass("btn-group mr-2 sw-btn-group").attr("role","group").append(n,e),o=null;switch(this.options.toolbarSettings.toolbarExtraButtons&&0<this.options.toolbarSettings.toolbarExtraButtons.length&&(o=h("<div></div>").addClass("btn-group mr-2 sw-btn-group-extra").attr("role","group"),h.each(this.options.toolbarSettings.toolbarExtraButtons,function(t,s){o.append(s.clone(!0))})),this.options.toolbarSettings.toolbarPosition){case"top":(t=h("<div></div>").addClass("btn-toolbar sw-toolbar sw-toolbar-top justify-content-"+this.options.toolbarSettings.toolbarButtonPosition)).append(i),"start"===this.options.toolbarSettings.toolbarButtonPosition?t.prepend(o):t.append(o),this.container.before(t);break;case"bottom":(s=h("<div></div>").addClass("btn-toolbar sw-toolbar sw-toolbar-bottom justify-content-"+this.options.toolbarSettings.toolbarButtonPosition)).append(i),"start"===this.options.toolbarSettings.toolbarButtonPosition?s.prepend(o):s.append(o),this.container.after(s);break;case"both":(t=h("<div></div>").addClass("btn-toolbar sw-toolbar sw-toolbar-top justify-content-"+this.options.toolbarSettings.toolbarButtonPosition)).append(i),"start"===this.options.toolbarSettings.toolbarButtonPosition?t.prepend(o):t.append(o),this.container.before(t),(s=h("<div></div>").addClass("btn-toolbar sw-toolbar sw-toolbar-bottom justify-content-"+this.options.toolbarSettings.toolbarButtonPosition)).append(i.clone(!0)),null!==o&&("start"===this.options.toolbarSettings.toolbarButtonPosition?s.prepend(o.clone(!0)):s.append(o.clone(!0))),this.container.after(s);break;default:(s=h("<div></div>").addClass("btn-toolbar sw-toolbar sw-toolbar-bottom justify-content-"+this.options.toolbarSettings.toolbarButtonPosition)).append(i),this.options.toolbarSettings.toolbarButtonPosition,s.append(o),this.container.after(s)}return!0},_setEvents:function(){var e=this;return h(this.steps).on("click",function(t){if(t.preventDefault(),!1===e.options.anchorSettings.anchorClickable)return!0;var s=e.steps.index(this);if(!1===e.options.anchorSettings.enableAnchorOnDoneStep&&e.steps.eq(s).parent("li").hasClass("done"))return!0;s!==e.current_index&&(!1!==e.options.anchorSettings.enableAllAnchors&&!1!==e.options.anchorSettings.anchorClickable||e.steps.eq(s).parent("li").hasClass("done"))&&e._showStep(s)}),h(".sw-btn-next",this.main).on("click",function(t){t.preventDefault(),e._showNext()}),h(".sw-btn-prev",this.main).on("click",function(t){t.preventDefault(),e._showPrevious()}),this.options.keyNavigation&&h(t).keyup(function(t){e._keyNav(t)}),this.options.backButtonSupport&&h(i).on("hashchange",function(t){if(!e.options.useURLhash)return!0;if(i.location.hash){var s=h("a[href*='"+i.location.hash+"']",e.nav);s&&0<s.length&&(t.preventDefault(),e._showStep(e.steps.index(s)))}}),!0},_showNext:function(){for(var t=this.current_index+1,s=t;s<this.steps.length;s++)if(!this.steps.eq(s).parent("li").hasClass("disabled")&&!this.steps.eq(s).parent("li").hasClass("hidden")){t=s;break}if(this.steps.length<=t){if(!this.options.cycleSteps)return!1;t=0}return this._showStep(t),!0},_showPrevious:function(){for(var t=this.current_index-1,s=t;0<=s;s--)if(!this.steps.eq(s).parent("li").hasClass("disabled")&&!this.steps.eq(s).parent("li").hasClass("hidden")){t=s;break}if(t<0){if(!this.options.cycleSteps)return!1;t=this.steps.length-1}return this._showStep(t),!0},_showStep:function(t){return!!this.steps.eq(t)&&(t!=this.current_index&&(!this.steps.eq(t).parent("li").hasClass("disabled")&&!this.steps.eq(t).parent("li").hasClass("hidden")&&(this._loadStepContent(t),!0)))},_loadStepContent:function(s){var n=this,t=this.steps.eq(this.current_index),e="",i=this.steps.eq(s),o=i.data("content-url")&&0<i.data("content-url").length?i.data("content-url"):this.options.contentURL;if(null!==this.current_index&&this.current_index!==s&&(e=this.current_index<s?"forward":"backward"),null!==this.current_index&&!1===this._triggerEvent("leaveStep",[t,this.current_index,e]))return!1;if(!(o&&0<o.length)||i.data("has-content")&&this.options.contentCache)this._transitPage(s);else{var a=0<i.length?h(i.attr("href"),this.main):null,r=h.extend(!0,{},{url:o,type:"POST",data:{step_number:s},dataType:"text",beforeSend:function(){n._loader("show")},error:function(t,s,e){n._loader("hide"),h.error(e)},success:function(t){t&&0<t.length&&(i.data("has-content",!0),a.html(t)),n._loader("hide"),n._transitPage(s)}},this.options.ajaxSettings);h.ajax(r)}return!0},_transitPage:function(t){var s=this,e=this.steps.eq(this.current_index),n=0<e.length?h(e.attr("href"),this.main):null,i=this.steps.eq(t),o=0<i.length?h(i.attr("href"),this.main):null,a="";null!==this.current_index&&this.current_index!==t&&(a=this.current_index<t?"forward":"backward");var r="middle";return 0===t?r="first":t===this.steps.length-1&&(r="final"),this.options.transitionEffect=this.options.transitionEffect.toLowerCase(),this.pages.finish(),"slide"===this.options.transitionEffect?n&&0<n.length?n.slideUp("fast",this.options.transitionEasing,function(){o.slideDown(s.options.transitionSpeed,s.options.transitionEasing)}):o.slideDown(this.options.transitionSpeed,this.options.transitionEasing):"fade"===this.options.transitionEffect?n&&0<n.length?n.fadeOut("fast",this.options.transitionEasing,function(){o.fadeIn("fast",s.options.transitionEasing,function(){h(this).show()})}):o.fadeIn(this.options.transitionSpeed,this.options.transitionEasing,function(){h(this).show()}):(n&&0<n.length&&n.hide(),o.show()),this._setURLHash(i.attr("href")),this._setAnchor(t),this._setButtons(t),this._fixHeight(t),this.current_index=t,this._triggerEvent("showStep",[i,this.current_index,a,r]),!0},_setAnchor:function(t){return this.steps.eq(this.current_index).parent("li").removeClass("active"),!1!==this.options.anchorSettings.markDoneStep&&null!==this.current_index&&(this.steps.eq(this.current_index).parent("li").addClass("done"),!1!==this.options.anchorSettings.removeDoneStepOnNavigateBack&&this.steps.eq(t).parent("li").nextAll().removeClass("done")),this.steps.eq(t).parent("li").removeClass("done").addClass("active"),!0},_setButtons:function(t){return this.options.cycleSteps||(t<=0?h(".sw-btn-prev",this.main).addClass("disabled"):h(".sw-btn-prev",this.main).removeClass("disabled"),this.steps.length-1<=t?h(".sw-btn-next",this.main).addClass("disabled"):h(".sw-btn-next",this.main).removeClass("disabled")),!0},_keyNav:function(t){switch(t.which){case 37:this._showPrevious(),t.preventDefault();break;case 39:this._showNext(),t.preventDefault();break;default:return}},_fixHeight:function(t){if(this.options.autoAdjustHeight){var s=0<this.steps.eq(t).length?h(this.steps.eq(t).attr("href"),this.main):null;this.container.finish().animate({minHeight:s.outerHeight()},this.options.transitionSpeed,function(){})}return!0},_triggerEvent:function(t,s){var e=h.Event(t);return this.main.trigger(e,s),!e.isDefaultPrevented()&&e.result},_setURLHash:function(t){this.options.showStepURLhash&&i.location.hash!==t&&(i.location.hash=t)},_loader:function(t){switch(t){case"show":this.main.addClass("sw-loading");break;case"hide":this.main.removeClass("sw-loading");break;default:this.main.toggleClass("sw-loading")}},goToStep:function(t){this._transitPage(t)},hiddenSteps:function(t){if(this.options.hiddenSteps=t,this.options.hiddenSteps&&0<this.options.hiddenSteps.length){var e=this;h.each(e.steps,function(t,s){-1<h.inArray(t,e.options.hiddenSteps)?h(s).parent("li").addClass("hidden"):h(s).parent("li").removeClass("hidden")})}},theme:function(t){if(this.options.theme===t)return!1;this.main.removeClass("sw-theme-"+this.options.theme),this.options.theme=t,this.main.addClass("sw-theme-"+this.options.theme),this._triggerEvent("themeChanged",[this.options.theme])},next:function(){this._showNext()},prev:function(){this._showPrevious()},reset:function(){if(!1===this._triggerEvent("beginReset"))return!1;this.container.stop(!0),this.pages.stop(!0),this.pages.hide(),this.current_index=null,this._setURLHash(this.steps.eq(this.options.selected).attr("href")),h(".sw-toolbar",this.main).remove(),this.steps.removeClass(),this.steps.parents("li").removeClass(),this.steps.data("has-content",!1),this.init(),this._triggerEvent("endReset")},stepState:function(e,t){e=h.isArray(e)?e:[e];var s=h.grep(this.steps,function(t,s){return-1!==h.inArray(s,e)});if(s&&0<s.length)switch(t){case"disable":h(s).parents("li").addClass("disabled");break;case"enable":h(s).parents("li").removeClass("disabled");break;case"hide":h(s).parents("li").addClass("hidden");break;case"show":h(s).parents("li").removeClass("hidden");break;case"error-on":h(s).parents("li").addClass("danger");break;case"error-off":h(s).parents("li").removeClass("danger")}}}),h.fn.smartWizard=function(t){var s,e=arguments;return void 0===t||"object"==typeof t?this.each(function(){h.data(this,"smartWizard")||h.data(this,"smartWizard",new n(this,t))}):"string"==typeof t&&"_"!==t[0]&&"init"!==t?(s=h.data(this[0],"smartWizard"),"destroy"===t&&h.data(this,"smartWizard",null),s instanceof n&&"function"==typeof s[t]?s[t].apply(s,Array.prototype.slice.call(e,1)):this):void 0}}(jQuery,window,document);

/***/ }),

/***/ "./resources/js/front/app.js":
/*!***********************************!*\
  !*** ./resources/js/front/app.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// Import Plugins for Front Office
__webpack_require__(/*! smartwizard/dist/js/jquery.smartWizard.min */ "./node_modules/smartwizard/dist/js/jquery.smartWizard.min.js") // ###
(function (jQuery) {
  disableCopyAndPaste();
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

module.exports = __webpack_require__(/*! /home/bilel/Developpement/proj-d/resources/js/front/app.js */"./resources/js/front/app.js");


/***/ })

/******/ });