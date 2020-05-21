import Swal from 'sweetalert2'

import {Helpers} from "./helpers";

export class Ajax extends Helpers {

    delete() {
        jQuery('.btn-delete').on('click', function (e) {
            e.preventDefault()
            const $this = jQuery(e.currentTarget)
            const form = $this.parent()
            const url = form.attr('action')
            const id = form.data('id')
            const type = 'DELETE'
            const data = form.serialize()
            const currentURL = window.location.href

            // Confirm popup
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    let ajxSuccessFn = async (res) => {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )

                        if (currentURL === res.routeIndex) {
                            const tr = $this.parents('tr')
                            tr.fadeOut()
                        } else {
                            setTimeout(() => {
                                window.location.href = res.routeIndex
                            }, 1500)
                        }

                        Helpers.showMessageSuccess(res.message)
                    }

                    Helpers.ajaxCall(url, data, type, 'json', null, true, 'application/x-www-form-urlencoded; charset=UTF-8').then(ajxSuccessFn, Helpers.handleErrorFn)
                }
            })
        })
    }

    created() {
        jQuery('.btn-created').on('click', function (e) {
            e.preventDefault()
            const $this = jQuery(e.currentTarget)
            const form = jQuery('#form-created')
            const url = form.attr('action')
            const type = 'POST'
            const data = form.serialize()
            const currentURL = window.location.href

            let ajxSuccessFn = async (res) => {
                if (currentURL === res.routeIndex) {
                    setTimeout(() => {
                        window.location.href = res.routeIndex
                    }, 1500)
                } else {
                    jQuery('#add_alert').modal('hide');

                    // Set the value, creating a new option if necessary
                    if (jQuery('#alerts').find("option[value='" + res.alert.id + "']").length) {
                        jQuery('#alerts').val(res.alert.id).trigger('change');
                    } else {
                        // Create a DOM Option and pre-select by default
                        let newOption = new Option(res.alert.title, res.alert.id, true, true);
                        // Append it to the select
                        jQuery('#alerts').append(newOption).trigger('change');
                    }
                }

                Helpers.showMessageSuccess(res.message)
            }

            Helpers.ajaxCall(url, data, type, 'json', null, true, 'application/x-www-form-urlencoded; charset=UTF-8').then(ajxSuccessFn, Helpers.handleErrorFn)
        })
    }
}