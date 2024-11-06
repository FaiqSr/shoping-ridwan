<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Oswald Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    {{-- Bebas Neue Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@200..700&display=swap"
        rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Bubro Farm</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <x-nav-bar />
    <main class="flex min-h-svh items-center justify-center flex-col gap-5 bg-cyan-100">

        <div class=" p-10 rounded-lg bg-white shadow-lg">
            <h1 class="font-BNeue text-2xl font-thin text-center">Login Form</h1>
            <form action="/login" method="POST" class="flex flex-col gap-3">
                @csrf
                <div class="flex justify-center text-red-800">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <div class="flex flex-col items-center gap-2 mb-2">
                    <input type="email" name="email" id="email"
                        class="border rounded-sm py-2 px-2 shadow-sm w-80" placeholder="email" autofocus required
                        value="{{ old('email') }}">
                </div>
                <div class="flex flex-col items-center gap-2 mb-2">
                    <input type="password" name="password" id="password"
                        class="border rounded-sm py-2 px-2 w-80 shadow-sm" placeholder="password" required>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="px-5 py-2 bg-blue-500 rounded-lg text-white">Login</button>
                </div>
            </form>

        </div>

    </main>
</body>

</html>
