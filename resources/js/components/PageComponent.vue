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
                          <message-alert-component :ajax-route="ajaxRouteAlert + item.alert_id"></message-alert-component>
                        </div>
                    </div>
                </div>

                <div v-else class="col-lg-6 col-sm-12">
                    <h2 class="page-title">{{ page.title }}</h2>
                    <hr class="botm-line page-botm-line">

                    <p class="page-content py-3" v-html="page.content"></p>

                    <div v-for="(item, index) in page.alerts" class="page-alert-message">
                        <message-alert-component :ajax-route="ajaxRouteAlert + item.alert_id"></message-alert-component>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img v-if="media !== ''" :src="media" class="img-responsive page-media" alt="Qui sommes nous ?">
                    <img v-else :src="imgDefault" class="img-responsive page-media" alt="Qui sommes nous ?">
                </div>
            </div>

            <!-- Button Link -->
            <div v-if="isButton === 'true' && routePage !== ''" class="d-flex justify-content-center mt-5 mb-3">
                <a :href="routePage" title="En savoir plus" class="boxed-btn3 page-btn">En savoir plus</a>
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
            ajaxRouteAlert: String,
            classId: String,
            classSection: String,
            routePage: String,
            page: {},
            imgDefault: String,
            media: String,
            isButton: String,
        }
    },
    props: {
        //
    },
    mounted() {
        this.ajaxRoute = this.$el.getAttribute('ajax-route')
        this.classId = this.$el.getAttribute('class_id')
        this.classSection = this.$el.getAttribute('class_section')
        this.isButton = this.$el.getAttribute('is_button')

        // Prepare route Alert URL
        this.ajaxRouteAlert = this.ajaxRoute.split('ajax')[0] + 'ajax-find-alert/'

        // Get Api
        axios.get(this.ajaxRoute)
        .then((response) => {
            const data = response.data
            this.page = data.data
            this.media = data.media
            this.routePage = data.route_page
            this.imgDefault = data.img_default
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
