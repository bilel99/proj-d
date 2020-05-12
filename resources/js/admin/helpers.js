/**
 * Navigator Detect
 */
// Opera 8.0+
const isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0

// Firefox 1.0+
// navigator.userAgent.toLowerCase().indexOf('firefox') > -1
const isFirefox = typeof InstallTrigger !== 'undefined'

// Safari 3.0+ "[object HTMLElementConstructor]"
const isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]" })
(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification))

// Internet Explorer 6-11
const isIE = /*@cc_on!@*/false || !!document.documentMode

// Edge 20+
const isEdge = !isIE && !!window.StyleMedia

// Chrome 1 - ...
const isChrome = !!window.chrome && (!!window.chrome.webstore || !!window.chrome.runtime)

// Edge (based on chromium)
const isEdgeChromium = isChrome && (navigator.userAgent.indexOf("Edg") !== -1)

// CSRF_TOKEN
const csrf = jQuery('meta[name="csrf-token"]').attr('content')

export class Helpers {

    constructor() {
    }

    /**
     * @param url
     * @param param
     * @param type
     * @param dataType
     * @param context
     * @param processData
     * @param contentType
     * @param ajxCompleteFn
     * @returns {Promise<void>}
     */
    static async ajaxCall(
        url,
        param = null,
        type,
        dataType = 'json',
        context = null,
        processData = true,
        contentType = 'application/x-www-form-urlencoded; charset=UTF-8',
        ajxCompleteFn = null) {

        return new Promise((resolve, reject) => {
            type = type.toUpperCase() !== "GET" &&
            type.toUpperCase() !== "POST" &&
            type.toUpperCase() !== "PUT" &&
            type.toUpperCase() !== "DELETE" ? "POST" : type

            jQuery.ajax({
                type: type.toUpperCase(),
                url: url,
                dataType: dataType,
                crossDomain: '',
                context: context,
                processData: processData,
                contentType: contentType,
                data: param,
                beforeSend: (xhr) => {
                    // Show loader
                    //...
                },
                success: (res) => {
                    resolve(res)
                },
                error: (xhr) => {
                    reject(xhr)
                },
                complete: (res) => {
                    if (ajxCompleteFn !== null) {
                        ajxCompleteFn(res)
                    }

                    // Hide loader
                    //...
                }
            })
        })
    }

    /**
     * Show Message
     * Success messages
     * @param message
     */
    static showMessageSuccess(message) {
        jQuery('.iziToast-message').append(
            iziToast.success({
                position: 'topRight', // center, bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                progressBarColor: '',
                backgroundColor: '',
                messageSize: '',
                messageColor: '',
                icon: 'fas fa-check',
                image: '',
                imageWidth: 50,
                balloon: true,
                drag: true,
                progressBar: true,
                timeout: 6000,
                title: '',
                message: message
            })
        )
    }

    /**
     * Show Message
     * Error messages
     * @param message
     */
    static showMessageError(message) {
        jQuery('.iziToast-message').append(
            iziToast.error({
                position: 'topRight', // center, bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                progressBarColor: '',
                backgroundColor: '',
                messageSize: '',
                messageColor: '',
                icon: 'fas fa-check',
                image: '',
                imageWidth: 50,
                balloon: true,
                drag: true,
                progressBar: true,
                timeout: 6000,
                title: '',
                message: message
            })
        )
    }

    /**
     * Show Message
     * Warning messages
     * @param message
     */
    static showMessageWarning(message) {
        jQuery('.iziToast-message').append(
            iziToast.warning({
                position: 'topRight', // center, bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                progressBarColor: '',
                backgroundColor: '',
                messageSize: '',
                messageColor: '',
                icon: 'fas fa-check',
                image: '',
                imageWidth: 50,
                balloon: true,
                drag: true,
                progressBar: true,
                timeout: 6000,
                title: '',
                message: message
            })
        )
    }

    /**
     * Show Message
     * Info messages
     * @param message
     */
    static showMessageInfo(message) {
        jQuery('.iziToast-message').append(
            iziToast.info({
                position: 'topRight', // center, bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                progressBarColor: '',
                backgroundColor: '',
                messageSize: '',
                messageColor: '',
                icon: 'fas fa-check',
                image: '',
                imageWidth: 50,
                balloon: true,
                drag: true,
                progressBar: true,
                timeout: 6000,
                title: '',
                message: message
            })
        )
    }

    /**
     * Sleep function
     * @param milliseconds
     * @returns {Promise<unknown>}
     */
    static async sleep(milliseconds) {
        return new Promise(resolve => setTimeout(resolve, milliseconds))
    }

    /**
     * Error Ajax Request
     * @param xhr
     */
    static async handleErrorFn(xhr) {
        /*Swal.fire({
            type: 'error',
            title: 'Error ajax request',
            text: xhr
        })
         */
        console.log('error ajax request!')
    }

    /*******************************************************************************************************************
     *
     * Detect Navigator Helpers
     *
     ******************************************************************************************************************/
    /**
     * is navigator Opera 8.0+
     * @return {boolean}
     */
    static isOperaNavigator () {
        return isOpera
    }

    /**
     * is navigator Firefox 1.0+
     * @return {boolean}
     */
    static isFirefoxNavigator () {
        return isFirefox
    }

    /**
     * is navigator Safari 3.0+
     * @return {boolean}
     */
    static isSafariNavigator () {
        return isSafari
    }

    /**
     * is navigator Internet Explorer 6-11
     * @return {boolean}
     */
    static isIENavigator () {
        return isIE
    }

    /**
     * is navigator Edge 20+
     * @return {boolean}
     */
    static isEdgeNavigator () {
        return isEdge
    }

    /**
     * is navigator Chrome
     * @return {boolean}
     */
    static isChromeNavigator () {
        return isChrome
    }

    /**
     * is navigator Edge (based on chromium) ision
     * @return {boolean}
     */
    static isEdgeChromiumVersionNavigator () {
        return isEdgeChromium
    }
}
