import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const username = 'docteur-de-garde'
const password = '$2y$10$/i9/jW2Ux0oWjF3VH4VkuOMH1i0TMsSJP.sGFpoaR.4/b/1Jkd36e'

const get = async function (url) {
    let response = await axios.get(url, {
        auth: {
            username: username,
            password: password,
        }
    })
        .then((response) => {
            console.log(response)
        })
        .catch((error) => {
            throw new Error(error.message)
        })
}

/**
 * {
 *     1: {
 *         id: 1,
 *         unique_name: baniere-homepage,
 *         title: le titre,
 *         content: le contenu,
 *         medias: [{
 *             id: 1,
 *             ...comme la bdd
 *         }]
 *         created_at: 2020-06-07 12:27:10,
 *     }
 * }
 */
export default new Vuex.Store({
    strict: true,
    state: {
        heroBanner: {}
    },
    actions: {
        loadHeroBanner: async function (context) {
            let response = await get('/api/page/1')
            console.log(response)
        }
    }
})