<template>
    <section :id="classId" :class="classSection">
        <div class="container">
            <div class="row">
                <div v-if="imgDefault === ''">
                    <div class="col-md-12">
                        <h2 class="page-title">{{ page.title }}</h2>
                        <hr class="botm-line page-botm-line">
                        <p class="page-content py-3" v-html="page.content"></p>

                        <div v-for="(item, index) in page.alerts" class="page-alert-message">
                          <message-alert-component :alert_id="item.id" :api_data="apiData"></message-alert-component>
                        </div>
                    </div>
                </div>

                <div v-else class="col-lg-6 col-sm-12">
                    <h2 class="page-title">{{ page.title }}</h2>
                    <hr class="botm-line page-botm-line">

                    <p class="page-content py-3" v-html="page.content"></p>

                    <div v-for="(item, index) in page.alerts" class="page-alert-message">
                        <message-alert-component :alert_id="item.id" :api_data="apiData"></message-alert-component>
                    </div>
                </div>

                <div v-if="media !== null || imgDefault !== ''" class="col-lg-6">
                    <img v-if="media !== null" :src="media" class="img-responsive page-media" alt="Image docteur">
                    <img v-else :src="imgDefault" class="img-responsive page-media" alt="Image docteur">
                </div>
            </div>

            <!-- Button Link -->
            <div v-if="routePage !== ''" class="d-flex justify-content-center mt-5 mb-3">
                <a :href="routePage" title="En savoir plus" class="boxed-btn3 page-btn">En savoir plus</a>
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
            page: {},
            imgDefault: String,
            media: String
        }
    },
    props: {
        page_id: Number,
    },
    mounted() {
        this.imgDefault = this.$el.getAttribute('img_default')
        this.classId = this.$el.getAttribute('class_id')
        this.classSection = this.$el.getAttribute('class_section')
        this.apiData = document.querySelector('#app').getAttribute('data-base-api')
        this.routePage = this.$el.getAttribute('route_page')

        // Get Api
        axios.get(this.apiData + 'get-relations-page/' + this.page_id + '?access_token=' + access_token)
        .then((response) => {
            const data = response.data
            this.page = data.data
            this.media = data.media
        })
        .catch((error) => {
            console.log(error)
        })
    }
}
</script>
