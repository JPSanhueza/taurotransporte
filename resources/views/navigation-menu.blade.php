<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 ">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 py-1">
        <div class="flex justify-between h-16">
            <div class="flex justify-between w-full">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{asset('img/logoPrincipal.png')}}" alt="logo" class="w-auto h-16">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Inicio') }}
                    </x-nav-link>
                    <x-nav-link href="{{ url('/#somos') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Quiénes Somos') }}
                    </x-nav-link>
                    <x-nav-link href="{{ url('/#servicios') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Servicios') }}
                    </x-nav-link>
                    <x-nav-link href="{{ url('/#vehiculos') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Automóviles') }}
                    </x-nav-link>
                    <x-nav-link href="{{ url('/#contacto') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Contacto') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('norte') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Maquinarias Norte') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -mr-2 sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="absolute z-50 hidden w-full bg-white sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('dashboard')">
                {{ __('Inicio') }}
            </x-responsive-nav-link>
             <x-responsive-nav-link href="{{ url('/#somos') }}" :active="request()->routeIs('dashboard')">
                {{ __('Quiénes Somos') }}
            </x-responsive-nav-link>
             <x-responsive-nav-link href="{{ url('/#servicios') }}" :active="request()->routeIs('dashboard')">
                {{ __('Servicios') }}
            </x-responsive-nav-link>
             <x-responsive-nav-link href="{{ url('/#vehiculos') }}" :active="request()->routeIs('dashboard')">
                {{ __('Automóviles') }}
            </x-responsive-nav-link>
             <x-responsive-nav-link href="{{ url('/#contacto') }}" :active="request()->routeIs('dashboard')">
                {{ __('Contacto') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('norte') }}" :active="request()->routeIs('dashboard')">
                {{ __('Maquinarias Norte') }}
            </x-responsive-nav-link>
       </div>


    </div>
</nav>
