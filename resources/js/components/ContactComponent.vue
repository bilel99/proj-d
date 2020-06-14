<template>
    <!-- section contact -->
    <section :id="classId" :class="classSection">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">{{ page.title }}</h2>
                    <hr class="botm-line">
                    <p class="py-3" v-html="page.content"></p>
                </div>

                <div class="col-12 px-5 py-5">
                    <div v-for="(item, index) in page.alerts">
                        <message-alert-component :alert_id="item.id" :api_data="apiData"></message-alert-component>
                    </div>
                </div>

                <div class="col-12">
                    <div id="smartwizard" class="card">
                        <ul>
                            <li><a href="#step-1">Etape 1<br /><small>Séléctionner l'objet de votre demande</small></a></li>
                            <li><a href="#step-2" class="hide">Etapes 2<br /><small>Information civile</small></a></li>
                            <li><a href="#step-3" class="hide">Etapes 3<br /><small>Information médecin</small></a></li>
                        </ul>

                        <div>
                            <form class="form-contact py-5 px-5" action="" method="post">
                                <div id="step-1" class="">
                                    <!-- Select Obect -->
                                    <div class="form-group col-12">
                                        <label for="dem_object">Séléctionner l'objet de votre demande <i class="mandatory">*</i></label>
                                        <select name="dem_object" id="dem_object" class="form-control" required>
                                            <option v-for="(item, index) in contactElm.objDemandeOptions"
                                                    :value="index">{{ item }}
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div id="step-2" class="hide">
                                    <!-- Part Civility -->
                                    <div class="form-row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="switch-radio" class="d-block">Civilité <i class="mandatory">*</i></label>
                                            <div class="input-group">
                                                <div id="switch-radio" class="btn-group">
                                                    <a v-for="(item, index) in contactElm.civility"
                                                       :class="item === 'Mr' ? 'btn btn-primary btn active' : 'btn btn-primary btn notActive'"
                                                       data-toggle="happy"
                                                       :data-title="item"
                                                       @click.prevent="switchRadioButton()">
                                                        {{ item }}
                                                    </a>
                                                </div>
                                                <input type="hidden" name="civility" id="civility" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Nom <i class="mandatory">*</i></label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Nom" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="firstname">Prénom <i class="mandatory">*</i></label>
                                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prénom" required>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="email">Email <i class="mandatory">*</i></label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                        </div>
                                    </div>

                                    <hr>
                                    <!-- Part adress -->

                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="address">Adresse <i class="mandatory">*</i></label>
                                            <input type="text" class="form-control" name="address" id="address" placeholder="Adresse" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="cp">Code postal <i class="mandatory">*</i></label>
                                            <input type="number" class="form-control" name="cp" id="cp" placeholder="Code postal" required>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="phone">Téléphone <i class="mandatory">*</i></label>
                                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Téléphone" required pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$">
                                        </div>
                                    </div>
                                </div>

                                <div id="step-3" class="hide">
                                    <!-- Part Consultation -->
                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="date_consult">Date de consultation <i class="mandatory">*</i></label>
                                            <input type="date" class="form-control" name="date_consult" id="date_consult" placeholder="Date de consultation" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="doctor_name">Nom du médecin <i class="mandatory">*</i></label>
                                            <input type="text" class="form-control" name="doctor_name" id="doctor_name" placeholder="Nom du docteur" required>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="doctor_firstname">Prénom du médecin <i class="mandatory">*</i></label>
                                            <input type="text" class="form-control" name="doctor_firstname" id="doctor_firstname" placeholder="Prénom du docteur" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="obj_demande_medecin">Objet de la demande <i class="mandatory">*</i></label>
                                            <input type="text" class="form-control" name="obj_demande_medecin" id="obj_demande_medecin" placeholder="Objet de la demande" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="text">Précisions </label>
                                            <textarea name="text" id="text" class="form-control" cols="30" rows="10">Merci de saisir votre texte ici</textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /end section -->
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
            page: {},
            media: String,
            routeName: String,
            contactElm: {}
        }
    },
    props: {
        page_id: Number,
    },
    methods: {
        /**
         * Custom Switch Button type Radio
         */
        switchRadioButton() {
            jQuery('#switch-radio a').on('click', function () {
                let current = jQuery(this).data('title')
                let toggle = jQuery(this).data('toggle')
                jQuery('#' + toggle).prop('value', current)

                jQuery('a[data-toggle="' + toggle + '"]').not('[data-title="' + current + '"]').removeClass('active').addClass('notActive')
                jQuery('a[data-toggle="' + toggle + '"][data-title="' + current + '"]').removeClass('notActive').addClass('active')
            })
        },
        
        /**
         * Wizard Form plugins
         * plugins jquerySmartWizard
         */
        contactWizardStepForm() {
            jQuery('#smartwizard').smartWizard({
                selected: 0,  // Initial selected step, 0 = first step
                keyNavigation: true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
                autoAdjustHeight: true, // Automatically adjust content height
                cycleSteps: false, // Allows to cycle the navigation of steps
                backButtonSupport: true, // Enable the back button support
                useURLhash: true, // Enable selection of the step based on url hash
                lang: {  // Language variables
                    next: 'Suivant',
                    previous: 'Précedent'
                },
                toolbarSettings: {
                    toolbarPosition: 'bottom', // none, top, bottom, both
                    toolbarButtonPosition: 'right', // left, right
                    showNextButton: true, // show/hide a Next button
                    showPreviousButton: true, // show/hide a Previous button
                    toolbarExtraButtons: [
                        jQuery('<button></button>').text('Envoyer')
                                .addClass('boxed-btn3')
                                .on('click', function () {
                                    this.submitForm()
                                })
                    ]
                },
                anchorSettings: {
                    anchorClickable: false, // Enable/Disable anchor navigation
                    enableAllAnchors: false, // Activates all anchors clickable all times
                    markDoneStep: true, // add done css
                    markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                    removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                    enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                },
                contentURL: null, // content url, Enables Ajax content loading. can set as data data-content-url on anchor
                disabledSteps: [],    // Array Steps disabled
                hiddenSteps: [],    // an array of step numbers to be hidden
                errorSteps: [],    // Highlight step with errors
                theme: 'dots',
                transitionEffect: 'fade', // Effect on navigation, none/slide/fade
                transitionSpeed: '400'
            })

            // Custom Btn
            jQuery('button.sw-btn-next').removeClass('btn btn-secondary').addClass('my-3 boxed-btn')
            jQuery('button.sw-btn-prev').removeClass('btn btn-secondary').addClass('my-3 boxed-btn')

            // init Disabled button finish
            if (jQuery('button.sw-btn-next').hasClass('disabled')) {
                jQuery('button.sw-btn-next').hide()
                jQuery('.sw-btn-group-extra').show() // show the button extra only in the last page
            } else {
                jQuery('button.sw-btn-next').show()
                jQuery('.sw-btn-group-extra').hide()
            }

            // (Events) Enabled button finish to next is disabled
            jQuery("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection) {
                if (jQuery('button.sw-btn-next').hasClass('disabled')) {
                    jQuery('button.sw-btn-next').hide()
                    jQuery('.sw-btn-group-extra').show() // show the button extra only in the last page
                } else {
                    jQuery('button.sw-btn-next').show()
                    jQuery('.sw-btn-group-extra').hide()
                }
            })
        },

        submitForm() {
            console.log('submit form')
        }
    },
    mounted() {
        this.classId = this.$el.getAttribute('class_id')
        this.classSection = this.$el.getAttribute('class_section')
        this.apiData = document.querySelector('#app').getAttribute('data-base-api')
        this.routeName = this.$el.getAttribute('route_name')

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
        })
        .catch((error) => {
            console.log(error)
        })

        // Get Api
        axios.get(this.apiData + 'get-elements-to-contact', {
            auth: {
                username: basicAuthUsername,
                password: basicAuthPassword
            }
        })
        .then((response) => {
            const data = response.data
            this.contactElm = data

            // Call Wizard Form Contact
            this.contactWizardStepForm()
        })
        .catch((error) => {
            console.log(error)
        })
    }
}
</script>
