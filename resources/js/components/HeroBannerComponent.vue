<template>
    <section id="hero-banner" :class="heroBannerClass">
        <div class="bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hero-banner-info">
                            <div class="hero-banner-logo text-center">
                                <img v-if="media !== null" :src="media" class="hero-banner-img img-responsive animate__animated animate__pulse" alt="Logo docteur de garde">
                                <img v-else :src="logoDefault" class="hero-banner-img img-responsive animate__animated animate__pulse" alt="Logo docteur de garde">
                            </div>
                            <div class="hero-banner-text text-center pt-3">
                                <h1 class="hero-banner-title animate__animated animate__zoomIn">{{ heroBanner.title }}</h1>
                                <p class="hero-banner-content animate__animated animate__zoomIn" v-html="heroBanner.content"></p>

                                <a v-if="routeContact !== ''" :href="routeContact" title="Faire une demande de rendez-vous" class="contact-btn my-5 boxed-btn2 animate__animated animate__pulse">Faire une demande de rendez-vous</a>
                                <a v-else href="#contact" title="Faire une demande de rendez-vous" class="contact-btn my-5 boxed-btn2 animate__animated animate__pulse" @click.prevent="goToByScroll('contact')">Faire une demande de rendez-vous</a>
                            </div>

                            <div class="overlay-detail text-center mt-5">
                                <a :href="goToTarget" title="Lire la suite" @click.prevent="goToByScroll(goToTarget)">
                                    <i class="hero-banner-fa-angle-down animate__animated animate__slideInDown fa fa-angle-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Swal from 'sweetalert2'

export default {
    data() {
        return {
            ajaxRoute: String,
            heroBanner: {},
            heroBannerClass: String,
            logoDefault: String,
            media: String,
            routeContact: String,
            goToTarget: String,
        }
    },
    props: {
        //
    },
    methods: {
        goToByScroll(id) {
            // Scroll
            jQuery('html,body').animate({scrollTop: jQuery(id).offset().top}, 'slow');
        }
    },
    mounted() {
        this.ajaxRoute = this.$el.getAttribute('ajax-route')
        this.heroBannerClass = this.$el.getAttribute('hero-banner-class')
        this.goToTarget = this.$el.getAttribute('go-to-target')

        // Get Ajax method
        axios.get(this.ajaxRoute)
        .then((response) => {
            const data = response.data
            this.heroBanner = data.data
            this.media = data.data.media
            this.logoDefault = data.logo_default
            this.routeContact = data.route_contact
        })
        .catch((error) => {
            // Call notification Swal
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 7000,
                timerProgressBar: true,
                onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: 'Une erreur technique est survenue, veuillez réessayer ultérieurement.'
            })
        })
    }
}
</script>
