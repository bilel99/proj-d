<template>
    <div>
        <h3 class="my-3">Horaires d'ouverture :</h3>
        <table class="table table-striped">
            <tr v-for="(item, index) in hours">
                <th>{{ item.title }}</th>
                <th>{{ item.content }}</th>
            </tr>
        </table>
    </div>
</template>

<script>
const basicAuthUsername = 'docteur-de-garde'
const basicAuthPassword = '$2y$10$/i9/jW2Ux0oWjF3VH4VkuOMH1i0TMsSJP.sGFpoaR.4/b/1Jkd36e'

export default {
    data() {
        return {
            hours: {
                apiData: String,
            }
        }
    },
    props: {},
    mounted() {
        this.apiData = this.$el.getAttribute('api_data')

        // Get Api
        axios.get(this.apiData + 'horaire', {
            auth: {
                username: basicAuthUsername,
                password: basicAuthPassword
            }
        })
        .then((response) => {
            const data = response.data
            this.hours = data.data
        })
        .catch((error) => {
            console.log(error)
        })
    }
}
</script>