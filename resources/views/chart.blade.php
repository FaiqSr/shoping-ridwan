<x-layout>



    @if (!$data)
        <section class="flex items-center justify-center min-h-svh">
            <h1>Lu belum belanja</h1>
        </section>
    @endif


    <div class="relative overflow-x-auto" x-data="{ modal: true, img: '' }">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        jumlah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $chart)
                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            {{ $loop->iteration }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            {{ $chart->product->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ Str::limit($chart->product->desc, 40, '...') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $chart->jumlah }}
                        </td>
                        <td class="px-6 py-4">
                            <button
                                x-on:click=" modal = ! modal; img = 'http://127.0.0.1:8000/{{ $chart->product->image }}'"
                                class="px-5 py-2 bg-blue-700 text-white rounded-lg">Show image
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <form action="/chart/remove/" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $chart->id }}" name="id">
                                <input type="hidden" value="{{ $chart->product_id }}" name="productId">
                                <button type="submit"
                                    class="px-5 py-2 text-white bg-blue-700 rounded-lg">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Main modal -->
        <div id="default-modal" tabindex="-1" aria-hidden="true"
            class=" overflow-y-auto overflow-x-hidden fixed  z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
            :class="modal ? 'hidden' : ''">
            <div class="relative p-4 w-full max-w-2xl max-h-full m-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow ">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                        <h3 class="text-xl font-semibold ">
                            Image
                        </h3>
                        <button type="button" x-on:click=" modal = ! modal"
                            class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                            data-modal-hide="default-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <img :src="img" alt="">
                    </div>
                    <!-- Modal footer -->
                </div>
            </div>
        </div>
    </div>
</x-layout>
