<nav class="shadow-xl pb-6 sm:pb-0">
    <div class="flex justify-between items-center h-20 px-5 gap-10">
        <div><a href="/market" class="font-bold text-2xl ">Bubro <span class="text-green-400">Market</span></a>
        </div>
        <div class="flex items-center gap-5">
            <div class="gap-5 items-center hidden sm:flex">
                <form action="{{ env('APP_URL') }}/market/search" class="flex" method="POST">
                    @csrf
                    <input type="text" name="search" class="w-96 rounded-sm border-green-400" placeholder="Cari...">
                    <div class="flex items-center bg-green-400 px-3">
                        <button type="submit">
                            <i data-feather="search" class=""></i>
                        </button>
                    </div>
                </form>
            </div>
            <a href="/cart"><i data-feather="shopping-cart"></i></a>
        </div>
    </div>
    <nav class="flex justify-center bg-slate-50 sm:hidden">
        <div class="gap-5 items-center flex w-full">
            <form action="{{ env('APP_URL') }}/market/search" class="flex w-full px-5" method="POST">
                @csrf
                <input type="text" name="search" class="w-full rounded-sm border-green-400" placeholder="Cari...">
                <div class="flex items-center bg-green-400 px-3">
                    <button type="submit">
                        <i data-feather="search" class=""></i>
                    </button>
                </div>
            </form>
        </div>
    </nav>
</nav>
