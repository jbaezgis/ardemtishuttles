<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" href="{{asset('images/icon.png')}}" sizes="16x16" type="image/png">
        <link rel="icon" href="{{asset('images/icon.png')}}" sizes="32x32" type="image/png">
        <link rel="icon" href="{{asset('images/icon.png')}}" sizes="96x96" type="image/png">
        <link rel="icon" href="{{asset('images/icon.png')}}" sizes="180x180" type="image/png">

        <link rel="apple-touch-icon" href="{{asset('images/logo-cuadrado.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/logo-cuadrado.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/logo-cuadrado.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/logo-cuadrado.png')}}">

        <title>@yield('title') - ardemti</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">

        <meta property="og:description" content="@yield('description')" />
        <meta property="og:title" content="@yield('title')" />
        <meta property="og:url" content="https://ardemti.com" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="{{ app()->getLocale() }}" />
        <meta property="og:locale:alternate" content="es_ES" />
        <meta property="og:site_name" content="ardemti" />
        <meta property="og:image" content="@yield('og-image')" />
        <meta property="og:image:url" content="@yield('og-image-url')" />

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        <wireui:scripts />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <footer class="p-4 bg-white md:flex md:items-center md:justify-between md:px-6 md:py-2 border-t">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">Ardemti Administration.
            </span>
            <span class="text-sm text-gray-600">
                Version 1.0.0.1
            </span>
            <span class="text-sm text-gray-600">
                <a href="https://yoelbaez.com" target="_blank">
                    <img class="h-8" src="{{ asset('images/yoelbaez.png') }}" alt="{{ __('Developed by: Yoel Baez') }}">
                </a>
            </span>
        </footer>

        @stack('modals')

        <script type="text/javascript" src="{{ asset('js/gmap.js') }}"></script>
        @livewireScripts
    </body>
</html>
