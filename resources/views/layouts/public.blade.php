<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', config('app.name', 'Laravel')) | {{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="@yield('meta_description', 'IKA SMAN 1 CIRUAS, ruang silaturahmi, publikasi, agenda, dan aspirasi alumni.')">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="public-shell">
        <x-public.navbar />

        <main>
            @yield('content')
        </main>

        <x-public.footer />
    </body>
</html>
