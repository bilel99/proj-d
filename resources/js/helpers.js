class Helpers {
    /******************************
     *
     * Cookies Methods
     *
     *****************************/

    /**
     *
     * @param cname
     * @param cvalue
     * @param exdays
     */
    static setCookie(cname, cvalue, exdays) {
        let d = new Date()
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000))
        let expires = "expires="+d.toUTCString()
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/"
    }

    /**
     *
     * @param cname
     * @return {string}
     */
    static getCookie(cname) {
        let name = cname + "="
        let decodedCookie = decodeURIComponent(document.cookie)
        let ca = decodedCookie.split(';')
        for(let i = 0; i < ca.length; i++) {
            let c = ca[i]
            while (c.charAt(0) === ' ') {
                c = c.substring(1)
            }
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length)
            }
        }

        return ""
    }

    /**
     *
     * @return {boolean}
     */
    static checkCookie() {
        let username = self.getCookie("username")

        return username !== ""
    }

    
    /******************************
     *
     * Axios Http Methods
     *
     *****************************/
    //...
}