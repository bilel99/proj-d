<!--
@todo ce composent n'es plus utilisé à SUPPRIMER!
-->
<template>
    <section id="service" class="section-bg-grey section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2 class="page-title">{{ page.title }}</h2>
                    <hr class="botm-line page-botm-line">
                    <p class="page-content" v-html="page.content"></p>
                </div>

                <div class="service col-md-8 col-sm-12">
                    <div class="container">
                        <div class="row">
                            <div v-for="(item, key) in page.service" class="col-md-6 col-sm-12">
                                <div class="service-info card">
                                    <div class="icon">
                                        <i :class="item.icon"></i>
                                    </div>
                                    <div class="icon-info">
                                        <h4>{{ item.title }}</h4>
                                        <p v-html="item.content"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
            apiData: String,
            page: {},
        }
    },
    props: {
        page_id: Number,
    },
    mounted() {
        this.apiData = document.querySelector('#app').getAttribute('data-base-api')

        // Get Api
        axios.get(this.apiData + 'get-relations-page/' + this.page_id + '?access_token=' + access_token)
        .then((response) => {
            const data = response.data
            this.page = data.data
        })
        .catch((error) => {
            console.log(error)
        })
    }
}
</script>