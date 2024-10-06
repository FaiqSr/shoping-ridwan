<x-layout>


    <h1 class="text-center text-4xl font-bold">{{ $title }}</h1>




    @foreach ($data as $datas)
        <div class="flex flex-wrap px-5 sm:px-20 ">
            <div class="flex items-center justify-center mb-5 sm:mb-0 sm:min-h-svh w-full sm:w-1/2 ">
                <img src="http://127.0.0.1:8000/{{ $datas->image }}" alt="">
            </div>
            <div class="sm:min-h-svh flex w-full sm:w-1/2 items-center flex-col justify-center gap-10">
                <div class="text-center">
                    <h1 class="text-4xl font-bold">{{ $datas->name }}</h1>
                    <p class="text-lg mb-3">{{ $datas->desc }}</p>
                    <p>Sisa : {{ $datas->stok }}</p>
                </div>

                @if ($datas->stok > 0)
                    <form action="/market/buy" method="POST" class="text-center flex flex-col gap-2">
                        @csrf
                        <input type="number" min="1" max="{{ $datas->stok }}" name="jumlah" value="1"
                            id="jumlah-{{ $datas->product_id }}" class="border p-2 rounded" required>
                        <input type="hidden" name="productId" value="{{ $datas->id }}">
                        <button type="submit"
                            class="px-5 py-2 bg-blue-700 rounded-lg text-white hover:bg-blue-800">Beli
                            sekarang</button>
                    </form>
                @endif
            </div>
            @error('jumlah')
                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
            @enderror
        </div>
    @endforeach
    <div class="flex gap-5 overflow-auto flex-col items-center justify-center ">

        <a href="/market" class="text-blue-700 hover:underline">Back</a>
    </div>


</x-layout>
