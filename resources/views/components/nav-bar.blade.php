<div x-data="{ aside: false }">
    <nav class=" flex w-full justify-between items-center h-20 bg-green-300 px-5">
        <div><a href="/" class="font-bold text-2xl">Shoppers</a></div>
        <div class="gap-5 items-center hidden sm:flex">
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
    <aside class="fixed w-[300px] h-svh bg-green-50 sm:hidden z-40 transition-all"
        :class="aside ? '' : '-translate-x-96'">
        <div class="flex gap-5 items-center flex-col mt-5">
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
