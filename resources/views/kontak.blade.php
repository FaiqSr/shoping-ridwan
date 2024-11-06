<x-layout>
    <div class="min-h-svh">
        <section class="container mx-auto px-5 my-5 gap-5">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem repudiandae explicabo incidunt soluta
                reprehenderit mollitia earum culpa, autem ex laborum dolorum voluptate quas fugiat sapiente quo
                asperiores
                illo ducimus quam?</p>
            <h3 class="font-semibold font-Oswald mt-5">Jam operasional</h3>
            <p>07.00 - 20.00</p>
        </section>
        <section class="container mx-auto px-5 flex my-5  flex-col lg:flex-row">
            <article class="bg-slate-200  p-5 pb-7 border-b-2 max-w-96 h-80 flex flex-col justify-center shadow-lg">
                <h1 class="mb-2 text-2xl font-bold ">Kontak</h1>
                <p class="mb-2">Jl. Bukit Intan, RT.003/RW.003, Tajurhalang, Kec. Tajur Halang, Kabupaten Bogor, Jawa
                    Barat
                    16320</p>
                <p class="mb-5 text-xl">+62 812 3456 789</p>
                <div>
                    <a href="#" class="bg-green-300 rounded-lg px-5 py-2 hover:text-white">WhatsApp</a>
                </div>
            </article>
            <section class="container mx-auto px-5 mt-5 lg:mt-0">

                <h3 class="font-semibold font-Oswald">Kirim pesan langsung</h3>

                <form action="#" method="POST" class="flex flex-col gap-3">
                    @csrf
                    <div class="flex flex-col">
                        <label for="">Nama</label>
                        <input type="text" placeholder="Nama">
                    </div>
                    <div class="flex flex-col">
                        <label for="">Email</label>
                        <input type="email" placeholder="Email">
                    </div>
                    <div class="flex flex-col">
                        <label for="">Pesan</label>
                        <textarea name="pesan" id="pesan" cols="10" rows="3" placeholder="Pesan"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn-primary">Kirim</button>
                    </div>
                </form>
            </section>
        </section>
    </div>

</x-layout>
