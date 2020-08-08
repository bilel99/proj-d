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
const basicAuthUsername = 'docteur-de-garde'
const basicAuthPassword = '$2y$10$/i9/jW2Ux0oWjF3VH4VkuOMH1i0TMsSJP.sGFpoaR.4/b/1Jkd36e'

export default {
    data() {
        return {
            apiData: String,
            alert: {},
        }
    },
    props: {
        alert_id: Number,
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
        this.apiData = document.querySelector('#app').getAttribute('data-base-api')

        // Get Api
        axios.get(this.apiData + 'alert/' + this.alert_id, {
            auth: {
                username: basicAuthUsername,
                password: basicAuthPassword
            }
        })
        .then((response) => {
            const data = response.data
            this.alert = data.data
        })
        .catch((error) => {
            console.log(error)
        })
    }
}
</script>
