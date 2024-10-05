<x-layout>


    <h1>{{ $title }}</h1>

    <div class="flex gap-5 overflow-auto">
        @foreach ($data as $datas)
            <div class="h-fit w-96">
                <a href="/market/{{ $datas->id }}"
                    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $datas->name }}
                    </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ Str::limit($datas->desc, 30) }}</p>
                </a>

            </div>
        @endforeach
    </div>
    <section class="min-h-svh ">asfasf</section>


</x-layout>
