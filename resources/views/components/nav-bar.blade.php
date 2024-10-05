<nav class=" flex w-full justify-between items-center h-20 bg-green-300 px-5">
    <div><a href="/" class="font-bold text-2xl">Shoppers</a></div>
    <div class="flex gap-5">
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
        @endif
    </div>
</nav>
