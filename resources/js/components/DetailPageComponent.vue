<template>
    <div>
        <h2 class="page-title">{{ page.title }}</h2>
        <hr class="botm-line page-botm-line">

        <p class="page-content" v-html="page.content"></p>

        <div v-for="(item, index) in page.alerts" class="page-alert-message">
            <message-alert-component :alert_id="item.id" :api_data="apiData"></message-alert-component>
        </div>
    </div>
</template>

<script>
const basicAuthUsername = 'docteur-de-garde'
const basicAuthPassword = '$2y$10$/i9/jW2Ux0oWjF3VH4VkuOMH1i0TMsSJP.sGFpoaR.4/b/1Jkd36e'

export default {
    data() {
        return {
            classId: String,
            classSection: String,
            routePage: String,
            apiData: String,
            page: {},
            imgDefault: String,
            media: String,
        }
    },
    props: {
        page_id: Number,
    },
    mounted() {
        this.classId = this.$el.getAttribute('class_id')
        this.classSection = this.$el.getAttribute('class_section')
        this.routePage = this.$el.getAttribute('route_page')
        this.imgDefault = this.$el.getAttribute('img_default')
        this.apiData = document.querySelector('#app').getAttribute('data-base-api')

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
