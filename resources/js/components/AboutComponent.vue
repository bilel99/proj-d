<template>
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <h2 class="title">{{ page.title }}</h2>
                    <hr class="botm-line">

                    <div class="content" v-html="page.content"></div>


                    <div v-for="(item, index) in page.alerts">
                        <message-alert-component :alert_id="item.id" :api_data="apiData"></message-alert-component>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img v-if="media !== null" :src="media" class="img-responsive" alt="Image qui sommes nous ?">
                    <img v-else :src="imgDefault" class="img-responsive" alt="Image qui sommes nous ?">
                </div>
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
        this.imgDefault = this.$el.getAttribute('img_default')
        this.apiData = this.$el.getAttribute('api_data')

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
