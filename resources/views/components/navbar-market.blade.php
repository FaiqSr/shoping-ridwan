<nav>
    <div class="flex justify-center items-center h-20 px-5 shadow-xl gap-10">
        <div><a href="/" class="font-bold text-2xl ">Bubro <span class="text-green-400">Market</span></a>
        </div>
        <div class="gap-5 items-center hidden sm:flex">
            <form action="{{ env('APP_URL') }}/search" class="flex">
                @csrf
                <input type="text" name="search" class="w-96 rounded-sm border-green-400" placeholder="Cari...">
                <div class="flex items-center bg-green-400 px-3"><button type="submit"><i data-feather="search"
                            class=""></i></button></div>
            </form>
        </div>
        <div>
            <a href="/cart"><i data-feather="shopping-cart"></i></a>
        </div>
</nav>
