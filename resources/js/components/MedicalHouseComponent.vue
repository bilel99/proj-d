<template>
    <section :id="classId" :class="classSection">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">{{ page.title }}</h2>
                    <hr class="botm-line">
                    <p class="py-3" v-html="page.content"></p>
                </div>

                <div class="medical-house col-12 px-5">
                    <nav class="custom_tabs text-center">
                        <div class="nav" id="nav-tab" role="tablist">
                            <a v-for="(item, index) in page.medical_house"
                               :class="index === 0 ? 'nav-item nav-link active' : 'nav-item nav-link'"
                               :id="'nav-tab-' + item.id"
                               data-toggle="tab"
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
                                                <i :class="item.icon"></i>
                                            </span>

                                            <div class="media-body">
                                                <h3>{{ item.title }}</h3>
                                                <p v-html="item.infos"></p>
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
const basicAuthUsername = 'docteur-de-garde'
const basicAuthPassword = '$2y$10$/i9/jW2Ux0oWjF3VH4VkuOMH1i0TMsSJP.sGFpoaR.4/b/1Jkd36e'

export default {
    data() {
        return {
            classId: String,
            classSection: String,
            apiData: String,
            routePage: String,
            media: String,
            page: {},
            house: {},
        }
    },
    props: {
        page_id: Number,
    },
    methods: {
        getMedicalHouse(houseId) {
            // Get Api
            axios.get(this.apiData + 'get-relations-house/' + houseId, {
                auth: {
                    username: basicAuthUsername,
                    password: basicAuthPassword
                }
            })
            .then((response) => {
                const data = response.data
                this.house = data.data
            })
            .catch((error) => {
                console.log(error)
            })
        }
    },
    mounted() {
        this.classId = this.$el.getAttribute('class_id')
        this.classSection = this.$el.getAttribute('class_section')
        this.routePage = this.$el.getAttribute('route_page')
        this.apiData = this.$el.getAttribute('api_data')

        // Get Api
        axios.get(this.apiData + 'get-relations-page/' + this.page_id, {
            auth: {
                username: basicAuthUsername,
                password: basicAuthPassword
            }
        })
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
            console.log(error)
        })
    }
}
</script>
