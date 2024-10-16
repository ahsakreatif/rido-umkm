<x-app-layout>
    <div class="bg-gray-100 flex h-screen items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-xs md:max-w-sm space-y-6 mt-8"> <!-- Mengurangi ukuran maksimal form -->
            <div class="bg-white shadow-md rounded-lg p-4 border border-gray-300"> <!-- Mengecilkan shadow dan border -->
    
                <img class="mx-auto h-10 w-auto" src="https://th.bing.com/th/id/OIP.CxQ2bTvLg_vPTwmt56B1swHaHa?w=860&h=860&rs=1&pid=ImgDetMain" alt="" />
    
                <h2 class="my-1 text-center text-xl font-semibold text-gray-900"> <!-- Mengecilkan ukuran font judul -->
                    Daftar akun
                </h2>
    
                <form class="space-y-3" method="POST"> <!-- Mengurangi jarak antar elemen form -->
    
                    <div>
                        <label for="username" class="block text-xs font-medium text-gray-700">Nama Lengkap</label> <!-- Mengecilkan ukuran font label -->
                        <div class="mt-1">
                            <input name="username" type="username" required
                                class="px-2 py-1 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 text-xs" /> <!-- Mengecilkan padding dan ukuran font input -->
                        </div>
                    </div>
    
                    <div>
                        <label for="nik" class="block text-xs font-medium text-gray-700">NIK</label>
                        <div class="mt-1">
                            <input name="nik" type="number" pattern="\d{16}" required
                                class="px-2 py-1 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 text-xs" />
                        </div>
                    </div>

                    <div>
                        <label for="phone" class="block text-xs font-medium text-gray-700">No. HP</label>
                        <div class="mt-1">
                            <input name="phone" type="number" required
                                class="px-2 py-1 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 text-xs" />
                        </div>
                    </div>
    
                    <div>
                        <label for="password" class="block text-xs font-medium text-gray-700">Password</label>
                        <div class="mt-1">
                            <input name="password" type="password" required
                                class="px-2 py-1 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 text-xs" />
                        </div>
                    </div>
    
                    <div>
                        <label for="confirm_password" class="block text-xs font-medium text-gray-700">Confirm Password</label>
                        <div class="mt-1">
                            <input name="confirm_password" type="password" required
                                class="px-2 py-1 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 text-xs" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <input type="checkbox" class="border border-gray-400">
                        <span class="text-xs">
                          I accept the <a href="#" class="text-green-500 font-semibold">Terms of Use</a> & <a href="#" class="text-green-500 font-semibold">Privacy Policy</a> 
                        </span>
                    </div>

                    <div class="mt-3">
                        <button type="submit"
                            class="flex w-full justify-center rounded-md border border-transparent bg-green-500 py-1.5 px-4 text-xs font-medium text-white shadow-sm hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-sky-400 focus:ring-offset-2">
                            Register Account
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
