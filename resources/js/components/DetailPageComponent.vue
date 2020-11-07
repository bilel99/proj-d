<template>
    <div>
        <h2 class="page-title">{{ page.title }}</h2>
        <hr class="botm-line page-botm-line">

        <p class="page-content" v-html="page.content"></p>

        <div v-for="(item, index) in page.alerts" class="page-alert-message">
            <message-alert-component :ajax-route="ajaxRouteAlert + item.id"></message-alert-component>
        </div>
    </div>
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
            media: String,
        }
    },
    props: {
        //
    },
    mounted() {
        this.ajaxRoute = this.$el.getAttribute('ajax-route')
        this.classId = this.$el.getAttribute('class_id')
        this.classSection = this.$el.getAttribute('class_section')
        
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
