<x-layout>
    <main class="flex min-h-svh items-center justify-center flex-col gap-5">

        <h1 class="text-5xl font-bold">Login Form</h1>
        <form action="/login" method="POST" class="flex flex-col gap-3 border-2 px-14 py-14 rounded-lg">
            @csrf
            <div class="flex justify-center text-red-800">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
            <div class="flex flex-col items-center gap-2">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="border-2 rounded-lg py-2 px-2 " autofocus
                    required value="{{ old('email') }}">
            </div>
            <div class="flex flex-col items-center gap-2">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="border-2 rounded-lg py-2 px-2" required>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="px-5 py-2 bg-blue-500 rounded-lg">Login</button>
            </div>
        </form>

    </main>
</x-layout>
