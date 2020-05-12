@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            iziToast.warning({
                position: 'topCenter', // center, bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
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
                message: '{{ $error }}',
            });
        </script>
    @endforeach
@endif
