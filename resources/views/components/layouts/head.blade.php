<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DaoRegister</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/walletconnect2.js') }}"></script>
    <script src="{{ asset('js/html2canvas.min.js') }}"></script>
    <script src="{{ asset('js/web3.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.7.4/web3.min.js"></script> --}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('js/walletconnect2.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v?@php echo(rand(0,100000)) @endphp">
    <style>
        @font-face {
            font-family: inter;
            src: url({{ asset('fonts/inter.woff2') }});
        }
        * {
            font-family: inter;
        }
    </style>

</head>
