<x-app-layout>
    <div class="min-h-screen grid place-items-center bg-green-100">
        <div class="container mx-auto">
            <!-- wrapper  -->
            <div class="flex flex-col lg:flex-row max-w-[850px] bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
                <!-- left  -->
                <div class="w-full lg:w-1/2 hidden lg:flex flex-col items-center justify-center p-12 bg-no-repeat bg-center bg-cover" style="background-image: url('https://th.bing.com/th/id/OIP.HmiaVTGoYjbdjyhwEs22LwHaHa?rs=1&pid=ImgDetMain')">
                </div>
                <!-- right  -->
                <div class="w-full lg:w-1/2 py-16 px-6 sm:px-12">
                    <!-- User Registration Form -->
                    <div id="userRegisterForm">
                        <h2 class="text-3xl mb-4 font-bold">Daftar Akun User</h2>
                        <p class="mb-4">Daftar sebagai user biasa untuk melihat produk UMKM!</p>
                        <form action="#" method="POST" class="space-y-4">
                            @csrf
                            <div>
                                <input type="text" class="border border-gray-400 py-1 px-2 w-full rounded focus:border-green-400" placeholder="Nama Lengkap">
                            </div>
                            <div>
                                <input type="number" placeholder="NIK" class="border border-gray-400 py-1 px-2 w-full rounded focus:border-green-400">
                            </div>
                            <div>
                                <input type="number" placeholder="Nomor HP" class="border border-gray-400 py-1 px-2 w-full rounded focus:border-green-400">
                            </div>
                            <div>
                                <input type="password" placeholder="Password" class="border border-gray-400 py-1 px-2 w-full rounded focus:border-green-400">
                            </div>
                            <div>
                                <input type="password" placeholder="Confirm Password" class="border border-gray-400 py-1 px-2 w-full rounded focus:border-green-400">
                            </div>
                            <div class="mt-5">
                                <input type="checkbox" class="border border-gray-400">
                                <span>
                                  I accept the <a href="#" class="text-green-500 font-semibold">Terms of Use</a> & <a href="#" class="text-green-500 font-semibold">Privacy Policy</a> 
                                </span>
                              </div>
                              <div class="mt-5">
                                    <button type="submit" class="bg-green-500 w-full text-center text-white py-3 rounded">Daftar</button>
                             </div>
                        </form>
                        <div class="mt-5">
                            <span class="text-sm">
                                Ingin mendaftarkan UMKM? hre <a href="{{ route('register-umkm') }}" class="cursor-pointer text-green-500 font-semibold underline">Daftar UMKM!</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
