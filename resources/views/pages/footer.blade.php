<footer class="w-full p-6 sm:p-0 mx-auto bg-blue-500 py-2 md:py-10 lg:py-10">
    <div class="w-full sm:max-w-7xl p-6 sm:p-0 mx-auto">
        <div class="flex flex-col md:flex-row lg:flex-row justify-center ">
            <div class="w-full">
                <h1 class="text-white font-bold text-xl">Propertiku</h1>
                <div class="ring-1 ring-gray-200 mb-5 mt-2"></div>
                <p class="text-white">Propertiku adalah website resmi untuk mencari hunian terbaik buat anda</p>
            </div>
            <div class="w-full my-5 md:my-0 lg:my-0 p-0 md:ml-20 lg:ml-20 md:mr-20 lg:mr-20">
                <h1 class="text-white font-bold text-xl">Lokasi Properti</h1>
                <div class="ring-1 ring-gray-200 mb-5 mt-2"></div>
                <ul>
                    @foreach ($model as $lokasi)
                        <a href="{{ route('lokasi_filter', $lokasi->slug) }}" class="">
                            <li class="text-gray-200 mt-2 hover:text-white">{{ $lokasi->nama_lokasi }}</li>
                        </a>
                    @endforeach
                </ul>
            </div>
            <div class="w-full">
                <h1 class="text-white font-bold text-xl">Tipe Properti</h1>
                <div class="ring-1 ring-gray-200 mb-5 mt-2"></div>
                <ul>
                    @foreach ($tipe as $tipe)
                        <a href="{{ route('tipeproperti_filter', $tipe->slug) }}" class="">
                            <li class="text-gray-200 mt-2 hover:text-white">{{ $tipe->nama_tipe }}</li>
                        </a>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</footer>
