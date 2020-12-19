<template>
    <section :id="classId" :class="classSection">
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
import Swal from 'sweetalert2'

export default {
    data() {
        return {
            ajaxRoute: String,
            classId: String,
            classSection: String,
            page: {},
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
