<div x-data="{ aside: false }">
    <nav class="z-50  flex w-full justify-between items-center h-20 px-5 border-b-2  ">
        <div><a href="/" class="font-bold text-2xl ">Bubro <span class="text-green-400">Farm</span></a>
        </div>
        <div class="gap-5 items-center hidden sm:flex">
            <a href="/" class="hover:text-cyan-600">Home</a>
            <a href="#tentang" class="hover:text-cyan-600">Tentang</a>
            <a href="#kontak" class="hover:text-cyan-600">Hubungi kami</a>
            <a href="/market" class="hover:text-cyan-600">Market</a>
        </div>
        <div class="flex gap-5 items-center">
            <a href="/market" class=""><i data-feather="shopping-cart"></i></a>
            @if (Auth::check())
                <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                    data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer"
                    src="/aset/profile.jpg" alt="User">
                <!-- Dropdown menu -->
                <div id="userDropdown"
                    class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div>Bonnie Green</div>
                        <div class="font-medium truncate">name@flowbite.com</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                        <li>
                            <a href="/chart/{{ Auth::user()->id }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Keranjang</a>
                        </li>
                        @if (Auth::user()->isAdmin == 1)
                            <li>
                                <a href="/dashboard"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                        @endif
                    </ul>
                    <div class="py-1">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white w-full">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @endif
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
        </div>
    </aside>
</div>
