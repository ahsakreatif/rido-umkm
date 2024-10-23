@php
    // $products = [
    //     [
    //         'image' =>
    //             'https://images.unsplash.com/photo-1511556532299-8f662fc26c06?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    //         'name' => 'Product Name',
    //         'description' => 'ipsum dolor sit amet consectetur adipisicing elit. Ad, quas?',
    //         'price' => '$399',
    //     ],
    //     [
    //         'image' => 'https://21cleanshoes.vercel.app/_next/image?url=%2Fgallery%2Fgallery-14.jpeg&w=384&q=75',
    //         'name' => 'Product Name',
    //         'description' => 'ipsum dolor, sit a conseqtatis assumenda quisquam do,.',
    //         'price' => '$399',
    //     ],
    // ];
@endphp
<x-app-layout>
    <section class="py-32 container mx-auto">
        <div class="pb-8">
            <div class="border-b-[3px] pb-2 mb-12">
                <h2
                    class="text-lg md:text-2xl after:mt-2 font-bold after:block w-max after:h-[3px] after:left-0 after:right-0 after:absolute relative after:bg-black ">
                    PRODUK UMKM
                </h2>
            </div>
            <div class="flex-1 text-sm sm:text-base flex justify-end space-x-4">
                <a href="/" class="font-medium">Beranda</a>
                <span>/</span>
                <span class="text-black/60">Produk</span>
            </div>
        </div>
        @if (count($products) > 0)
            <div class="grid lg:grid-cols-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($products as $product)
                    <div>
                        <div
                            class="h-full cursor-pointer rounded-lg bg-white p-2 shadow shadow-black/20 duration-150 hover:scale-105 hover:shadow-md">
                            <img class="w-full max-h-52 h-52 rounded-lg object-cover object-center"
                                src="{{ Storage::url($product->image) }}" alt="{{ $product->title }}" />
                            <div class="p-4">
                                <p class="font-bold">{{ $product->title }}</p>
                                <p class="mb-4 mt-2">{{ Str::limit($product->about, 100) }}</p>
                                <p class="text-xl font-semibold text-gray-800">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-8">
                <p class="text-xl font-semibold text-gray-600">Belum ada produk tersedia :(</p>
            </div>
        @endif
    </section>
</x-app-layout>
