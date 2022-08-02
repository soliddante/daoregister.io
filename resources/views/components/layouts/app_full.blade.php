<!DOCTYPE html>
<html lang="en" class="h-full snippet-html js-focus-visible">
@include('components.layouts.head')
<body class="h-full  antialiased">
    <main class="h-full" >
        <x-layouts.alert></x-layouts.alert>
            {{ $slot }}
    </main>
</body>

</html>
