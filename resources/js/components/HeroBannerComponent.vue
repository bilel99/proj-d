<template>
    <section id="hero-banner" :class="heroBannerClass">
        <div class="bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hero-banner-info">
                            <div class="hero-banner-logo text-center">
                                <img v-if="media !== null" :src="media" class="img-responsive" alt="Logo docteur de garde">
                                <img v-else :src="logoDefault" class="img-responsive" alt="Logo docteur de garde">
                            </div>
                            <div class="hero-banner-text text-center pt-3">
                                <h1>{{ heroBanner.title }}</h1>
                                <p v-html="heroBanner.content"></p>

                                <a href="#contact" class="contact-btn my-5 boxed-btn2">Faire une demande de rendez-vous</a>
                            </div>

                            <div class="overlay-detail text-center">
                                <a href="#service"><i class="fa fa-angle-down"></i></a>
                            </div>
                        </div>
                    </div>
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
            heroBanner: {},
            heroBannerClass: String,
            logoDefault: String,
            media: String,
        }
    },
    props: {
        page_id: Number,
    },
    mounted() {
        this.heroBannerClass = this.$el.getAttribute('hero_banner_class')
        this.logoDefault = this.$el.getAttribute('logo_default')
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
                    this.heroBanner = data.data
                    this.media = data.media
                })
                .catch((error) => {
                    console.log(error)
                })
    }
}
</script>
