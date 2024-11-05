<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css', 'resources/js/app.js')
    <title>Market BubroFarm</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <x-navbar-market />
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
    <x-footer />
</body>

</html>
