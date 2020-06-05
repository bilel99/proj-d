<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">

            <!-- Type Password -->
            <div class="flex border-b border-40">
                <div class="w-1/2 px-8 py-6">
                    <label class="inline-block text-80 pt-2 leading-tight" for="password">
                        {{ __('Password') }}
                    </label>
                </div>
                <div class="py-6 px-8 w-full">
                    <input
                        type="password"
                        id="password"
                        :class="errorClasses"
                        class="w-full form-control form-input form-input-bordered"
                        v-model="password"
                        pattern="^(?=(.*[a-z])+)(?=(.*[A-Z]){1,})(?=(.*[0-9])+)(?=(.*[!?%&#^$*@\/:!\-+])+)([a-zA-Z0-9!?%&#^$*@\/:!\-+]){8,}$">
                </div>
            </div>

            <!-- Type Confirm Password -->
            <div class="flex border-b border-40">
                <div class="w-1/2 px-8 py-6">
                    <label class="inline-block text-80 pt-2 leading-tight" for="confirm_password">
                        {{ __('Confirm Password') }}
                    </label>
                </div>
                <div class="py-6 px-8 w-full">
                    <input
                        type="password"
                        id="confirm_password"
                        :class="errorClasses"
                        class="w-full form-control form-input form-input-bordered"
                        v-model="confirm_password"
                        pattern="^(?=(.*[a-z])+)(?=(.*[A-Z]){1,})(?=(.*[0-9])+)(?=(.*[!?%&#^$*@\/:!\-+])+)([a-zA-Z0-9!?%&#^$*@\/:!\-+]){8,}$"
                        @change.prevent="validateConfirmPassword"
                        @keyup.prevent="validateConfirmPassword">
                </div>
            </div>

            <!-- Button Generate Password -->
            <div class="flex border-b border-40">
                <div class="py-6 px-8 w-full">
                    <button
                        class="btn btn-default btn-primary items-center relative w-full"
                        @click.prevent="showModal">
                        {{ __('generate password') }}
                    </button>
                </div>
            </div>

            <!-- Modal -->
            <modal
                v-show="isModalVisible"
                @close="closeModal"
            />

        </template>
    </default-field>
</template>

<script>
    import modal from "./modal";
    import { FormField, HandlesValidationErrors } from 'laravel-nova'

    export default {
        mixins: [FormField, HandlesValidationErrors],

        props: ['resourceName', 'resourceId', 'field'],

        components: {
            modal,
        },

        data () {
            return {
                password: '',
                confirm_password: '',
                isModalVisible: false,
            }
        },

        computed: {
        },

        mounted () {
        },

        watch: {
        },

        methods: {
            /*
             * Set the initial, internal value for the field.
             */
            setInitialValue() {
                this.password = this.password || ''
                this.confirm_password = this.confirm_password || ''
            },

            /**
             * Fill the given FormData object with the field's internal value.
             */
            fill(formData) {
                const password = this.password
                const confirm_password = this.confirm_password

                formData.append('password', password || '')
                formData.append('confirm_password', confirm_password || '')
            },

            /**
             * Update the field's internal value.
             */
            handleChange(value) {
            },

            /**
             * Show Modal
             */
            showModal() {
                this.isModalVisible = true;
            },

            /**
             * Close Modal
             */
            closeModal() {
                this.isModalVisible = false;
            },

            /**
             * Rule confirm password equals password value
             */
            validateConfirmPassword() {
                let confirmPassword = document.getElementById('confirm_password')
                if (this.password !== this.confirm_password) {
                    // @todo find a way to translate using the fr.json file without going through an API if possible
                    confirmPassword.setCustomValidity('Vos 2 mots de passe saisis ne sont pas identiques.')
                } else {
                    confirmPassword.setCustomValidity('')
                }
            }
        }
    }
</script>
