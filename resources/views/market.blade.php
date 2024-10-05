<x-layout>


    <h1>{{ $title }}</h1>




    <div class="flex gap-5 overflow-auto flex-col items-center justify-center min-h-svh">
        @foreach ($data as $datas)
            <div class="h-fit w-96 flex flex-col gap-5">
                <section
                    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $datas->name }}
                    </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ Str::limit($datas->desc, 30) }}</p>
                    <p class="font-bold text-gray-900">Stok: {{ $datas->stok }}</p> <!-- Menampilkan stok -->
                </section>
                @if ($datas->stok > 0)
                    <form action="/market/buy" method="POST" class="text-center">
                        @csrf
                        <input type="number" min="1" max="{{ $datas->stok }}" name="jumlah" value="1"
                            id="jumlah-{{ $datas->product_id }}" class="border p-2 rounded" required>
                        <input type="hidden" name="productId" value="{{ $datas->id }}">
                        <button type="submit"
                            class="px-5 py-2 bg-blue-700 rounded-lg text-white hover:bg-blue-800">Beli
                            sekarang</button>
                    </form>
                @endif
                @error('jumlah')
                    <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                @enderror
            </div>
        @endforeach

        <a href="/market" class="text-blue-700 hover:underline">Back</a>
    </div>
    <section class="min-h-svh">asfasf</section>


</x-layout>
