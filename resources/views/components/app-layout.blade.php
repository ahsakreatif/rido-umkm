<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @isset($title)
                {{ $title }} | UMKM  
            @else
                UMKM
            @endisset
        </title>

         @vite('resources/css/app.css')
    </head>
    <body>
        <header class="">
            <x-navbar></x-navbar>
        </header>
        <main>
            {{ $slot }}
        </main>
        <footer class="container mx-auto">
            <x-footer></x-footer>
        </footer>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var navbar = document.getElementById('navbar');
                var scrollThreshold = 50; // Atur sesuai kebutuhan

                window.addEventListener('scroll', function() {
                    if (window.scrollY > scrollThreshold) {
                        navbar.classList.add('bg-white', 'shadow');
                    } else {
                        navbar.classList.remove('bg-white', 'shadow');
                    }
                });
            });
        </script>
    </body>
</html>
