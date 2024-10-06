<x-dashboard>
    <div class="min-h-svh flex items-center gap-2 justify-center flex-col">

        <div>
            <h1 class="text-5xl font-bold">Tambah Product</h1>
        </div>
        <div class="border-2 py-5 px-20 rounded-lg shadow-sm bg-gray-50">
            <form action="/product-dashboard/tambah" method="POST" class="flex flex-col gap-5 text-center"
                enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-2">
                    <label for="name" class="text-xl font-bold">Nama Product</label>
                    @error('name')
                        <h1 class="text-red-600">Field name harus diisi</h1>
                    @enderror
                    <input type="text" name="name" class="p-2 border-2 rounded-lg" placeholder="Nama Produk"
                        autofocus>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="desc" class="text-xl font-bold">Deskripsi</label>
                    @error('desc')
                        <h1 class="text-red-600">Field deskripsi harus diisi</h1>
                    @enderror
                    <input type="text" name="desc" class="p-2 border-2 rounded-lg" placeholder="Deskripsi">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="stok" class="text-xl font-bold">Stok</label>
                    @error('desc')
                        <h1 class="text-red-600">Field stok harus diisi</h1>
                    @enderror
                    <input type="number" name="stok" class="p-2 border-2 rounded-lg" min="0"
                        placeholder="stok">
                </div>
                <div>
                    <label class="text-xl font-bold" for="image">Upload
                        file</label>
                    <input class="block w-full text-sm  border p-2 border-gray-300 rounded-lg cursor-pointer bg-white "
                        id="image" name="image" type="file">

                    @error('image')
                        <h1 class="text-red-600">File harus di isi</h1>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="px-5 py-2 text-white text-xl bg-blue-700 rounded-lg">Buat !</button>
                </div>
            </form>
        </div>

    </div>
</x-dashboard>
