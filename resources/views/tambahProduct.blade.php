<x-dashboard>
    <div class="min-h-svh flex items-center gap-2 justify-center flex-col">

        <div>
            <h1 class="text-5xl font-bold">Tambah Product</h1>
        </div>
        <div>
            <form action="/product-dashboard/tambah" method="POST" class="flex flex-col gap-5 text-center"
                enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-2">
                    <label for="name" class="text-xl font-bold">Nama Product</label>
                    <input type="text" name="name" class="px-2 py-2 border-2 rounded-lg" placeholder="Nama Produk"
                        autofocus>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="desc" class="text-xl font-bold">Deskripsi</label>
                    <input type="text" name="desc" class="px-2 py-2 border-2 rounded-lg" placeholder="Deskripsi">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="stok" class="text-xl font-bold">Stok</label>
                    <input type="number" name="stok" class="px-2 py-2 border-2 rounded-lg" min="0"
                        placeholder="stok">
                </div>
                <div>
                    <input type="file" name="image">
                </div>
                <div>
                    <button type="submit" class="px-5 py-2 text-white text-xl bg-blue-700 rounded-lg">Buat !</button>
                </div>
            </form>
        </div>

    </div>
</x-dashboard>
