<!DOCTYPE html>
<html lang="en" class="h-full {{ isset($white) ? 'bg-white' : 'bg-gray-50 ' }} snippet-html js-focus-visible">
<x-layout.head></x-layout.head>

<body class="h-full antialiased ">
    <main class="h-full {{ $mainClass ?? '' }}">
        <x-layout.alert></x-layout.alert>
        @if (!isset($fullpage))
            <x-layout.nav_main />
        @endif
        <div class="min-h-screen css_main_div">
            {{ $slot }}
        </div>
    </main>
    <x-code.check_unsigned_dao></x-code.check_unsigned_dao>

    <x-layout.footer></x-layout.footer>

</body>

</html>
