<template>
    <transition name="modal-fade">
        <div class="modal-backdrop">
            <div class="modal-generate-passwd"
                 role="dialog"
                 aria-labelledby="modalTitle"
                 aria-describedby="modalDescription">

                <header
                    class="modal-header"
                    id="modalTitle">
                    <slot name="header">
                        {{ __('generate new password') }}
                        <button
                            type="button"
                            class="btn-close"
                            @click.prevent="close"
                            aria-label="Close modal-generate-passwd">
                            x
                        </button>
                    </slot>
                </header>

                <section
                    class="modal-body"
                    id="modalDescription">
                    <slot name="body">
                        <!-- Two columns -->
                        <div class="flex mb-4">
                            <div class="w-3/5 text-center">
                                <span>{{ newPassword }}</span>
                            </div>
                            <div class="w-2/5">
                                <button
                                    type="submit"
                                    class="btn btn-default btn-primary items-center relative"
                                    @click.prevent="generateNewPassword">
                                    {{ __('generate new password') }}
                                </button>
                            </div>
                        </div>
                    </slot>
                </section>

                <footer class="modal-footer">
                    <slot name="footer">
                        <div class="w-1/2">
                            <button
                                type="button"
                                class="btn btn-default btn-primary items-center relative w-full"
                                @click="validate"
                                aria-label="Validate modal-generate-passwd">
                                {{ __('Validate') }}
                            </button>
                        </div>

                        <div class="w-1/2">
                            <button
                                type="button"
                                class="btn btn-default btn-primary items-center relative w-full"
                                @click="close"
                                aria-label="Close modal-generate-passwd">
                                {{ __('Cancel') }}
                            </button>
                        </div>
                    </slot>
                </footer>
            </div>
        </div>
    </transition>
</template>

<script>
    export default {
        name: 'modal-generate-passwd',

        data () {
            return {
                newPassword: '',
            }
        },

        mounted () {
            this.generateNewPassword()
        },

        methods: {
            /**
             * Close Modal
             */
            close() {
                this.$emit('close');
            },

            /**
             * Insert the new Password to password and confirm password field
             * and call method close modal
             */
            validate () {
                this.$parent.$parent.$data.password = this.newPassword
                this.$parent.$parent.$data.confirm_password = this.newPassword
                // Close modal
                this.close()
            },

            /**
             * Getter
             * Send the new Password to component Form
             */
            getNewPassword () {
                return this.newPassword
            },

            /**
             * Function Generate Password,
             * Call service GeneratePassword to
             * Receive format Json
             */
            generateNewPassword () {
                Nova.request().get('/user/generate-new-password')
                    .then((response) => {
                        this.newPassword = response.data.result
                    })
                    .catch((error) => {
                        console.log('error ajax request ' + error)
                    })
            },
        }
    }
</script>
