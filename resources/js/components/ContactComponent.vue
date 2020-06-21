<template>
    <!-- section contact -->
    <section :id="classId" :class="classSection">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">{{ page.title }}</h2>
                    <hr class="botm-line">
                    <p class="py-3" v-html="page.content"></p>
                </div>

                <div class="col-12 px-5 py-5">
                    <div v-for="(item, index) in page.alerts">
                        <message-alert-component :alert_id="item.id" :api_data="apiData"></message-alert-component>
                    </div>
                </div>

                <!-- Form contact component -->
                <form-contact-component></form-contact-component>
            </div>
        </div>
    </section>
    <!-- /end section -->
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
            media: String,
            routePage: String,
        }
    },
    props: {
        page_id: Number,
    },
    mounted() {
        this.classId = this.$el.getAttribute('class_id')
        this.classSection = this.$el.getAttribute('class_section')
        this.apiData = document.querySelector('#app').getAttribute('data-base-api')
        this.routePage = this.$el.getAttribute('route_name')

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
