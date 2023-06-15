<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/layout/favicon.png')}}">
        <meta name="description" content="Tauro Transporte - Arriendo de vehículos particulares y de carga"/>

        <title>Arriendo de vehículos y transporte de carga</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')
             <a class="fixed z-30 bottom-7 right-8 shadow-lime-900" href="https://api.whatsapp.com/send?phone=56950694091" target="_blank" rel="noopener">
                <img src="{{ asset('/img/layout/whatsapp.png') }}" width="64px" height="64px" alt="icono">        
            </a> 

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
         <script src="{{asset('js/main.js')}} "> </script>
    </body>
</html>