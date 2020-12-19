<template>
    <section :id="classId" :class="classSection">
        <div class="container">
            <div class="row">
                <div v-if="isButton === 'false'" class="back-page">
                    <a href="/" title="Retour" class="boxed-btn4 mx-3 mb-5">Retour</a>
                </div>

                <div class="col-12 py-3 px-3">
                    <h2 class="page-title">{{ page.title }}</h2>
                    <hr class="botm-line page-botm-line">
                    <p class="page-content py-3" v-html="page.content"></p>

                    <div class="col-12 prices-table">
                        <div class="table-responsive">
                            <div class="membership-pricing-table">
                                <table class="table table-responsive">
                                    <tbody>
                                    <tr>
                                        <th></th>

                                        <th class="plan-header plan-header-primary">
                                            <div class="pricing-plan-name">ADULTES &gt; 6 ans</div>
                                        </th>

                                        <th class="plan-header plan-header-secondary">
                                            <div class="header-plan-inner">
                                                <div class="pricing-plan-name">ENFANTS de 0 à 6 ans</div>
                                            </div>
                                        </th>
                                    </tr>

                                    <tr v-for="item in price">
                                        <td v-html="item.title"></td>
                                        <td v-html="item.content_row_1"></td>
                                        <td v-html="item.content_row_2"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div v-for="(item, index) in page.alerts" class="col-md-6 col-sm-12 page-alert-message">
                                <message-alert-component :ajax-route="ajaxRouteAlert + item.id"></message-alert-component>
                            </div>
                        </div>
                    </div>
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
            page: {},
            price: {},
            isButton: String,
            routePage: String
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
            this.price = data.data.price
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
