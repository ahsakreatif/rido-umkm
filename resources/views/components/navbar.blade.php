@php
    $menuItems = [
        ['url' => '/', 'name' => 'Beranda'],
        ['url' => 'products', 'name' => 'Produk'],
        ['url' => 'services', 'name' => 'Tentang Kami'],
        ['url' => 'contact', 'name' => 'Kontak'],
    ];
    $isHomePage = request()->is('/');
@endphp
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 py-4 {{ $isHomePage ? 'text-white stroke-white' : 'text-black stroke-black' }}">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex gap-16 items-center">
            <a class="text-3xl font-bold leading-none flex gap-2 items-center" href="/">
                <svg width="33" height="34" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_1_358" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="33" height="34">
                        <path d="M0 6.5C0 3.67157 0 2.25736 0.87868 1.37868C1.75736 0.5 3.17157 0.5 6 0.5H31.2321C32.2085 0.5 33 1.2915 33 2.26786C33 19.5169 19.0169 33.5 1.76786 33.5C0.791496 33.5 0 32.7085 0 31.7321V6.5Z" fill="#99EA48" />
                    </mask>
                    <g mask="url(#mask0_1_358)">
                        <path d="M0 6.5C0 3.67157 0 2.25736 0.87868 1.37868C1.75736 0.5 3.17157 0.5 6 0.5H31.2321C32.2085 0.5 33 1.2915 33 2.26786C33 19.5169 19.0169 33.5 1.76786 33.5C0.791496 33.5 0 32.7085 0 31.7321V6.5Z" fill="#99EA48" />
                        <path d="M11 18C11 15.1716 11 13.7574 11.8787 12.8787C12.7574 12 14.1716 12 17 12H24.25C24.6642 12 25 12.3358 25 12.75C25 20.0678 19.0678 26 11.75 26C11.3358 26 11 25.6642 11 25.25V18Z" fill="#191F33" />
                    </g>
                </svg>
                <p class="text-2xl text-inherit">UMKM</p>
            </a>
            <ul class="hidden lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-4 text-inherit">
                @foreach($menuItems as $item)
                    <li>
                        <a 
                            class="text-inherit p-4 {{ request()->is($item['url']) ? 'font-bold after:block after:w-2 after:h-2 
                            after:bg-accent after:absolute after:left-0 after:right-0 after:bottom-[5px] after:mx-auto 
                            after:rounded-full relative hover:after:w-[60%] hover:after:h-1  
                            after:transition-all after:duration-200 before:block before:w-3 before:h-3 before:bg-accent before:animate-ping before:absolute
                            before:left-0 before:right-0 before:mx-auto before:bottom-1 before:rounded-full
                            hover:before:hidden' 
                            : 'font-medium hover:opacity-80' 
                            }} {{ $isHomePage ? 'text-inherit' : (request()->is($item['url']) ? 'text-black' : 'text-tertiary') }}" 
                            href="{{ url($item['url']) }}">
                            {{ $item['name'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <button class="btn hidden lg:block text-inherit">
            <svg class="svg absolute inset-0 w-full h-full" viewBox="0 0 180 60" preserveAspectRatio="none">
                <rect x="2" y="2" width="176" height="56" rx="28" ry="28" class="bg-line stroke-inherit" />
                <rect x="2" y="2" width="176" height="56" rx="28" ry="28" class="hl-line" />
            </svg>
            <span class="text-inherit relative z-10">Mulai Sekarang!</span>
        </button>
    </div>
</nav>
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="text-3xl mr-auto font-bold leading-none flex gap-2 items-center" href="#">
                <svg width="33" height="34" viewBox="0 0 33 34" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_1_358" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="33"
                        height="34">
                        <path
                            d="M0 6.5C0 3.67157 0 2.25736 0.87868 1.37868C1.75736 0.5 3.17157 0.5 6 0.5H31.2321C32.2085 0.5 33 1.2915 33 2.26786C33 19.5169 19.0169 33.5 1.76786 33.5C0.791496 33.5 0 32.7085 0 31.7321V6.5Z"
                            fill="#99EA48" />
                    </mask>
                    <g mask="url(#mask0_1_358)">
                        <path
                            d="M0 6.5C0 3.67157 0 2.25736 0.87868 1.37868C1.75736 0.5 3.17157 0.5 6 0.5H31.2321C32.2085 0.5 33 1.2915 33 2.26786C33 19.5169 19.0169 33.5 1.76786 33.5C0.791496 33.5 0 32.7085 0 31.7321V6.5Z"
                            fill="#99EA48" />
                        <path
                            d="M11 18C11 15.1716 11 13.7574 11.8787 12.8787C12.7574 12 14.1716 12 17 12H24.25C24.6642 12 25 12.3358 25 12.75C25 20.0678 19.0678 26 11.75 26C11.3358 26 11 25.6642 11 25.25V18Z"
                            fill="#191F33" />
                    </g>
                </svg>
                <p class="text-2xl">UMKM</p>
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded"
                        href="#">Beranda</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded"
                        href="#">Produk</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded"
                        href="#">Layanan</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded"
                        href="#">Harga</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded"
                        href="#">Kontak</a>
                </li>
            </ul>
        </div>
        <div class="mt-auto">
            <div class="pt-6">
                <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold bg-gray-50 hover:bg-gray-100 rounded-xl"
                    href="#">Sign in</a>
                <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-green-500 hover:bg-green-600  rounded-xl"
                    href="#">Sign Up</a>
            </div>
            <p class="my-4 text-xs text-center text-gray-400">
                <span>Copyright © UMKM</span>
            </p>
        </div>
    </nav>
</div>

<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });

    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 0) {
            // Scrolling down
            navbar.classList.remove('text-white', 'stroke-white');
            navbar.classList.add('bg-white', 'shadow', 'text-black', 'stroke-black');
        } else {
            // At the top
            if ({{ $isHomePage ? 'true' : 'false' }}) {
                navbar.classList.remove('bg-white', 'shadow', 'text-black', 'stroke-black');
                navbar.classList.add('text-white', 'stroke-white');
            } else {
                navbar.classList.remove('bg-white', 'shadow');
            }
        }
        lastScrollTop = scrollTop;
    });
</script>