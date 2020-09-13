<template>
    <div class="col-12">
        <div class="card-contact">
            <h3 class="title-form text-center py-5">Demande de contact</h3>

            <form class="form-contact px-5" method="post" @submit.prevent="submitForm()">
                <div id="step-1">
                    <!-- Select Obect -->
                    <div class="col-12">
                        <label for="objet_demande">Séléctionner l'objet de votre demande <i class="mandatory">*</i></label>
                        <multiselect
                            v-model="objet_demande"
                            name="objet_demande"
                            id="objet_demande"
                            :class="errors.objet_demande ? 'is-invalid' : ''"
                            :options="optionsDemandeObj"
                            :searchable="false"
                            :close-on-select="true"
                            placeholder="Séléctionner un objet"
                            label="value"
                            selectLabel="Faite votre choix"
                            deselectLabel="Appuyer pour annuler votre choix"
                            :custom-label="valueWithKey"
                            :preselect-first="true"
                            title="Votre objet">
                        </multiselect>

                        <!-- Error message -->
                        <span v-if="errors.length !== 0" class="invalid-feedback" role="alert">
                            <strong v-if="errors && errors.objet_demande">{{ errors.objet_demande[0] }}</strong>
                        </span>
                    </div>
                </div>

                <div id="step-2">
                    <hr>
                    <!-- Part Civility -->
                    <div class="form-row">
                        <div class="col-12">
                            <label for="civility">Civilité <i class="mandatory">*</i></label>
                            <multiselect
                                v-model="civility"
                                name="civility"
                                id="civility"
                                :class="errors.civility ? 'is-invalid' : ''"
                                :options="optionsCivility"
                                :searchable="false"
                                :close-on-select="true"
                                placeholder="Séléctionner une civilité"
                                label="value"
                                selectLabel="Faite votre choix"
                                deselectLabel="Appuyer pour annuler votre choix"
                                :custom-label="valueWithKey"
                                :preselect-first="true"
                                title="Votre civilité">
                            </multiselect>

                            <!-- Error message -->
                            <span v-if="errors.length !== 0" class="invalid-feedback" role="alert">
                                <strong v-if="errors && errors.civility">{{ errors.civility[0] }}</strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Nom <i class="mandatory">*</i></label>
                            <input type="text"
                                   :class="errors.name ? 'form-control is-invalid' : 'form-control'"
                                   name="name"
                                   id="name"
                                   v-model="name"
                                   placeholder="Nom"
                                   required
                                   minlength="2"
                                   title="Votre nom">

                            <!-- Error message -->
                            <span v-if="errors.length !== 0" class="invalid-feedback" role="alert">
                                <strong v-if="errors && errors.name">{{ errors.name[0] }}</strong>
                            </span>
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="firstname">Prénom <i class="mandatory">*</i></label>
                            <input type="text"
                                   :class="errors.firstname ? 'form-control is-invalid' : 'form-control'"
                                   name="firstname"
                                   id="firstname"
                                   v-model="firstname"
                                   placeholder="Prénom"
                                   required
                                   minlength="2"
                                   title="Votre prénom">

                            <!-- Error message -->
                            <span v-if="errors.length !== 0" class="invalid-feedback" role="alert">
                                <strong v-if="errors && errors.firstname">{{ errors.firstname[0] }}</strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="email">Email <i class="mandatory">*</i></label>
                            <input type="email"
                                   :class="errors.email ? 'form-control is-invalid' : 'form-control'"
                                   name="email"
                                   id="email"
                                   v-model="email"
                                   placeholder="Email"
                                   required
                                   minlength="2"
                                   title="Votre email">

                            <!-- Error message -->
                            <span v-if="errors.length !== 0" class="invalid-feedback" role="alert">
                                <strong v-if="errors && errors.email">{{ errors.email[0] }}</strong>
                            </span>
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="address">Adresse <i class="mandatory">*</i></label>
                            <input type="text"
                                   :class="errors.address ? 'form-control is-invalid' : 'form-control'"
                                   name="address"
                                   id="address"
                                   v-model="address"
                                   placeholder="Adresse"
                                   required
                                   minlength="7"
                                   title="Votre adresse">

                            <!-- Error message -->
                            <span v-if="errors.length !== 0" class="invalid-feedback" role="alert">
                                <strong v-if="errors && errors.address">{{ errors.address[0] }}</strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="postal_code">Code postal <i class="mandatory">*</i></label>
                            <input type="text"
                                   :class="errors.postal_code ? 'form-control is-invalid' : 'form-control'"
                                   name="postal_code"
                                   id="postal_code"
                                   v-model="postal_code"
                                   placeholder="Code postal"
                                   required
                                   inputmode="numeric"
                                   pattern="[0-9]{5}"
                                   title="Votre code postal">

                            <!-- Error message -->
                            <span v-if="errors.length !== 0" class="invalid-feedback" role="alert">
                                <strong v-if="errors && errors.postal_code">{{ errors.postal_code[0] }}</strong>
                            </span>
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="phone">Téléphone <i class="mandatory">*</i></label>
                            <input type="tel"
                                   :class="errors.phone ? 'form-control is-invalid' : 'form-control'"
                                   name="phone"
                                   id="phone"
                                   v-model="phone"
                                   placeholder="Téléphone"
                                   required
                                   pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$"
                                   title="Votre numéro de téléphone">

                            <!-- Error message -->
                            <span v-if="errors.length !== 0" class="invalid-feedback" role="alert">
                                <strong v-if="errors && errors.phone">{{ errors.phone[0] }}</strong>
                            </span>
                        </div>
                    </div>
                </div>

                <div id="step-3">
                    <hr>
                    <!-- Part Consultation -->
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="date_consultation">Date de consultation <i class="mandatory">*</i></label>
                            <datetime
                                    type="date"
                                    id="date_consultation"
                                    name="date_consultation"
                                    v-model="date_consultation"
                                    :input-class="errors.date_consultation ? 'form-control is-invalid' : 'form-control'"
                                    :format="{ year: 'numeric', month: 'long', day: 'numeric' }"
                                    :phrases="{ok: 'Continuer', cancel: 'Fermer'}"
                                    :week-start="7"
                                    :max-datetime="new Date().toISOString()"
                                    auto
                                    placeholder="Date de consultation"
                                    required
                                    title="La date de consultation">
                            </datetime>

                            <!-- Error message -->
                            <span v-if="errors.length !== 0" class="invalid-feedback" role="alert">
                                <strong v-if="errors && errors.date_consultation">{{ errors.date_consultation[0] }}</strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="doctor_name">Nom du médecin <i class="mandatory">*</i></label>
                            <input type="text"
                                   :class="errors.doctor_name ? 'form-control is-invalid' : 'form-control'"
                                   name="doctor_name"
                                   id="doctor_name"
                                   v-model="doctor_name"
                                   placeholder="Nom du docteur"
                                   required
                                   minlength="2"
                                   title="Le nom du docteur">

                            <!-- Error message -->
                            <span v-if="errors.length !== 0" class="invalid-feedback" role="alert">
                                <strong v-if="errors && errors.doctor_name">{{ errors.doctor_name[0] }}</strong>
                            </span>
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="doctor_firstname">Prénom du médecin <i class="mandatory">*</i></label>
                            <input type="text"
                                   :class="errors.doctor_firstname ? 'form-control is-invalid' : 'form-control'"
                                   name="doctor_firstname"
                                   id="doctor_firstname"
                                   v-model="doctor_firstname"
                                   placeholder="Prénom du docteur"
                                   required
                                   minlength="2"
                                   title="Le prénom du docteur">

                            <!-- Error message -->
                            <span v-if="errors.length !== 0" class="invalid-feedback" role="alert">
                                <strong v-if="errors && errors.doctor_firstname">{{ errors.doctor_firstname[0] }}</strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="objet_demande_doctor">Objet de la demande <i class="mandatory">*</i></label>
                            <input type="text"
                                   :class="errors.objet_demande_doctor ? 'form-control is-invalid' : 'form-control'"
                                   name="objet_demande_doctor"
                                   id="objet_demande_doctor"
                                   v-model="objet_demande_doctor"
                                   placeholder="Objet de la demande"
                                   required
                                   minlength="4"
                                   title="Votre objet">

                            <!-- Error message -->
                            <span v-if="errors.length !== 0" class="invalid-feedback" role="alert">
                                <strong v-if="errors && errors.objet_demande_doctor">{{ errors.objet_demande_doctor[0] }}</strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="precisions">Précisions <i class="small" style="color: gray;">(optionnel)</i></label>
                            <textarea
                                    name="precisions"
                                    id="precisions"
                                    :class="errors.precisions ? 'form-control is-invalid' : 'form-control'"
                                    v-model="precisions"
                                    col="40"
                                    rows="1"
                                    title="Ajouter une précision"
                                    @input="updateTextareaHeight()"></textarea>

                            <!-- Error message -->
                            <span v-if="errors.length !== 0" class="invalid-feedback" role="alert">
                                <strong v-if="errors && errors.precisions">{{ errors.precisions[0] }}</strong>
                            </span>
                        </div>
                    </div>
                </div>

                <div id="action-button" class="form-group">
                    <button type="submit" class="float-right boxed-btn3 my-3">Envoyé</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import Swal from 'sweetalert2'
