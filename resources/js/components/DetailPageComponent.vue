<template>
    
</template>

<script>
const basicAuthUsername = 'docteur-de-garde'
const basicAuthPassword = '$2y$10$/i9/jW2Ux0oWjF3VH4VkuOMH1i0TMsSJP.sGFpoaR.4/b/1Jkd36e'

export default {
    data() {
        return {
            apiData: String,
            page: {},
            imgDefault: String,
            media: String,
        }
    },
    props: {
        page_id: Number,
    },
    mounted() {
        this.imgDefault = this.$el.getAttribute('img_default')
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
        })
        .catch((error) => {
            console.log(error)
        })
    }
}
</script>
