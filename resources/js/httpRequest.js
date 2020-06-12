import Axios from "axios"

const basicAuthUsername = 'docteur-de-garde'
const basicAuthPassword = '$2y$10$/i9/jW2Ux0oWjF3VH4VkuOMH1i0TMsSJP.sGFpoaR.4/b/1Jkd36e'

/**
 * Class HttpRequest
 */
export class HttpRequest {

    /**
     * Get request Http Or ajax request
     * use Axios
     * @param {*} url
     */
    get(url) {
        Axios.get(url, {
            auth: {
                username: basicAuthUsername,
                password: basicAuthPassword
            }
        })
        .then((response) => {
            return response
        })
        .catch((error) => {
            this.handleError(error)
        })
    }

    /**
     * return error request Http or ajax request
     * @param {*} error
     */
    handleError(error) {
        console.log(error)
    }
}