import { Datetime } from 'vue-datetime';
import 'vue-datetime/dist/vue-datetime.css'
import { Settings } from 'luxon'
import Multiselect from 'vue-multiselect'
import 'vue-multiselect/dist/vue-multiselect.min.css'

Settings.defaultLocale = 'fr'
const access_token = '$2y$10$/i9/jW2Ux0oWjF3VH4VkuOMH1i0TMsSJP.sGFpoaR.4/b/1Jkd36e'

export default {
    components: {
        datetime: Datetime,
        Multiselect
    },
    data() {
        return {
            apiData: String,
            contactElm: {},
            optionsDemandeObj: [],
            optionsCivility: [],
            responseSuccess: {},
            successMessage: {},
            errors: [],
            doctorNotFound: String,
            // Form
            objet_demande: '',
            civility: '',
            name: '',
            firstname: '',
            email: '',
            address: '',
            postal_code: '',
            phone: '',
            date_consultation: '',
            doctor_name: '',
            doctor_firstname: '',
            objet_demande_doctor: '',
            precisions: ''
        }
    },
    props: {
    },
    methods: {
        valueWithKey ({ key, value }) {
            return `${value}`
        },
        updateTextareaHeight() {
            const textarea = document.getElementById('precisions')
            textarea.style.height = 'auto';
            textarea.style.height = textarea.scrollHeight+'px';
        },
        submitForm() {
            // POST Api
            axios.post(this.apiData + 'contact/form-create?access_token=' + access_token, {
                // FormData
                objet_demande: this.objet_demande.key,
                civility: this.civility.key,
                name: this.name,
                firstname: this.firstname,
                email: this.email,
                address: this.address,
                postal_code: this.postal_code,
                phone: this.phone,
                date_consultation: this.date_consultation,
                doctor_name: this.doctor_name,
                doctor_firstname: this.doctor_firstname,
                objet_demande_doctor: this.objet_demande_doctor,
                precisions: this.precisions
            })
            .then((response) => {
                const data = response.data

                if (data.success === false && data.errors_form === true) {
                    this.errors = data.errors
                }

                if (data.success === false && data.errors_form === false) {
                    this.doctorNotFound = data.errors

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
                        title: this.doctorNotFound
                    })
                }

                if (data.success === true) {
                    this.successMessage = data.message
                    this.responseSuccess = data.data

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
                        icon: 'success',
                        title: this.successMessage
                    })

                    // Redirect to home
                    window.location = '/'
                }
            }).catch((error) => {
                console.log(error)
            })
        }
    },
    mounted() {
        this.apiData = document.querySelector('#app').getAttribute('data-base-api')

        // Get Api
        axios.get(this.apiData + 'get-elements-to-contact' + '?access_token=' + access_token)
        .then((response) => {
            const data = response.data
            this.contactElm = data

            // Create Option array to objDemandeOptions
            for (let [key, value] of Object.entries(this.contactElm.objDemandeOptions)) {
                this.optionsDemandeObj.push({ key: key, value: value })
            }

            // Create Option array to civility
            for (let [key, value] of Object.entries(this.contactElm.civility)) {
                this.optionsCivility.push({ key: key, value: value })
            }
        })
        .catch((error) => {
            console.log(error)
        })
    }
}
</script>
