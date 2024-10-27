<x-app-layout>
    <div class="bg-green-100 font-[sans-serif]">
        <div class="min-h-screen flex flex-col items-center justify-center py-6 px-4">
          <div class="max-w-md w-full">
            <svg class="mb-8 mx-auto" width="33" height="34" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_1_358" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="33" height="34">
                    <path d="M0 6.5C0 3.67157 0 2.25736 0.87868 1.37868C1.75736 0.5 3.17157 0.5 6 0.5H31.2321C32.2085 0.5 33 1.2915 33 2.26786C33 19.5169 19.0169 33.5 1.76786 33.5C0.791496 33.5 0 32.7085 0 31.7321V6.5Z" fill="#99EA48" />
                </mask>
                <g mask="url(#mask0_1_358)">
                    <path d="M0 6.5C0 3.67157 0 2.25736 0.87868 1.37868C1.75736 0.5 3.17157 0.5 6 0.5H31.2321C32.2085 0.5 33 1.2915 33 2.26786C33 19.5169 19.0169 33.5 1.76786 33.5C0.791496 33.5 0 32.7085 0 31.7321V6.5Z" fill="#99EA48" />
                    <path d="M11 18C11 15.1716 11 13.7574 11.8787 12.8787C12.7574 12 14.1716 12 17 12H24.25C24.6642 12 25 12.3358 25 12.75C25 20.0678 19.0678 26 11.75 26C11.3358 26 11 25.6642 11 25.25V18Z" fill="#191F33" />
                </g>
            </svg>
  
            <div class="p-8 rounded-2xl bg-white shadow">
              <h2 class="text-gray-800 text-center text-2xl font-bold">Login</h2>
              @if(session('success'))
              <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mt-3 rounded relative" role="alert">
                  {{ session('success') }}
              </div>
          @endif
  
          @if($errors->any())
              <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mt-3 rounded relative" role="alert">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
              <form action="{{ route('login.submit') }}" method="POST" class="mt-8 space-y-4">
                @csrf
                <div>
                  <label class="text-gray-800 text-sm mb-2 block">Email</label>
                  <div class="relative flex items-center">
                    <input name="username" type="text" required class="w-full text-gray-800 text-sm border border-gray-300 px-4 py-3 rounded-md outline-accent" placeholder="Masukan Email" />
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-4 h-4 absolute right-4" viewBox="0 0 24 24">
                      <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                      <path d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z" data-original="#000000"></path>
                    </svg>
                  </div>
                </div>
  
                <div>
                  <label class="text-gray-800 text-sm mb-2 block">Password</label>
                  <div class="relative flex items-center">
                    <input name="password" type="password" required class="w-full text-gray-800 text-sm border border-gray-300 px-4 py-3 rounded-md outline-accent" placeholder="Masukan Password" />
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-4 h-4 absolute right-4 cursor-pointer" viewBox="0 0 128 128">
                      <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" data-original="#000000"></path>
                    </svg>
                  </div>
                </div>
  
                <div class="flex flex-wrap items-center justify-between gap-4">
                  <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 text-green-400 focus:ring-accent border-gray-300 rounded" />
                    <label for="remember-me" class="ml-3 block text-sm text-gray-800">
                      Remember me
                    </label>
                  </div>
                  <div class="text-sm">
                    <a href="jajvascript:void(0);" class="text-green-400 hover:underline font-semibold">
                      Lupa password?
                    </a>
                  </div>
                </div>
  
                <div class="!mt-8">
                  <button type="submit" class="w-full py-3 px-4 text-sm tracking-wide rounded-lg text-white bg-green-400 hover:bg-green-500 focus:outline-none">
                    Sign in
                  </button>
                </div>
                <p class="text-gray-800 text-sm !mt-8 text-center">Tidak punya akun? <a href="/register-user" class="text-green-400 hover:underline ml-1 whitespace-nowrap font-semibold">Register</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>
