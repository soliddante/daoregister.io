<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>DaoRegister</title>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/walletconnect2.js') }}"></script>
    <script src="{{ asset('js/html2canvas.min.js') }}"></script>
    <script src="{{ asset('js/web3.min.js') }}"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('js/walletconnect2.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/tippy-bundle.umd.min.js') }}"></script>
    <script src="{{ asset('js/just-validate.production.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v?@php echo(rand(0,100000)) @endphp">
    <style>
        @font-face {
            font-family: inter;
            src: url({{ asset('fonts/inter.woff2') }});
        }

        * {
            font-family: inter;
        }

        .iti {
            width: 100%;
        }
    </style>

</head>
{{-- //CHEKCED ADD CANCEL CONTRACT --}}
{{-- //CHEKCED NOT PUBLISHED CONTRACT CANT UPDATE --}}
{{-- //TODO CONTRACT ON BLOCKCHAIN BULK OR NUT --}}
{{-- //TODO EMAIL DESIGN --}}
{{-- //CHECKED EMAIL SHOULD CANT CHANGE --}}
{{-- //TODO SELL CONTRACT --}}
{{-- //CHECKED SHOW ONLY LAST PUBLISHED ON DISCOVER --}}
{{-- //CHECKED  SHOW VAZIATE CARBARAYE CONTRACT VA KHODET --}}
{{-- //CHECKED FAGHAT UNPUBLISHED CONTRACT BETOONE VOTE BEGIRE --}}
{{-- //CHECKED SHOW CONTRACT OLD VERSIONS LIKE GITHUB --}}
{{-- //TODOONLYLASTBRANCHESCANUPDATE --}}
