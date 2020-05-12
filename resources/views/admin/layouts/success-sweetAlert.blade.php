@if (Session::has('success-sweet-alert'))
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '{{ session('success-sweet-alert') }}',
            showConfirmButton: true,
            confirmButtonColor: '#1A3D73',
            confirmButtonText: 'Fermer',
        })
    </script>
@endif
