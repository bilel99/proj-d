<template>
    <section :id="classId" :class="classSection">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">{{ page.title }}</h2>
                    <hr class="botm-line page-botm-line">
                </div>

                <div class="medical-house col-12 px-5">
                    <nav class="custom_tabs text-center">
                        <div class="nav" id="nav-tab" role="tablist">
                            <a v-for="(item, index) in page.medical_house"
                               :class="index === 0 ? 'nav-item nav-link active' : 'nav-item nav-link'"
                               :id="'nav-tab-' + item.id"
                               data-toggle="tab"
                               :title="item.title"
                               :href="'#nav-'+ item.id"
                               role="tab"
                               :aria-controls="'nav-' + item.id"
                               aria-selected="true"
                               @click.prevent="getMedicalHouse(item.id)">
                                {{ item.title }}
                            </a>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div v-for="(item, index) in page.medical_house"
                             :class="index === 0 ? 'tab-pane fade show active' : 'tab-pane fade'"
                             :id="'nav-' + item.id"
                             role="tabpanel"
                             :aria-labelledby="'nav-tab-' + item.id">
                            <div class="container">
                                <div class="row">
                                    <p class="text-muted text-center pb-3" v-html="item.content"></p>

                                    <div class="col-lg-8 col-sm-12 px-4 py-4">
                                        <div class="map-responsive" v-html="item.map"></div>
                                    </div>

                                    <div class="col-lg-3 offset-lg-1 col-sm-12 pt-3">
                                        <div v-for="(item, index) in house.info_med_house" class="media contact-info">
                                            <span class="contact-info__icon">
                                                <i :class="item.icon + ' fa-2x'"></i> &nbsp;
                                            </span>

                                            <div class="media-body">
                                                <h6>{{ item.title }}</h6>
                                                <p class="text-small text-muted" v-html="item.infos"></p>
                                            </div>
                                        </div>
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
            ajaxRouteAlert: String,
            ajaxGetHouse: String,
            classId: String,
            classSection: String,
            media: String,
            page: {},
            house: {},
        }
    },
    props: {
        //
    },
    methods: {
        getMedicalHouse(houseId) {
            // Get Api
            axios.get(this.ajaxGetHouse + houseId)
                .then((response) => {
                    const data = response.data
                    this.house = data.data
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
    },
    mounted() {

        this.ajaxRoute = this.$el.getAttribute('ajax-route')
        this.classId = this.$el.getAttribute('class_id')
        this.classSection = this.$el.getAttribute('class_section')

        // Prepare route Alert URL
        this.ajaxRouteAlert = this.ajaxRoute.split('ajax')[0] + 'ajax-find-alert/'

        // Prepare route Get House URL
        this.ajaxGetHouse = this.ajaxRoute.split('ajax')[0] + 'ajax-get-house/'

        // Get Api
        axios.get(this.ajaxRoute)
        .then((response) => {
            const data = response.data
            this.page = data.data
            this.media = data.media

            // medical_house key is not empty
            if (_.isEmpty(this.page.medical_house) === false) {
                // get first element to array
                let firstElement = _.head(this.page.medical_house)

                // Get Medical house method
                this.getMedicalHouse(firstElement.id)
            }
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
