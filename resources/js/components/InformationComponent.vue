<template>
    <section id="information" class="section-bg-grey section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">{{ page.title }}</h2>
                    <hr class="botm-line page-botm-line">
                </div>

                <div :class="media !== null ? 'information col-lg-6 col-md-12' : 'information col-12'">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div v-for="(item, index) in information" class="panel panel-default">
                            <div class="panel-heading" role="tab" :id="'heading-' + item.id">
                                <h4 class="panel-title">
                                    <a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" :href="'#collapse-' + item.id"
                                       aria-expanded="false" :aria-controls="'collapse-' + item.id">
                                        {{ item.title }}
                                    </a>
                                </h4>
                            </div>
                            <div :id="'collapse-' + item.id" class="panel-collapse collapse in" role="tabpanel"
                                 :aria-labelledby="'heading-' + item.id">
                                <div class="panel-body">
                                    <p v-html="item.content"></p>

                                    <!-- Hours Component -->
                                    <div v-if="item.id === 1">
                                        <horaire-component
                                                :api_data="apiData">
                                        </horaire-component>
                                    </div>

                                    <div v-if="item.alert_id !== null">
                                        <message-alert-component :alert_id="item.alert_id" :api_data="apiData"></message-alert-component>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="media !== null" class="col-lg-6">
                    <img :src="media" class="img-responsive page-media" alt="logo information">
                </div>
            </div>
        </div>
    </section>
</template>

<script>
const access_token = '$2y$10$/i9/jW2Ux0oWjF3VH4VkuOMH1i0TMsSJP.sGFpoaR.4/b/1Jkd36e'

export default {
    data() {
        return {
            classId: String,
            classSection: String,
            apiData: String,
            routePage: String,
            media: String,
            page: {},
            information: {},
        }
    },
    props: {
        page_id: Number,
    },
    mounted() {
        this.classId = this.$el.getAttribute('class_id')
        this.classSection = this.$el.getAttribute('class_section')
        this.routePage = this.$el.getAttribute('route_page')
        this.apiData = document.querySelector('#app').getAttribute('data-base-api')

        // Get Api
        axios.get(this.apiData + 'get-relations-page/' + this.page_id  + '?access_token=' + access_token)
                .then((response) => {
                    const data = response.data
                    this.page = data.data
                    this.media = data.media
                })
                .catch((error) => {
                    console.log(error)
                })

        // Get Api
        axios.get(this.apiData + 'get-all-informations' + '?access_token=' + access_token)
                .then((response) => {
                    const data = response.data
                    this.information = data.data
                })
                .catch((error) => {
                    console.log(error)
                })
    }
}
</script>
