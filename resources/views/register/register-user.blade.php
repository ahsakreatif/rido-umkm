<x-app-layout>
    <div class="bg-gray-100 flex h-screen items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-sm md:max-w-md lg:max-w-lg space-y-6 mt-12"> <!-- Kurangi space-y untuk jarak antar elemen -->
            <div class="bg-white shadow-md rounded-md p-4"> <!-- Kurangi padding dari p-6 ke p-4 -->
    
                <img class="mx-auto h-12 w-auto" src="https://th.bing.com/th/id/OIP.CxQ2bTvLg_vPTwmt56B1swHaHa?w=860&h=860&rs=1&pid=ImgDetMain" alt="" /> <!-- Kurangi tinggi gambar -->
    
                <h2 class="my-2 text-center text-2xl font-bold tracking-tight text-gray-900"> <!-- Kurangi ukuran teks dan margin -->
                    Daftar akun
                </h2>
    
                <form class="space-y-4" method="POST"> <!-- Kurangi jarak antar input menjadi space-y-4 -->
    
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <div class="mt-1">
                            <input name="username" type="username" required
                                class="px-2 py-2 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" /> <!-- Kurangi padding input dari py-3 ke py-2 -->
                        </div>
                    </div>
    
                    <div>
                        <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                        <div class="mt-1">
                            <input name="nik" type="number" pattern="\d{16}" autocomplete="email-address" required
                                class="px-2 py-2 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                        </div>
                    </div>
    
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="mt-1">
                            <input name="password" type="password" autocomplete="password" required
                                class="px-2 py-2 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                        </div>
                    </div>
    
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <div class="mt-1">
                            <input name="confirm_password" type="password" autocomplete="confirm-password" required
                                class="px-2 py-2 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                        </div>
                    </div>
                    <div class="mt-5">
                        <input type="checkbox" class="border border-gray-400">
                        <span>
                          I accept the <a href="#" class="text-green-500 font-semibold">Terms of Use</a> & <a href="#" class="text-green-500 font-semibold">Privacy Policy</a> 
                        </span>
                      </div>
                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md border border-transparent bg-green-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-sky-400 focus:ring-offset-2">Register
                            Account
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </x-app-layout>
    