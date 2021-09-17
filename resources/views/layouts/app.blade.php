<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @stack('meta')

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

        @stack('styles')

        @stack('head-scripts')

        @push('styles')
            @livewireStyles
        @endpush

        <script src="{{ mix('/js/app.js') }}"></script>
    </head>

    <body>
        {{ $slot }}

        @stack('scripts')
        @livewireScripts
    </body>
</html>