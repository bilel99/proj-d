<template>
    <section :id="classId" :class="classSection">
        <div class="container">
            <div class="row">
                <div v-if="imgDefault === ''">
                    <div class="col-md-12">
                        <h2 class="animate__animated animate__pulse">{{ page.title }}</h2>
                        <hr class="botm-line">
                        <p class="py-3" v-html="page.content"></p>
                    </div>
                </div>

                <div v-else class="col-lg-6 col-sm-12">
                    <h2 class="title">{{ page.title }}</h2>
                    <hr class="botm-line">

                    <p class="content" v-html="page.content"></p>
                    
                    <div v-for="(item, index) in page.alerts">
                        <message-alert-component :alert_id="item.id" :api_data="apiData"></message-alert-component>
                    </div>
                </div>

                <div v-if="media !== null || imgDefault !== ''" class="col-lg-6">
                    <img v-if="media !== null" :src="media" class="img-responsive" alt="Image :id">
                    <img v-else :src="imgDefault" class="img-responsive" alt="Image :id">
                </div>
            </div>

            <!-- Button Link -->
            <div v-if="routePage !== ''" class="d-flex justify-content-center mt-5 mb-3">
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
        axios.get(this.apiData + 'get-relations-page/' + this.page_id, {
            auth: {
                username: basicAuthUsername,
                password: basicAuthPassword
            }
        })
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
