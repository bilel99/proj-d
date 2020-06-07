import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

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
        loadHeroBanner: function (context) {
            
        }
    }
})