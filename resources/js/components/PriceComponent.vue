<template>
    <section :id="classId" :class="classSection">
        <div class="container">
            <div class="row">
                <div v-if="isButton === 'false'" class="back-page">
                    <a href="/" class="boxed-btn4 mx-3 mb-5">Retour</a>
                </div>
                
                <div class="col-12 py-3 px-3">
                    <h2 class="title">{{ page.title }}</h2>
                    <hr class="botm-line">
                    <p class="py-3" v-html="page.content"></p>

                    <div class="col-12">
                        <div class="table-responsive">
                            <div class="membership-pricing-table">
                                <table class="table table-responsive">
                                    <tbody>
                                    <tr>
                                        <th></th>

                                        <th class="plan-header plan-header-primary">
                                            <div class="pricing-plan-name">ADULTES &gt; 6 ans</div>
                                        </th>

                                        <th class="plan-header plan-header-secondary">
                                            <div class="header-plan-inner">
                                                <div class="pricing-plan-name">ENFANTS de 0 à 6 ans</div>
                                            </div>
                                        </th>
                                    </tr>

                                    <tr v-for="item in price">
                                        <td v-html="item.title"></td>
                                        <td v-html="item.content_row_1"></td>
                                        <td v-html="item.content_row_2"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div v-for="(item, index) in page.alerts" class="col-md-6 col-sm-12">
                                <message-alert-component :alert_id="item.id" :api_data="apiData"></message-alert-component>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button Link -->
            <div v-if="isButton === 'true' && routePage !== ''" class="d-flex justify-content-center mt-5 mb-3">
                <a :href="routePage" class="boxed-btn3">En savoir plus</a>
            </div>
        </div>
    </section>
</template>

<script>
const basicAuthUsername = 'docteur-de-garde'
const basicAuthPassword = '$2y$10$/i9/jW2Ux0oWjF3VH4VkuOMH1i0TMsSJP.sGFpoaR.4/b/1Jkd36e'

export default {
    data() {
        return {
            classId: String,
            classSection: String,
            apiData: String,
            page: {},
            price: {},
            routePage: String,
            isButton: String
        }
    },
    props: {
        page_id: Number,
    },
    mounted() {
        this.classId = this.$el.getAttribute('class_id')
        this.classSection = this.$el.getAttribute('class_section')
        this.apiData = document.querySelector('#app').getAttribute('data-base-api')
        this.routePage = this.$el.getAttribute('route_page')
        this.isButton = this.$el.getAttribute('is_button')

        // Get Api
        axios.get(this.apiData + 'get-relations-page/' + this.page_id, {
            auth: {
                username: basicAuthUsername,
                password: basicAuthPassword
            }
        })
        .then((response) => {
            const data = response.data
            this.page = data.data
            this.price = data.data.price
        })
        .catch((error) => {
            console.log(error)
        })
    }
}
</script>
