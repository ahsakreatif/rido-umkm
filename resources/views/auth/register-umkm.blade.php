<x-app-layout>
    <div class="min-h-screen grid place-items-center bg-green-100">
        <div class="container mx-auto">
            <!-- wrapper  -->
            
            <div class=" flex flex-col lg:flex-row max-w-[850px] bg-white rounded-xl mx-auto shadow-lg">
                <!-- left  -->
                <div class="w-full lg:w-1/2 hidden lg:flex flex-col items-center justify-center p-12 bg-no-repeat bg-center bg-cover" style="background-image: url('https://th.bing.com/th/id/OIP.HmiaVTGoYjbdjyhwEs22LwHaHa?rs=1&pid=ImgDetMain')">
                </div>
                <!-- right  -->
                <div class="w-full relative lg:w-1/2 py-16 px-6 sm:px-12">
                    <div class="absolute top-4 left-6 flex items-center gap-2 cursor-pointer" onclick="window.history.back()">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z" data-name="4-Arrow Left"/>
                        </svg>
                        <p class="text-lg font-bold text-black">Kembali</p>
                    </div>
                    <!-- UMKM Registration Form -->
                    <div id="umkmRegisterForm">
                        <h2 class="text-3xl mb-4 font-bold ">Pendaftaran UMKM</h2>
                        <p class="mb-4">Buat akun usaha Anda. Gratis dan hanya membutuhkan waktu sebentar</p>
                        @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                        <form action="{{ route('register-umkm') }}" method="POST" class="space-y-4">
                            @csrf
                            <div>
                                <input type="text" name="name" placeholder="Nama Lengkap" class="border border-gray-400 py-1 px-2 w-full rounded focus:border-green-400">
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="Email" class="border border-gray-400 py-1 px-2 w-full rounded focus:border-green-400">
                            </div>
                            <div>
                                <input type="text" name="nik" placeholder="NIK" class="border border-gray-400 py-1 px-2 w-full rounded focus:border-green-400">
                            </div>
                            <div>
                                <input type="text" name="phone" placeholder="Nomor HP" class="border border-gray-400 py-1 px-2 w-full rounded focus:border-green-400">
                            </div>
                            <div>
                                <input type="password" name="password" placeholder="Password" class="border border-gray-400 py-1 px-2 w-full rounded focus:border-green-400">
                            </div>
                            <div>
                                <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="border border-gray-400 py-1 px-2 w-full rounded focus:border-green-400">
                            </div>
                            {{-- <div class="mt-5">
                                <input type="checkbox" class="border border-gray-400">
                                <span>
                                  I accept the <a href="#" class="text-green-500 font-semibold">Terms of Use</a> & <a href="#" class="text-green-500 font-semibold">Privacy Policy</a> 
                                </span>
                              </div> --}}
                              <div class="mt-5">
                                <button type="submit" class="bg-green-500 w-full text-center text-white py-3 rounded">Daftar UMKM</button>
                                </div>
                        </form>
                        <div class="mt-5">
                            <span class="text-sm">
                                Daftar sebagai user biasa? <a href="{{ route('register-user') }}" class="cursor-pointer text-green-500 font-semibold underline">Daftar!</a>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
