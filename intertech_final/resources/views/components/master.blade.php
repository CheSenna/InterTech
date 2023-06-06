<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'InterTech Computers') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-arial antialiased">
        <x-banner />
            <header class="bg-white text-black text-center p-5" x-data="{ menuStatus: false }">
                <div>
                    <h1 class="font-bold">InterTech Computers</h1>
                    <div class="search-bar">
                        <input type="text" placeholder="Search...">
                    </div>
                </div>
            </header>
        <div>
                    @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" >Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" >Register</a>
                            @endif
                        @endauth
                    @endif
                @auth
        </div>

                    <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <a href="#"
                                         x-on:click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                    @endauth
                </div>
            </div>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <footer>
                &copy; 2023 InterTech - PC Parts Shop. All rights reserved.
            </footer>
        </div>
        @stack('modals')
        @livewireScripts
    </body>
</html>
