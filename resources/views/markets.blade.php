<x-layout>


    <h1 class="text-center text-5xl font-bold">{{ $title }}</h1>

    <div>
        <div>
            <h1 class="text-3xl font-bold mb-3 pl-5">Hewan Musang</h1>
        </div>
        <div class="flex overflow-auto px-5 gap-5 ">
            @foreach ($data as $datas)
                <section class="w-96">
                    <a href="/market/{{ $datas->id }}"
                        class="flex flex-col text-center border-2 p-5 rounded-lg items-center">
                        <div class="w-80">
                            <img src="http://127.0.0.1:8000/{{ $datas->image }}" alt="" class=" rounded-lg">
                        </div>
                        <h1>{{ $datas->name }}</h1>
                        <p>{{ Str::limit($datas->desc, 50, '...') }}</p>
                    </a>
                </section>
            @endforeach
        </div>
    </div>
    <section class="min-h-svh ">asfasf</section>


</x-layout>
