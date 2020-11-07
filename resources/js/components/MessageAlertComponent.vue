<template>
    <div v-if="getType(alert.types) === 'plain_text'">
        <div :class="getLevel(alert.levels)">
            <span class="block red">
                <i :class="alert.icon"></i>&nbsp;{{ alert.title }}
            </span>
            <p v-html="alert.content"></p>
        </div>
    </div>

    <div v-else-if="getType(alert.types) === 'alert-message'">
        <div :class="getLevel(alert.levels)">
            <h2 class="title"><i :class="alert.icon"></i>&nbsp; {{ alert.title }}</h2>
            <hr class="botm-line">

            <p v-html="alert.content"></p>
        </div>
    </div>

    <div v-else>
        <div :class="getLevel(alert.levels)">
            <h2 class="title"><i :class="alert.icon"></i>&nbsp; {{ alert.title }}</h2>
            <hr class="botm-line">

            <p v-html="alert.content"></p>
        </div>
    </div>
</template>

<script>
import Swal from 'sweetalert2'

export default {
    data() {
        return {
            ajaxRoute: String,
            alert: {},
        }
    },
    props: {
        //
    },
    methods: {
        getType: (type) => {
            switch (type) {
                case 1:
                    return 'alert'
                case 2:
                    return 'alert-message'
                case 3:
                    return 'plain_text'
                default:
                    return 'alert'
            }
        },
        getLevel: (alert) => {
            switch (alert) {
                case 1:
                    return 'alert-message alert-message-default'
                case 2:
                    return 'alert-message alert-message-info'
                case 3:
                    return 'alert-message alert-message-success'
                case 4:
                    return 'alert-message alert-message-warning'
                case 5:
                    return 'alert-message alert-message-danger'
                default:
                    return 'alert-message alert-message-info'
            }
        }
    },
    mounted() {
        this.ajaxRoute = this.$el.getAttribute('ajax-route')

        // Get Api
        axios.get(this.ajaxRoute)
        .then((response) => {
            const data = response.data
            this.alert = data.data
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
