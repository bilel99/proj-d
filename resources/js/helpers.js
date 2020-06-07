/**
 *
 */
export class Helpers {

    get(url) {
        axios.get(url)
            .then(function (response) {
                console.log(response)
            })
            .catch(function (error) {
                console.log(error)
            })
    }

}