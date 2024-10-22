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
    </body>
</html>
