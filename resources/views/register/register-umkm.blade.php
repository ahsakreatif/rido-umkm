<x-app-layout>
<div class="min-h-screen grid place-items-center bg-green-100">
  <div class="container mx-auto">
    <!-- wrapper  -->
    <div class="flex flex-col lg:flex-row w-10/12 lg:w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
      <!-- left  -->
      <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-12 bg-no-repeat bg-center bg-cover" style="background-image: url('https://th.bing.com/th/id/OIP.HmiaVTGoYjbdjyhwEs22LwHaHa?rs=1&pid=ImgDetMain')">
        {{-- <h1 class="text-black text-3xl font-bold mb-3">Selamat Datang</h1>
        <div>
          <p class="text-black">Ayok daftarkan usaha anda di website kami</p>
        </div> --}}
      </div>
      <!-- right  -->
      <div class="w-full lg:w-1/2 py-16 px-12">
        <h2 class="text-3xl mb-4">Pendaftaran UMKM</h2>
        <p class="mb-4">Buat akun usaha Anda. Gratis dan hanya membutuhkan waktu sebentar</p>
        <form action="#">
            <div class="mt-5">
              <input type="text" class="border border-gray-400 py-1 px-2 w-full" placeholder="Nama Lengkap">
            </div>
            <div class="mt-5">
              <input type="number" placeholder="NIK" class="border border-gray-400 py-1 px-2 w-full">
            </div>
            <div class="mt-5">
                <input type="number" placeholder="Nomor HP" class="border border-gray-400 py-1 px-2 w-full">
              </div>
            <div class="mt-5">
              <input type="password" placeholder="Password" class="border border-gray-400 py-1 px-2 w-full">
            </div>
            <div class="mt-5">
              <input type="password" placeholder="Confirm Password" class="border border-gray-400 py-1 px-2 w-full">
            </div>
            <div class="mt-5">
              <input type="checkbox" class="border border-gray-400">
              <span>
                I accept the <a href="#" class="text-green-500 font-semibold">Terms of Use</a> & <a href="#" class="text-green-500 font-semibold">Privacy Policy</a> 
              </span>
            </div>
            <div class="mt-5">
              <button class="bg-green-500 w-full text-center text-white py-3">Register Now</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
</x-app-layout>