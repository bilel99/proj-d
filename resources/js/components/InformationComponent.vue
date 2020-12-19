<template>
    <section id="information" class="section-bg-grey section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">{{ page.title }}</h2>
                    <hr class="botm-line page-botm-line">
                </div>

                <div :class="media !== null ? 'information col-lg-6 col-md-12' : 'information col-12'">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div v-for="(item, index) in information" class="panel panel-default">
                            <div class="panel-heading" role="tab" :id="'heading-' + item.id">
                                <h4 class="panel-title">
                                    <a role="button" class="collapsed" :title="item.title" data-toggle="collapse" data-parent="#accordion" :href="'#collapse-' + item.id"
                                       aria-expanded="false" :aria-controls="'collapse-' + item.id">
                                        {{ item.title }}
                                    </a>
                                </h4>
                            </div>
                            <div :id="'collapse-' + item.id" class="panel-collapse collapse in" role="tabpanel"
                                 :aria-labelledby="'heading-' + item.id">
                                <div class="panel-body">
                                    <p v-html="item.content"></p>

                                    <!-- Hours Component -->
                                    <div v-if="item.id === 1">
                                        <horaire-component
                                                :ajax-route="ajaxRouteHoraires">
                                        </horaire-component>
                                    </div>

                                    <div v-if="item.alert_id !== null">
                                        <message-alert-component :ajax-route="ajaxRouteAlert + item.alert_id"></message-alert-component>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="media !== null" class="col-lg-6">
                    <img :src="media" class="img-responsive page-media" alt="logo information">
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
            ajaxRouteAlert: String,
            ajaxRouteHoraires: String,
            classId: String,
            classSection: String,
            media: String,
            page: {},
            information: {},
        }
    },
    props: {
        //
    },
    mounted() {
        this.ajaxRoute = this.$el.getAttribute('ajax-route')
        this.classId = this.$el.getAttribute('class_id')
        this.classSection = this.$el.getAttribute('class_section')

        // Prepare route Alert URL
        this.ajaxRouteAlert = this.ajaxRoute.split('ajax')[0] + 'ajax-find-alert/'

        // Prepare route Horaire URL
        this.ajaxRouteHoraires = this.ajaxRoute.split('ajax')[0] + 'ajax-horaires'

        // Get Ajax method
        axios.get(this.ajaxRoute)
                .then((response) => {
                    const data = response.data
                    this.page = data.data
                    this.media = data.data.media
                    this.information = data.informations
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
