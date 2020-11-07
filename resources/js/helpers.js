import Swal from 'sweetalert2'

class Helpers {


    /**
     * Error Ajax Request
     * @param xhr
     */
    static async handleErrorFn(xhr) {
        let message = '';
        if (xhr.status) {
            message = xhr.statusText;
        }else{
            message = xhr.responseJSON ? xhr.responseJSON.message : xhr;

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
        }
    }
}
