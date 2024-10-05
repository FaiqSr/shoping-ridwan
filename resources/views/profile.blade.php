<x-layout>

    <div class="min-h-svh flex items-center justify-center flex-col gap-5">
        <h1>{{ $data->name }}</h1>
        <h3>{{ $data->email }}</h3>
        <a href="/chart/{{ $data->id }}" class="px-5 py-2 bg-blue-300 rounded-lg">chart</a>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>

</x-layout>
