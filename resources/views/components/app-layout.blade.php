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
        <section class="py-2"></section>
        <header class="sticky top-0 z-10 bg-white">
            <x-navbar></x-navbar>
        </header>
        <main class="container mx-auto">
            {{ $slot }}
        </main>
        <footer>
        </footer>
    </body>
</html>
