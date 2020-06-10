<template>
    <section id="hero-banner" class="hero-banner">
        <div class="bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hero-banner-info">
                            <div class="hero-banner-logo text-center">
                                <img :src="media" class="img-responsive" alt="Logo">
                            </div>
                            <div class="hero-banner-text text-center pt-3">
                                <h1 class="text-white">{{ heroBanner.title }}</h1>
                                <p class="text-white pt-3" v-html="heroBanner.content"></p>

                                <a href="#contact" class="my-5 boxed-btn6">Faire une demande de rendez-vous</a>
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
export default {
    data() {
        return {
            apiData: String,
            heroBanner: {},
            media: String
        }
    },
    props: {
        hero_banner_id: Number,
    },
    watch: {},
    mounted() {
        this.apiData = this.$el.getAttribute('api_data')

        // Get Api
        axios.get(this.apiData + '/' + this.hero_banner_id, {
            auth: {
                username: 'docteur-de-garde',
                password: '$2y$10$/i9/jW2Ux0oWjF3VH4VkuOMH1i0TMsSJP.sGFpoaR.4/b/1Jkd36e' // Bad password
            }
        })
                .then((response) => {
                    const data = response.data
                    this.heroBanner = data.data
                    this.media = data.media
                })
                .catch(error => console.log(error))

    }
}
</script>
