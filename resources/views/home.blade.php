<x-layout>
    <!-- Jumbotron -->
    <div class="relative overflow-hidden bg-cover bg-no-repeat py-12 text-center bg-center"
        style="background-image: url('/aset/homepage.jpg'); height: 400px">
        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed ">
            <div class="flex h-full items-center  justify-center lg:items-end">
                <div class="text-white lg   lg:text-black z-10">
                    <h2 class="mb-4 text-3xl sm:text-5xl font-semibold ">Segar,
                        Sederhana, Sehat</h2>
                    <h4 class="mb-6 text-3xl font-semibold">Bubro Farm</h4>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="absolute sm:block -bottom-1 ">
            <path fill="#f8fafc" fill-opacity="1"
                d="M0,192L80,170.7C160,149,320,107,480,112C640,117,800,171,960,197.3C1120,224,1280,224,1360,224L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </div>
    <!-- Jumbotron -->

    <div class="flex justify-center gap-10 container mx-auto pt-5 flex-col sm:flex-row">
        <div class="flex justify-center flex-col items-center ">
            <i data-feather="droplet" class="w-16 h-16 text-blue-500"></i>
            <p class="font-light text-lg">Hidroponik</p>
        </div>
        <div class="flex justify-center flex-col items-center">
            <i data-feather="box" class="w-16 h-16 text-amber-900"></i>
            <p class="font-light text-lg">Langsung dari petani</p>
        </div>
        <div class="flex justify-center flex-col items-center">
            <i data-feather="x-circle" class="w-16 h-16 text-red-500"></i>
            <p class="font-light text-lg">Bebas pestisida</p>
        </div>
    </div>

    {{-- Produk --}}

    <div class=" flex  items-center justify-center flex-col container mx-auto py-5  px-5 ">
        <p class="sm:text-center sm:text-xl"><span class="font-bold">Bubro<span
                    class="text-green-400">Farm</span></span>, kami menyajikan kesegaran
            sayuran organik dan ikan
            berkualitas,
            termasuk
            pecel lele yang menggugah selera. Nikmati harmoni rasa dan nutrisi dalam setiap hidangan, dan rayakan
            kelezatan alami bersama kami!</p>

        <div class="text-center container mx-auto mt-10">
            <h3 class="text-4xl font-bold">Produk kami</h3>
            {{-- <h1 class="text-3xl font-bold">Product</h1> --}}
            <div class="flex flex-col items-center  justify-center gap-5 my-8 px-5 sm:flex-row">

                <a href="#"
                    class="flex flex-col items-center w-full sm:max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#0284c7"
                        height="100px" width="100px" version="1.1" viewBox="0 0 512 512"
                        enable-background="new 0 0 512 512">
                        <g>
                            <g>
                                <path
                                    d="m42.3,160.4c45.8,39.6 105.6,62.7 169.5,65.7 0.5,0.5 1,1 1.5,1.4l54.4,47c3.9,3.3 8.6,5 13.3,5 5.7,0 11.4-2.4 15.5-7.1 7.4-8.5 6.4-21.4-2.1-28.8l-23.6-20.4c46.6-6.9 90-24.6 126.2-51.7l46.1,39.8c9.7,8.5 22.6,4.7 28.8-2.1 7.6-8.3 6.4-21.4-2.1-28.8l-41.2-35.4 41.2-35.5c8.5-7.4 9.5-20.3 2.1-28.8-7.4-8.5-20.3-9.5-28.8-2.1l-46.1,39.7c-36-27-79.2-44.7-125.6-51.6l23-19.8c8.5-7.4 9.5-20.3 2.1-28.8-7.4-8.5-20.3-9.5-28.8-2.1l-54.4,47c-0.3,0.2-0.5,0.5-0.8,0.8-64.2,3-124.2,26.1-170.2,65.8-4.5,3.9-7.1,9.5-7.1,15.5 2.13163e-14,5.8 2.6,11.5 7.1,15.3zm184.3-56.2c50.6,0 98.5,14.3 137.5,40.7-39,26.4-86.9,40.7-137.5,40.7-50.6,0-98.5-14.3-137.5-40.7 39-26.3 86.9-40.7 137.5-40.7z" />
                                <path
                                    d="m42.6,395.4l37-22.1c16.5-9.9 37-9.9 53.5,0 29.8,17.8 66.7,17.8 96.5,0l.1-.1c16.5-9.9 37-9.9 53.5,0l.6,.3c29.8,17.8 66.7,17.8 96.5,0l1-.6c16.5-9.9 37-9.9 53.5,0l.5,.3 35.1,18.5c10.1,5.3 22.7,1.5 28.1-8.5 5.4-10 1.6-22.4-8.6-27.7l-34.2-18c-29.7-17.5-66.4-17.4-96,0.3l-1,.6c-16.5,9.9-37,9.9-53.5,0l-.6-.3c-29.8-17.8-66.7-17.8-96.5,0l-.1,.1c-16.5,9.9-37,9.9-53.5,0-29.8-17.8-66.7-17.8-96.5,0l-37,22.1c-9.8,5.9-13,18.5-7,28.2 5.4,8.4 18.8,10.8 28.6,6.9z" />
                                <path
                                    d="m490.1,459.3l-34.2-18c-29.7-17.5-66.4-17.4-96,0.3l-1,.6c-16.5,9.9-37,9.9-53.5,0l-.6-.3c-29.8-17.8-66.7-17.8-96.5,0l-.1,.1c-16.5,9.9-37,9.9-53.5,0-29.8-17.8-66.7-17.8-96.5,0l-37,22.1c-9.8,5.9-13,18.5-7,28.2 5.3,8.4 18.7,10.9 28.5,6.9l37-22.1c16.5-9.9 37-9.9 53.5,0 29.8,17.8 66.7,17.8 96.5,0l.1-.1c16.5-9.9 37-9.9 53.5,0l.6,.3c29.8,17.8 66.7,17.8 96.5,0l1-.6c16.5-9.9 37-9.9 53.5,0l.5,.3 35.1,18.5c10.1,5.3 22.7,1.5 28.1-8.5 5.4-9.9 1.6-22.4-8.5-27.7z" />
                            </g>
                        </g>
                    </svg>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900  ">Ikan</h5>
                </a>


                <a href="#"
                    class="flex flex-col items-center w-full sm:max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">

                    <svg enable-background="new 0 0 239.121 211.139" height="100px" id="Layer_1" version="1.1"
                        viewBox="0 0 239.121 211.139" width="239.121px" xml:space="preserve"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g>
                            <path
                                d="M213.082,19.504c-1.18-1.459-3.297-3.063-6.014-3.057c-6.08,0.763-7.246,4.442-9.848,7.833   c-1.24,1.941-2.588,4.221-4.098,6.735C173.98,11.865,147.473,0,118.229,0C88.176,0,61.016,12.532,41.768,32.622   c-4.035-4.349-8.738-7.2-14.217-7.697c-4.926-0.075-9.379,3.215-11.916,7.891C5.686,50.217,0,70.383,0,91.836   c0.004,58.263,41.85,106.747,97.174,117.206c0.365,0.074,0.732,0.14,1.098,0.209c0.088,0.016,0.176,0.031,0.264,0.047   c6.385,1.201,12.967,1.843,19.693,1.841c0.182,0,0.361-0.009,0.543-0.01c0.264,0.001,0.525,0.01,0.791,0.01   c66.021,0,119.553-53.401,119.559-119.303C239.188,62.905,230.461,40.058,213.082,19.504z M187.346,39.396   c0.109,0.113,0.234,0.198,0.352,0.299c-6.834,10.342-16.527,22.417-31.717,31.955c-11.117,6.976-26.291,18.144-39.307,28.065   c0.043-0.765,0.072-1.534,0.072-2.314c-0.051-13.62-6.088-30.083-8.023-47.491c-0.137-1.221-0.201-2.407-0.201-3.562   c-0.367-19.22,19.256-30.847,29.695-34.263C157.316,16.128,174.299,25.844,187.346,39.396z M118.229,10.001   c3.609,0,7.17,0.206,10.674,0.593c-11.57,5.815-25.086,17.35-25.381,35.754c0,1.345,0.074,2.718,0.236,4.123   c2.072,18.093,8.043,34.767,7.99,46.93c-0.002,2.424-0.236,4.635-0.734,6.654c-7.744,5.968-14.248,11.108-17.943,14.046   c-2.004-2.554-4.072-5.049-6.199-7.453C66.027,87.256,62.328,82.472,55.996,60.36c-2.201-6.989-4.922-13.765-8.258-19.495   C65.26,21.886,90.328,10.004,118.229,10.001z M10,91.836c0.004-19.683,5.205-38.112,14.316-54.058   c1.734-2.799,2.514-2.781,3.234-2.856c1.227-0.256,5.414,2.11,9.18,7.482c3.82,5.222,7.422,12.724,9.635,20.655   c6.336,23.059,12.361,31.367,33.064,54.268c18.654,20.475,33.021,51.159,32.736,64.2c0,0.964-0.072,1.799-0.193,2.476   c-1.246,7.053-2.117,11.182-2.662,13.479c-0.535,2.289-0.664,2.352-0.609,2.378l-0.01,0.02l-0.002,0.009   c-0.09,0.225-0.139,0.454-0.193,0.682c-3.572-0.362-7.094-0.899-10.557-1.595c-3.102-0.667-10.016-2.623-10.453-2.643   C42.654,182.614,10.09,141.058,10,91.836z M134.727,199.726c-5.172,0.894-10.488,1.373-15.916,1.405   c-0.033,0-0.064-0.001-0.098-0.001c0.592-2.308,1.568-6.723,3.109-15.384c0.238-1.364,0.342-2.769,0.342-4.217   c-0.223-14.289-9.537-35.884-23.139-55.387c10.031-7.983,43.102-34.021,62.264-46.019c17.705-11.092,28.639-25.391,35.896-36.664   c3.625-5.631,6.361-10.542,8.443-13.77c0.467-0.733,0.904-1.371,1.291-1.902c15.008,18.602,22.135,37.914,22.199,64.05   c-0.086,48.09-31.172,88.866-74.41,103.51C152.924,195.95,138.664,199.046,134.727,199.726z"
                                fill="#4ade80" />
                            <path
                                d="M199.344,141.89c-0.469-0.293-1.084-0.153-1.379,0.314c-13.936,22.195-36.701,38.538-63.518,44.348   c-0.541,0.115-0.883,0.647-0.766,1.189c0.115,0.538,0.648,0.881,1.189,0.766c27.35-5.927,50.566-22.587,64.787-45.237   C199.953,142.799,199.811,142.183,199.344,141.89z"
                                fill="#4ade80" />
                            <path
                                d="M212.105,108.562c-0.541-0.106-1.064,0.25-1.168,0.792c-1.213,6.295-3.039,12.378-5.424,18.185   c-0.209,0.509,0.035,1.094,0.545,1.304c0.512,0.21,1.096-0.035,1.307-0.544c2.432-5.931,4.297-12.14,5.535-18.568   C213.004,109.189,212.65,108.666,212.105,108.562z"
                                fill="#4ade80" />
                        </g>
                    </svg>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Sayuran</h5>
                </a>


                <a href="#"
                    class="flex flex-col items-center w-full sm:max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
                    <svg fill="#be123c" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="100px"
                        viewBox="0 0 394.167 394.167" xml:space="preserve">
                        <g>
                            <path
                                d="M370.214,78.172c5.23-3.363,11.121-7.194,18.146-7.194c1.951,0,3.879,0.294,5.807,0.898   c-1.267-6.119-6.497-10.701-11.589-15.159c-4.354-3.819-8.474-7.41-10.305-11.953l-0.192-0.492h0.006   c0,0,16.939-17.831,7.867-33.161c-9.074-15.327-12.953-7.341-14.25,0c-1.291,7.344-15.456-12.661-17.702-0.646   c-2.252,12.016-25.7,2.969-19.647,17.138c0,0,1.405,3.485,5.254,6.677c-22.115,3.414-34.461,13.13-46.604,32.744   c-3.387,5.471-8.538,18.126-12.165,27.412c-17.282,44.111-30.715,49.239-53.953,49.239c-10.73,0-21.474-2.939-31.958-7.521   c-4.894-2.835-42.532-25.271-52.365-49.615C126.05,60.487,79.458,11.38,31.363,32.926c-48.099,21.548-38.881,37.8,14.024,52.611   c50.101,14.027-48.594,15.531-13.021,47.6c35.569,32.06-3.015,31.062,45.09,68.644c44.486,34.75,27.031,52.062,49.449,67.29   c-0.018,0.029-0.039,0.06-0.057,0.096c0.426,0.276,0.928,0.492,1.372,0.769c1.489,0.942,3.123,1.886,4.957,2.811   c0,0,0.117,0.012,0.141,0.012c6.29,2.967,13.543,5.128,21.053,7.302c7.938,2.318,24.167,6.924,24.167,6.924   c20.746,2.24,51.296-22.284,63.251-40.19c18.478-28.858,4.876-52.025-5.146-82.881l4.623-1.468   c9.542,29.802,24.698,55.604,4.582,87.003c-11.739,17.624-39.199,40.185-61.279,42.346c0.724,0.444,9.704,6.215,17.579,10.497   c7.467,4.059,12.913,11.078,14.991,19.323c1.705,6.785,3.975,13.402,6.989,19.623c1.615,3.339,1.67,7.224,0.126,10.593   c-1.537,3.375-4.491,5.908-8.076,6.869c-6.347,1.718-12.994,4.126-18.125,8.6c-1.58,1.398-2.387,3.459-2.159,5.548   c0.234,2.09,1.466,3.939,3.309,4.948c2.769,1.507,6.173,1.219,8.647-0.744c6.461-5.141,18.38-5.621,28.564-9.548   c3.627-1.394,7.729-0.937,10.953,1.219c1.152,0.769,2.359,1.501,3.74,2.216c5.284,2.727,9.758,6.617,13.211,11.457   c0.973,1.357,1.783,2.666,2.396,3.903c1.502,3.038,4.528,5.044,7.915,5.254l4.341,0.252c0.763,0.048,1.501-0.239,2.03-0.792   c0.522-0.559,0.78-1.31,0.696-2.066c-0.259-2.468-1.009-4.953-2.09-7.379c-0.384-0.865-0.3-1.85,0.21-2.637   c0.511-0.787,1.388-1.255,2.33-1.255c16.129,0.03,27.058,3.976,32.702,6.714c2.984,1.453,6.533,1.141,9.212-0.799l1.068-0.781   c1.405-1.009,2.21-2.648,2.168-4.377c-0.036-1.729-0.931-3.327-2.378-4.27c-14.94-9.74-40.305-10.49-52.729-13.745   c-20.134-5.356-30.186-29.952-28.937-45.967c0.012,0.013,0.018,0.013,0.029,0.013l-0.006-0.091l2.45-0.138   c16.23-0.889,26.331-15.522,35.656-29.971c16.453-25.49,24.296-25.784,24.296-25.784c42.736-4.371,66.73-39.866,73.312-108.477   c1.951-20.248-4.035-32.275-10.383-45.021c-2.93-5.909-5.98-12.009-8.383-19.152l-0.799-2.387l2.402-0.727   C364.39,81.958,367.229,80.114,370.214,78.172z M345.384,58.434c-3.309,0-5.98-2.687-5.98-5.983c0-3.303,2.684-5.978,5.98-5.978   c3.291,0,5.969,2.681,5.969,5.978S348.687,58.434,345.384,58.434z" />
                        </g>
                    </svg>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Ayam</h5>
                </a>

            </div>
            <a href="/market" class="btn-primary ">Lihat semua</a>
        </div>
    </div>
    {{-- Produk --}}
    {{-- Brocademy --}}

    <div class="flex justify-center flex-col-reverse sm:flex-row items-center  container mx-auto py-10 pt-28"
        id="brocademy">
        <div class="px-10 ">
            <h1 class="text-3xl sm:text-5xl font-bold text-center sm:text-start mt-4 sm:mt-0">Bro<span
                    class="text-green-400">Cademy</span></h1>
            <h3 class="text-2xl sm:text-3xl font-bold text-center mt-2 sm:text-start">Belajar bersama tentang
                budidaya
                tanaman</h3>
            <div class="flex gap-5 items-center mt-5">
                <p class="font-bold text-5xl"><span>&#183;</span> </p>
                <p>Akses Pembelajaran yang Fleksibel</p>
            </div>
            <div class="flex gap-5 items-center">
                <p class="font-bold text-5xl"><span>&#183;</span> </p>
                <p>Kegiatan Interaktif</p>
            </div>
            <div class="mb-7 flex gap-5 items-center">
                <p class="font-bold text-5xl"><span>&#183;</span> </p>
                <p>Pengalaman Praktis</p>
            </div>
            <div class="flex justify-center sm:justify-start">
                <a href="#" class="btn-primary  ">Pelajari selengkapnya</a>
            </div>
        </div>
        <div style="background-image: url('https://picsum.photos/384/384')"
            class="bg-no-repeat bg-cover bg-center w-80 h-80 sm:h-96 sm:w-96 ">

        </div>
    </div>
    {{-- Brocademy --}}
    {{-- Kontak --}}
    <div class="mb-10 container mx-auto flex pt-28 flex-col sm:flex-row items-center" id="kontak">
        <div class="w-full flex flex-col justify-between px-5">
            <h1 class="text-3xl sm:text-5xl font-bold text-center sm:text-start mt-4 sm:mt-0">Hubungi <span
                    class="text-green-400">kami</span></h1>
            <h3 class="text-2xl sm:text-3xl font-bold text-center mt-2 sm:text-start">Hubungi kami melalui kontak di
                bawah</h3>
            <div class="flex gap-5 items-center my-5">
                <p class="font-bold text-5xl"><i data-feather="phone" style="width: 30px; height: 30px"></i> </p>
                <p>Akses Pembelajaran yang Fleksibel</p>
            </div>
            <div class="flex gap-5 items-center">
                <p class="font-bold text-5xl"><i data-feather="mail" style="width: 30px; height: 30px"></i> </p>
                <p>Kegiatan Interaktif</p>
            </div>
            <h1 class="text-2xl mt-5">Ikuti kami</h1>
            <div class="flex gap-5 ">
                <a href="#"><i data-feather="instagram" style="width: 30px; height: 30px"
                        class="hover:text-red-300"></i></a>
                <a href="#"><i data-feather="facebook" style="width: 30px; height: 30px"
                        class="hover:text-blue-300"></i></a>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center px-5 w-full ">
            <h1 class="text-2xl mb-2">Kirim Pesan</h1>
            <div class="w-fit">
                <form action="#" class=" rounded-xl p-10 border-2 shadow-sm bg-white w-72 h-fit sm:w-96 ">
                    @csrf
                    <div class=" flex flex-col gap-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="rounded-lg px-3 py-3 bg-gray-50 border-2">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="pesan">Pesan</label>
                        <textarea name="pesan" id="" cols="30" rows="2"
                            class="rounded-lg px-3 py-3 bg-gray-50 border-2"></textarea>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="px-5 py-2 bg-cyan-400 rounded-lg">Kirim!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.372843443807!2d106.7592029848273!3d-6.474369046570819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c3be5277571b%3A0x8db28c028e9362a!2sBubro%20Farm!5e0!3m2!1sid!2sid!4v1729959215946!5m2!1sid!2sid"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    {{-- Kontak --}}
    {{-- End --}}
    {{-- <div class="relative overflow-hidden bg-cover bg-no-repeat py-12 text-center bg-center"
        style="background-image: url('/aset/homepage.jpg'); height: 400px">
        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed ">
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="absolute sm:block -top-1 ">
            <path fill="#f8fafc" fill-opacity="1"
                d="M0,224L80,208C160,192,320,160,480,122.7C640,85,800,43,960,58.7C1120,75,1280,149,1360,186.7L1440,224L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
            </path>
        </svg>
    </div> --}}
    {{-- End --}}
</x-layout>
