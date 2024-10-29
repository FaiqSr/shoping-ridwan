<div x-data="{ aside: false }">
    <nav class="fixed z-50 bg-green-50 flex w-full justify-between items-center h-20 px-5 shadow-xl  ">
        <div><a href="/" class="font-bold text-2xl ">Bubro <span class="text-green-400">Farm</span></a>
        </div>
        <div class="gap-5 items-center hidden sm:flex">
            <a href="/" class="hover:text-cyan-600">Home</a>
            <a href="#tentang" class="hover:text-cyan-600">Tentang</a>
            <a href="#kontak" class="hover:text-cyan-600">Hubungi kami</a>
            <a href="/market" class="hover:text-cyan-600">Market</a>
            @if (Auth::check())
                <a href="/profile">Profile</a>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">
                        Logout
                    </button>
                </form>
                <a href="/chart/{{ Auth::user()->id }}" class="px-5 py-2 bg-blue-300 rounded-lg">chart</a>
                @if (Auth::user()->isAdmin == 1)
                    <a href="/dashboard">Dashboard</a>
                @endif
            @endif
        </div>
        <div class="flex gap-5 items-center">
            <a href="/market" class="btn-primary rounded-lg transition-all hidden sm:flex">Belanja Sekarang</a>
            <a href="/market" class="sm:hidden"><i data-feather="shopping-cart"></i></a>
            <div class="sm:hidden ">
                <button x-on:click="aside = ! aside" class="flex flex-col items-center">
                    <div class="w-9 h-1 bg-black my-1"></div>
                    <div class="w-9 h-1 bg-black my-1"></div>
                    <div class="w-9 h-1 bg-black my-1"></div>
                </button>
            </div>
        </div>

    </nav>
    <aside class="fixed w-full h-svh bg-green-50 sm:hidden z-40 transition-all"
        :class="aside ? '' : '-translate-x-[700px]'">
        <div class="flex gap-5 items-center flex-col mt-5 pt-20">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact Us</a>
            @if (Auth::check())
                <a href="/profile">Profile</a>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">
                        Logout
                    </button>
                </form>
                <a href="/chart/{{ Auth::user()->id }}" class="px-5 py-2 bg-blue-300 rounded-lg">chart</a>
            @endif
        </div>
    </aside>
</div>
