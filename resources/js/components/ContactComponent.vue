<template>
    <!-- section contact -->
    <section :id="classId" :class="classSection">
        <div class="container">
            <div class="row">
                <div class="back-page">
                    <a href="/" class="boxed-btn4 mx-3 mb-5" title="Retour">Retour</a>
                </div>

                <div class="col-12">
                    <h2 class="page-title">{{ page.title }}</h2>
                    <hr class="botm-line page-botm-line">
                    <p class="page-content py-3" v-html="page.content"></p>
                </div>

                <div class="col-12 px-5 py-5">
                    <div v-for="(item, index) in page.alerts" class="page-alert-message">
                        <message-alert-component :ajax-route="ajaxRouteAlert + item.id"></message-alert-component>
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
import Swal from 'sweetalert2'

export default {
    data() {
        return {
            ajaxRoute: String,
            ajaxRouteAlert: String,
            classId: String,
            classSection: String,
            page: {},
            media: String,
            routePage: String,
        }
    },
    props: {
        //
    },
    mounted() {
        this.ajaxRoute = this.$el.getAttribute('ajax-route')
        this.classId = this.$el.getAttribute('class_id')
        this.classSection = this.$el.getAttribute('class_section')

        // Base url
        this.baseUrl = this.ajaxRoute.split('ajax')[0]
      
        // Prepare route Alert URL
        this.ajaxRouteAlert = this.ajaxRoute.split('ajax')[0] + 'ajax-find-alert/'
      
        // Get Api  
        axios.get(this.ajaxRoute)
        .then((response) => {
            const data = response.data
            this.page = data.data
            this.media = data.media
            this.routePage = data.route_page
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
