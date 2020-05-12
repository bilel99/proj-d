@if (Session::has('warning'))
    <script>
        iziToast.warning({
            position: 'bottomRight', // center, bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            progressBarColor: '',
            backgroundColor: '',
            messageSize: '',
            messageColor: '',
            icon: 'fas fa-exclamation',
            image: '',
            imageWidth: 50,
            balloon: true,
            drag: true,
            progressBar: true,
            timeout: 7000,
            title: '',
            message: '{{ session('warning') }}',
        });
    </script>
@endif
