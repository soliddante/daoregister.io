<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50 snippet-html js-focus-visible">
@include('components.layouts.head')

<body class="h-full antialiased bg-gray-50">
    <main class="h-full">
        <x-layouts.alert></x-layouts.alert>
        <x-layouts.nav />
        <div class="max-w-7xl mx-auto pb-4 px-2 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
    <script>
        $('.gls_alert').delay(3000).fadeOut();
    </script>
</body>

</html>
