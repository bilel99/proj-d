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
import Swal from 'sweetalert2'

export default {
    data() {
        return {
            hours: {
                ajaxRoute: String,
            }
        }
    },
    props: {
        //
    },
    mounted() {
        this.ajaxRoute = this.$el.getAttribute('ajax-route')

        // Get Ajax method
        axios.get(this.ajaxRoute)
                .then((response) => {
                    const data = response.data
                    this.hours = data.data
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
