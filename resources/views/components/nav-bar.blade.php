<div x-data="{ aside: false }">
    <nav class="fixed z-50 bg-green-500 flex w-full justify-between items-center h-20 px-5 shadow-lg  ">
        <div><a href="/" class="font-bold text-2xl text-white">Bubro <span class="text-green-200">Farm</span></a>
        </div>
        <div class="gap-5 items-center hidden sm:flex">
            <a href="/" class="hover:text-cyan-600">Home</a>
            <a href="/about" class="hover:text-cyan-600">About</a>
            <a href="/contact" class="hover:text-cyan-600">Contact Us</a>
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
        <div class="sm:hidden ">
            <button x-on:click="aside = ! aside" class="flex flex-col items-center">
                <div class="w-9 h-1 bg-black my-1"></div>
                <div class="w-9 h-1 bg-black my-1"></div>
                <div class="w-9 h-1 bg-black my-1"></div>
            </button>
        </div>
    </nav>
    <aside class="fixed w-full h-svh bg-green-50 sm:hidden z-40 transition-all"
        :class="aside ? '' : '-translate-x-[700px]'">
        <div class="flex gap-5 items-center flex-col mt-5 pt-20">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact Us</a>
            <a href="/market">Market</a>
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
